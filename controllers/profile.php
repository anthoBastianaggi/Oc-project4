<?php
include_once 'models/profile.php';
include_once 'services/auth.php';

function profile($page) {
    require 'views/includes/bootstrap.php';
    if(AuthService::isAuthenticated()) {
        if(!empty($_POST) && isset($_POST['btnUpdateProfile'])) {
            $profile = new Profile();
            $updateProfile = $profile->updateProfile($_POST['username'], $_POST['firstname'], 
            $_POST['lastname'], $_POST['birthdate'], $_POST['fixnumber'], $_POST['phonenumber'], 
            $_POST['address'], $_POST['city'], $_POST['country'], $_POST['postalcode'], 
            $_POST['about'], $_SESSION['auth']->id);
            Session::getInstance()->setFlash('success', "Votre profil a bien été mis à jour.");
        }
        include_once 'views/account/sections/profile/'.$page.'.php';
    }
}
