<?php

include_once 'Models/chapters.php';

function home($page) {
    $chapter = new Chapters();
    $lastChapters = $chapter->getThreeLastChapters();
    include_once 'Views/'.$page.'_view.php';
}