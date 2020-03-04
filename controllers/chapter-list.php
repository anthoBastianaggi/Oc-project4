<?php
include_once 'models/chapters.php';

function chapterList($page) {
    $chapter = new Chapters();
    $allChapters = $chapter->getAllChapters();
    include_once 'views/account/sections/chapter-list/'.$page.'.php';
}