<?php
include_once 'models/comments.php';

function reportComment($page) {
    $comment = new Comments();
    $allSignaleComments = $comment->getAllSignaleComment();
    include_once 'views/account/sections/report-comment/'.$page.'.php';
}

function validateSignaleComment($page) {
    $comment = new Comments();
    $valideSignaleComment = $comment->validateSignaleComment($_GET['id']);
    header('Location: /projet4/report-comment?action=reportComment'); 
}

function deleteSignaleComment($page) {
    $comment = new Comments();
    $deleteSignaleComment = $comment->deleteSignaleComment();
    header('Location: /projet4/report-comment?action=reportComment'); 
}