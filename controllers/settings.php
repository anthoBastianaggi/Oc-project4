<?php
include_once 'models/settings.php';
include_once 'models/profile.php';

function settings($page) {
    $profile = new Profile();
    $infoProfile = $profile->infoProfile($_SESSION['auth']->id);
    include_once 'views/account/sections/settings/'.$page.'.php';
}

function deleteMyAccount($page) {
    require 'views/includes/bootstrap.php';
    $account = new Settings();
    $deleteAccount = $account->deleteAccount($_SESSION['auth']->id);
    App::getAuth()->logout();
    Session::getInstance()->setFlash('success', "Votre compte a bien été supprimé.");
    App::redirect('/projet4/home');
}

