<?php

function dashboard($page) {
    if(AuthService::is_role_admin()) {
        $profile = new Profile();
        $infoProfile = $profile->infoProfile($_SESSION['auth']->id);
        $role = Auth::roleUser($_SESSION['auth']->role_id);
        include_once 'views/account/sections/dashboard/'.$page.'.php';
    } else {
        App::redirect('/projet4/profile?action=profile');
    }   
}