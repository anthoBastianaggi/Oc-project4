<?php

include_once 'models/chapters.php';

function home($page) {
    $chapter = new Chapters();
    $lastChapters = $chapter->getThreeLastChapters();
    include_once 'views/home/'.$page.'.php';
}