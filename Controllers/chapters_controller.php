<?php

include_once 'Models/chapters.php';
include_once 'Models/comments.php';

function chapters($page) {
    $chapter = new Chapters();
    $allChapters = $chapter->getAllChapters();
    include_once 'Views/'.$page.'_view.php';
}

function showChapter($page) {
    $chapter = new Chapters();
    $showChapter = $chapter->showChapter();
    $comment = new Comments();
    $allComments = $comment->getAllComments($showChapter['id']);
    include_once 'Views/'.$page.'_show_view.php';
}

function addChapter($page) { 

    if(!empty($_POST) && isset($_POST['btnAjoutTicket'])) {      
        if(!empty($_POST['titleTicket']) && !empty($_POST['contentTicket'])) {
            $titleTicket = str_secur($_POST['titleTicket']);
            $contentTicket = str_secur($_POST['contentTicket']);

            $chapter = new Chapters();
            $addChapter = $chapter->addChapter($_POST['titleTicket'], $_POST['contentTicket']);
        }
    }
    include_once 'Views/'.$page.'_add_view.php';   
}

function deleteChapter($page) { 
    $chapter = new Chapters();
    $deleteChapter = $chapter->deleteChapter();
    header('Location: /sites/projet4/home'); 
}

function updateChapter($page) {
    $chapter = new Chapters();
    $showChapter = $chapter->showChapter();
    if(!empty($_POST) && isset($_POST['btnUpdateChapter'])) {
        
        $updateChapter = $chapter->updateChapter($_POST['titleTicket'], $_POST['contentTicket'], $_GET['id']);
        include_once 'Views/'.$page.'_show_view.php'; exit;
    }
    include_once 'Views/'.$page.'_update_view.php'; 
}