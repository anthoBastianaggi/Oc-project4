<?php

include_once 'Models/chapters.php';
include_once 'Models/comments.php';

function showChapter($page) {
    $chapter = new Chapters();
    $showChapter = $chapter->showChapter();
    $comment = new Comments();
    $allComments = $comment->getAllComments($showChapter['id']);
    include_once 'Views/'.$page.'_show_view.php';
}

function addComment($page) {
    if(!empty($_POST) && isset($_POST['btnAddComment'])) {      
        if(!empty($_POST['commentChapter'])) {
            $commentChapter= str_secur($_POST['commentChapter']);
            $comment = new Comments();
            $addComment = $comment->addComment($_GET['id'], $commentChapter);
            $chapter = new Chapters();
            $showChapter = $chapter->showChapter();
        }
    }
    include_once 'Views/'.$page.'_show_view.php'; 
}

function deleteComment($page) { 
    $comment = new Comments();
    $deleteComment = $comment->deleteComment();
    header('Location: /sites/projet4/home'); 
}

function updateComment($page) {
    if(!empty($_POST) && isset($_POST['btnUpdateComment'])) {
        $comment = new Comments();
        $updateComment = $comment->updateComment($_POST['contentComment']);
    }
    include_once 'Views/'.$page.'_update_view.php';  
}