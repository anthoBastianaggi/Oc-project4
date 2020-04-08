<?php
include_once 'models/profile.php';

function profile($page) {
    require 'views/includes/bootstrap.php';
    $profile = new Profile();
    $infoProfile = $profile->infoProfile($_SESSION['auth']->id);
    //var_dump($infoProfile['lastname']); die;
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
