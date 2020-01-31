<?php

include_once 'Models/chapters.php';
include_once 'Models/comments.php';

function showComment($page) {
    $comment = new Comments();
    $showComment = $comment->showComment();
    include_once 'Views/Chapters/Sections/Chapter/ChapterShow/'.$page.'_show_view.php';
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
    header('Location: /projet4/chapters?action=showChapter&id=' .$_GET['id']); 
}

function deleteComment($page) { 
    $comment = new Comments();
    $deleteComment = $comment->deleteComment();
    header('Location: /projet4/home'); 
}

function updateComment($page) {
    if(!empty($_POST) && isset($_POST['btnUpdateComment'])) {
        $comment = new Comments();
        $updateComment = $comment->updateComment($_POST['idComment'], $_POST['contentComment'], $_GET['id']);
        include_once 'Views/Chapters/Sections/Comment/CommentUpdate/'.$page.'_update_view.php'; exit;
    }
    include_once 'Views/Chapters/Sections/Comment/CommentUpdate/'.$page.'_update_view.php';  
}