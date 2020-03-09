<?php
include_once 'models/comments.php';

function reportComment($page) {
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