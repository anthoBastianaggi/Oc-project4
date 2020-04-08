<?php
include_once 'models/comments.php';
include_once 'models/profile.php';

function reportComment($page) {
    $profile = new Profile();
    $infoProfile = $profile->infoProfile($_SESSION['auth']->id);
    $comment = new Comments();
    $allSignaleCommentsValidate = $comment->getAllSignaleCommentValidate();
    include_once 'views/account/sections/report-comment/'.$page.'.php';
}

function validateSignaleComment($page) {
    $comment = new Comments();
    $valideSignaleComment = $comment->validateSignaleComment();
    header('Location: /projet4/report-comment?action=reportComment'); 
}

function deleteSignaleComment($page) {
    $comment = new Comments();
    $deleteSignaleComment = $comment->deleteSignaleComment();
    header('Location: /projet4/report-comment?action=reportComment'); 
}