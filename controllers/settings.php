<?php
include_once 'models/settings.php';
include_once 'services/auth.php';
include_once 'services/app.php';

function settings($page) {
    if(AuthService::isAuthenticated()) {
        include_once 'views/account/sections/settings/'.$page.'.php';
    }
}

function deleteMyAccount($page) {
    require 'views/includes/bootstrap.php';
    $account = new Settings();
    $deleteAccount = $account->deleteAccount($_SESSION['auth']->id);
    App::getAuth()->logout();
    Session::getInstance()->setFlash('success', "Votre compte a bien été supprimé.");
    App::redirect('/projet4/home');
}

