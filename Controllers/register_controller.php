<?php

function register($page) {
    if(!empty($_POST)) {
        $errors = array();
        $db = App::getDatabase();
        $validator = new Validator($_POST);
        $validator->isAlpha('firstname', "Votre prénom n'est pas valide.");
        $validator->isAlpha('lastname', "Votre nom n'est pas valide.");
        $validator->isDate('birthdate', "Votre date de naissance n'est pas valide.");
        $validator->isAlphaNum('username', "Votre pseudo n'est pas valide (alphanmérique).");
        if($validator->isValid()) {
            $validator->isUniq('username', $db, 'users', "Ce pseudo est déjà pris.");
        }
        $validator->isEmail('email', "Votre email n'est pas valide.");
        if($validator->isValid()) {
            $validator->isUniq('email', $db, 'users', "Cet email est déjà utilisé pour un autre compte.");
        }
        $validator->isConfirmed('password', "Vous devez rentrer un mot de passe valide.");
    
        if($validator->isValid()){
            App::getAuth()->register($db, $_POST['firstname'], $_POST['lastname'],$_POST['birthdate'],$_POST['username'],$_POST['password'], $_POST['email']);
            Session::getInstance()->setFlash('success', "Un email de confirmation vous a été envoyé sur votre compte.");
            App::redirect('login.php');
        } else {
            $errors = $validator->getErrors();
        }
    }
    include_once 'Views/'.$page.'_view.php';
}