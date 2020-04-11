<?php

function resetPassword($page) {
    if(isset($_GET['id']) && isset($_GET['token'])){
        $errors = array();
        $auth = App::getAuth();
        $db = App::getDatabase();
        $user = $auth->checkResetToken($db, $_GET['id'], $_GET['token']);
        if($user){
            if(!empty($_POST)){
                $auth->updatePassword($_POST['password'], $user->id);
                
                $validator = new Validator($_POST);
                $validator->isConfirmed('password');
                if($validator->isValid()) {
                    $password = $auth->hashPassword($_POST['password']);
                    $auth->updatePasswordIsValid($password, $_GET['id']);
                    $auth->connect($user);
                    Session::getInstance()->setFlash('success', "Votre mot de passe a bien été modifié");
                    App::redirect('/projet4/profile?action=profile');
                } else {
                    Session::getInstance()->setFlash('danger', "Votre mot de passe est incorrect.");
                } 
            }
        }else{
            Session::getInstance()->setFlash('danger', "Ce token n'est pas valide");
            App::redirect('/projet4/login?action=login');
        }
    }else{
        App::redirect('/projet4/login?action=login');
    }
    include_once 'views/account/sections/log/reset/'.$page.'.php';
}