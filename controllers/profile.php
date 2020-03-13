<?php
include_once 'models/profile.php';

function profile($page) {
    include_once 'views/account/sections/profile/'.$page.'.php';
}

function updateProfile($page) {
   if(!empty($_POST) && isset($_POST['btnUpdateProfile'])) {
        $profile = new Profile();
        $updateProfile = $profile->updateProfile($_POST['username'], $_POST['firstname'], 
        $_POST['lastname'], $_POST['birthdate'], $_POST['fixnumber'], $_POST['phonenumber'], 
        $_POST['address'], $_POST['city'], $_POST['country'], $_POST['postalcode'], 
        $_POST['about'], $_SESSION['auth']->id);
   }
   header('/projet4/profile?action=profile');
}