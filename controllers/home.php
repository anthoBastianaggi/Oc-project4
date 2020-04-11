<?php

function home($page) {
    $chapter = new Chapters();
    $lastChapters = $chapter->getThreeLastChapters();
    include_once 'views/home/'.$page.'.php';
}