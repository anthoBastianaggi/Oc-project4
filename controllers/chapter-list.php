<?php
include_once 'models/chapters.php';
include_once 'models/profile.php';

function chapterList($page) {
    $profile = new Profile();
    $infoProfile = $profile->infoProfile($_SESSION['auth']->id);
    $chapter = new Chapters();
    $allChapters = $chapter->getAllChapters();
    include_once 'views/account/sections/chapter-list/'.$page.'.php';
}