<?php
include_once 'models/settings.php';
include_once 'services/auth.php';
include_once 'services/app.php';

function updatePassword($page) {
    require_once 'views/includes/bootstrap.php'; 
    if(AuthService::isAuthenticated()) {
        if(!empty($_POST)) {
            $auth = App::getAuth();
            $db = App::getDatabase();
            $validator = new Validator($_POST);
            if($_POST['password'] !== $_SESSION['auth']->password) {
                Session::getInstance()->setFlash('danger', "Erreur le mot de passe rentré est différent du mot de passe actuel. Veuillez rentrer le bon mot de passe.");
            } else {
                if(!empty($_POST['new-password'])) {
                    $validator->isConfirmed('new-password');
                    if($_POST['new-password'] === $_POST['password']) {
                        Session::getInstance()->setFlash('danger', "Erreur. Veuillez rentrer un mot de passe différent de celui actuel.");
                    } else if($validator->isValid()){
                        $updatePassword = new Settings();
                        $password = $auth->hashPassword($_POST['new-password']);
                        $updatePassword->updatePassword($password,  $_SESSION['auth']->id);
                        Session::getInstance()->setFlash('success', "Votre mot de passe a bien été modifié");
                        App::redirect('/projet4/settings?action=settings');
                    } else {
                        Session::getInstance()->setFlash('danger', "Une erreur inattendu est survenu. Veuillez réessayer.");
                    }
                } else {
                    Session::getInstance()->setFlash('danger', "Veuillez remplir les champs nouveau mot de passe et confirmation nouveau mot de passe.");
                }   
            } 
        }
        include_once 'views/account/sections/settings/update-password/'.$page.'.php';
    }
}