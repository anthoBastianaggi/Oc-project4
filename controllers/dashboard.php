<?php
include_once 'models/profile.php';
include_once 'services/auth.php';
include_once 'services/app.php';

function dashboard($page) {
    if(AuthService::is_role_admin()) {
        $profile = new Profile();
        $infoProfile = $profile->infoProfile($_SESSION['auth']->id);
        include_once 'views/account/sections/dashboard/'.$page.'.php';
    }
    App::redirect('/projet4/profile?action=profile');
}