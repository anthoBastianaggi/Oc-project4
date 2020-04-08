<?php
include_once 'models/profile.php';

function dashboard($page) {
    $profile = new Profile();
    $infoProfile = $profile->infoProfile($_SESSION['auth']->id);
    include_once 'views/account/sections/dashboard/'.$page.'.php';
}