<?php
require_once 'views/includes/bootstrap.php';

function settings($page) {
    if(AuthService::isAuthenticated()) {
        $profile = new Profile();
        $infoProfile = $profile->infoProfile($_SESSION['auth']->id);
        include_once 'views/account/sections/settings/'.$page.'.php';
    }
}

function deleteMyAccount($page) {
    $account = new Settings();
    $deleteAccount = $account->deleteAccount($_SESSION['auth']->id);
    App::getAuth()->logout();
    Session::getInstance()->setFlash('success', "Votre compte a bien été supprimé.");
    App::redirect('/projet4/home');
}

