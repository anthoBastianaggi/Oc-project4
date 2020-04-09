<?php
require_once 'views/includes/bootstrap.php';
include_once 'services/auth.php';
include_once 'services/session.php';

function profile($page) {
    if(AuthService::isAuthenticated()) {
        $profile = new Profile();
        $infoProfile = $profile->infoProfile($_SESSION['auth']->id);
        $role = Auth::roleUser($_SESSION['auth']->role_id);
        if(!empty($_POST) && isset($_POST['btnUpdateProfile'])) {
            $updateProfile = $profile->updateProfile($_POST['username'], $_POST['firstname'], 
            $_POST['lastname'], $_POST['birthdate'], $_POST['fixnumber'], $_POST['phonenumber'], 
            $_POST['address'], $_POST['city'], $_POST['country'], $_POST['postalcode'], 
            $_POST['about'], $_SESSION['auth']->id);
            Session::getInstance()->setFlash('success', "Votre profil a bien été mis à jour.");
            App::redirect('/projet4/profile?action=profile');
        }
        include_once 'views/account/sections/profile/'.$page.'.php';
    }
}
