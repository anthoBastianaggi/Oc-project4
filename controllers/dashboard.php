<?php
include_once 'services/auth.php';
include_once 'services/app.php';

function dashboard($page) {
    if(AuthService::is_role_admin()) {
        include_once 'views/account/sections/dashboard/'.$page.'.php';
    }
    App::redirect('/projet4/profile?action=profile');
}