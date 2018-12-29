<?php

include_once 'Models/chapters.php';

function chapters($page) {
    $chapter = new Chapters();
    $chapter->getAllChapters();
    //$allChapters = Chapters::getAllChapters();
    include_once 'Views/'.$page.'_view.php';
}

function showChapter($page) {
    $chapter = new Chapters();
    $chapter->showChapter();
    //$showChapter = Chapters::showChapter();
    $chapter->getAllComments($showChapter['id']);
    //$allComments = Chapters::getAllComments($showChapter['id']);
    include_once 'Views/'.$page.'_show_view.php';
}

function addChapter($page) { 

    if(!empty($_POST) && isset($_POST['btnAjoutTicket'])) {      
        if(!empty($_POST['titleTicket']) && !empty($_POST['contentTicket'])) {
            $titleTicket = str_secur($_POST['titleTicket']);
            $contentTicket = str_secur($_POST['contentTicket']);

            $chapter = new Chapters();
            $chapter->addChapter($_POST['titleTicket'], $_POST['contentTicket']);
            //$addChapter = Chapters::addChapter($_POST['titleTicket'], $_POST['contentTicket']);
        }
    }
    include_once 'Views/'.$page.'_add_view.php';   
}

function deleteChapter($page) { 
    $chapter = new Chapters();
    $chapter->deleteChapter();
    //$deleteChapter = Chapters::deleteChapter();
    header('Location: /sites/projet4/home'); 
}

function updateChapter($page) {
    $chapter = new Chapters();
    $chapter->showChapter();
    if(!empty($_POST) && isset($_POST['btnUpdateChapter'])) {
        
        $chapter->updateChapter($_POST['titleTicket'], $_POST['contentTicket'], $_GET['id']);
        //$updateChapter = Chapters::updateChapter($_POST['titleTicket'], $_POST['contentTicket'], $_GET['id']);
        include_once 'Views/'.$page.'_show_view.php'; exit;
    }
    include_once 'Views/'.$page.'_update_view.php'; 
}

function addComment($page) {
    if(!empty($_POST) && isset($_POST['btnAddComment'])) {      
        if(!empty($_POST['commentChapter'])) {
            $commentChapter= str_secur($_POST['commentChapter']);
            $chapter = new Chapters();
            $chapter->addComment($_GET['id'], $commentChapter);
            //Chapters::addComment($_GET['id'], $commentChapter);
            $chapter->showChapter();
            //$showChapter = Chapters::showChapter();
        }
    }
    include_once 'Views/'.$page.'_show_view.php'; 
}

function deleteComment($page) { 
    $deleteComment = Chapters::deleteComment();
    header('Location: /sites/projet4/home'); 
}

function updateComment($page) {
    if(!empty($_POST) && isset($_POST['btnUpdateComment'])) {
        $updateComment = Chapters::updateComment($_POST['contentComment']);
    }
    include_once 'Views/'.$page.'_update_view.php';  
}