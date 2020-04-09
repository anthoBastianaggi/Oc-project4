<?php
require_once 'views/includes/bootstrap.php'; 
include_once 'services/app.php';
include_once 'services/auth.php';

function logout($page) {
    App::getAuth()->logout();
    Session::getInstance()->setFlash('success', "Vous êtes maintenant déconnecté");
    App::redirect('/projet4/login?action=login');
}