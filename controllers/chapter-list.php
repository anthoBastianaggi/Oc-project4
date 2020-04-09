<?php
include_once 'models/chapters.php';
include_once 'models/profile.php';
include_once 'services/auth.php';
include_once 'services/app.php';

function chapterList($page) {
    if(AuthService::is_role_admin()) {
        $profile = new Profile();
        $infoProfile = $profile->infoProfile($_SESSION['auth']->id);
        $chapter = new Chapters();
        $allChapters = $chapter->getAllChapters();
        include_once 'views/account/sections/chapter-list/'.$page.'.php';
    } else {
        App::redirect('/projet4/profile?action=profile');
    }
}