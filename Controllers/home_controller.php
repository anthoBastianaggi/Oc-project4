<?php

include_once 'Models/chapters.php';

function home($page) {
    $lastChapters = Chapters::getThreeLastChapters();
    include_once 'Views/'.$page.'_view.php';
}