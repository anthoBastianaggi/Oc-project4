<?php
require_once 'views/includes/bootstrap.php'; 
include_once 'services/auth.php';
include_once 'services/app.php';

function updateEmail($page) {
    if(AuthService::isAuthenticated()) {
        if(!empty($_POST)) {
            $db = App::getDatabase();
            $validator = new Validator($_POST);
            $validator->isEmail('email', "Votre email n'est pas valide.");
            if($_POST['email'] !== $_SESSION['auth']->email) {
                Session::getInstance()->setFlash('danger', "Erreur l'adresse rentrée est différente de l'adresse actuelle. Veuillez rentrer la bonne adresse.");
            } else {
                if(!empty($_POST['new-email'])) {
                    if($_POST['new-email'] === $_POST['email']) {
                        Session::getInstance()->setFlash('danger', "Erreur. Veuillez rentrer une adresse différente que celle actuelle.");
                    } else if($validator->isValid()){
                        $updateEmail = new Settings();
                        $updateEmail->updateEmail($_POST['new-email'],  $_SESSION['auth']->id);
                        $validator->isUniq('email', $db, 'users', "Cet email est déjà utilisé pour un autre compte.");
                        Session::getInstance()->setFlash('success', "Votre adresse email a bien été modifiée.");
                        App::redirect('/projet4/settings?action=settings');
                    } else {
                        Session::getInstance()->setFlash('danger', "Une erreur inattendu est survenu. Veuillez réessayer.");
                    }
                } else {
                    Session::getInstance()->setFlash('danger', "Veuillez remplir le champs nouvelle adresse.");
                }   
            } 
        }
       include_once 'views/account/sections/settings/update-email/'.$page.'.php'; 
    }
}