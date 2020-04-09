<?php
include_once 'services/auth.php';
function deleteAccount($page) {
    if(AuthService::isAuthenticated()) {
        include_once 'views/account/sections/settings/delete-account/'.$page.'.php';
    }
}