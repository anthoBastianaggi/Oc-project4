<?php
include_once 'models/settings.php';

function settings($page) {
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

