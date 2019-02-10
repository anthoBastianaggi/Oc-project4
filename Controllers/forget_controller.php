<?php

function forget($page) {
    require 'Views/includes/bootstrap.php';
    if(!empty($_POST) && !empty($_POST['email'])){
        $db = App::getDatabase();
        $auth = App::getAuth();
        $session = Session::getInstance();
        if($auth->resetPassword($db, $_POST['email'])) {
            $session->setFash('success', 'Les instructions du rappel de mot de passe vous ont été envoyées par emails');
            App::redirect('/projet4/login?action=login');
        } else {
            $session->setFash('danger', 'Aucun compte ne correspond à cet adresse.');
        }
    }
    include_once 'Views/'.$page.'_view.php';
}