<?php

include_once 'models/chapters.php';
include_once 'models/comments.php';

function chapters($page) {
    $chapter = new Chapters();
    $allChapters = $chapter->getAllChapters();
    $lastChapters = $chapter->getThreeLastChapters();
    include_once 'views/chapters/sections/chapter/'.$page.'.php';
}

function showChapter($page) {
    require 'views/includes/bootstrap.php';
    if(isset($_SESSION['auth'])) {
        $chapter = new Chapters();
        $showChapter = $chapter->showChapter();
        $date = $showChapter['created_at'];
        $dateFormatted = date('d-m-Y', strtotime($date));
        $lastChapters = $chapter->getThreeLastChapters();
        $comment = new Comments();
        $allComments = $comment->getAllComments($showChapter['id']);
        include_once 'views/chapters/sections/chapter/chapter-show/'.$page.'_show_view.php';
    } else {
        header('Location: /projet4/login?action=login'); 
        Session::getInstance()->setFlash('info', "Pour visualiser le chapitre en entier veuillez vous connecter.");         
    }
  
}

function addChapter($page) { 

    if(!empty($_POST) && isset($_POST['btnAjoutTicket'])) {      
        if(!empty($_POST['titleTicket']) && !empty($_POST['contentTicket'])) {
            $titleTicket = str_secur($_POST['titleTicket']);
            $contentTicket = str_secur($_POST['contentTicket']);

            $chapter = new Chapters();
            $addChapter = $chapter->addChapter($_POST['titleTicket'], $_POST['contentTicket'], $_SESSION['auth']->id);
        }
    }
    include_once 'views/chapters/sections/chapter/chapter-add/'.$page.'_add_view.php';   
}

function deleteChapter($page) { 
    $chapter = new Chapters();
    $deleteChapter = $chapter->deleteChapter();
    header('Location: /projet4/home'); 
}

function updateChapter($page) {
    $chapter = new Chapters();
    $showChapter = $chapter->showChapter();
    if(!empty($_POST) && isset($_POST['btnUpdateChapter'])) {
        $updateChapter = $chapter->updateChapter($_POST['titleTicket'], $_POST['contentTicket'], $_GET['id']);
        header('Location: /projet4/chapters?action=showChapter&id='.$_GET['id']); 
    }
    include_once 'views/chapters/sections/chapter/chapter-update/'.$page.'_update_view.php'; 
}