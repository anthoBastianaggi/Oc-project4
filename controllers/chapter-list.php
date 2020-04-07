<?php
include_once 'models/chapters.php';
include_once 'services/auth.php';
include_once 'services/app.php';

function chapterList($page) {
    if(AuthService::is_role_admin()) {
        $chapter = new Chapters();
        $allChapters = $chapter->getAllChapters();
        include_once 'views/account/sections/chapter-list/'.$page.'.php';
    }
    App::redirect('/projet4/profile?action=profile');
}