<?php
include_once 'Models/chapters.php';

function chapterList($page) {
    $chapter = new Chapters();
    $allChapters = $chapter->getAllChapters();
    include_once 'Views/Account/Sections/ChapterList/'.$page.'.php';
}