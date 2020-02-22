<?php

function login($page) {
    require 'Views/includes/bootstrap.php';
    $auth = App::getAuth();
    $db = App::getDatabase();
    $auth->connectFromCookie($db);
    if($auth->user()){
        App::redirect('/projet4/profile?action=profile');
    }

    if(!empty($_POST) && !empty($_POST['username']) && !empty($_POST['password'])) {
        $user = $auth->login($db, $_POST['username'], $_POST['password'], isset($_POST['remember']));
        $session = Session::getInstance();
        if($user) {
            $session->setFlash('success', "Vous êtes maintenant connecté");
            App::redirect('/projet4/profile?action=profile');
        } else {
            $session->setFlash('danger', "Identifiant ou mot de passe incorrecte");
        }
    }
    include_once 'Views/Account/Sections/Log/Login/'.$page.'.php';
}