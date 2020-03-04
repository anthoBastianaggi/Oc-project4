<?php
include_once 'Models/comments.php';

function reportComment($page) {
    $comment = new Comments();
    $allSignaleComments = $comment->getAllSignaleComment();
    include_once 'Views/Account/Sections/ReportComment/'.$page.'.php';
}

function validateSignaleComment($page) {
    $comment = new Comments();
    $valideSignaleComment = $comment->validateSignaleComment($_GET['id']);
    header('Location: /projet4/reportComment?action=reportComment'); 
}

function deleteSignaleComment($page) {
    $comment = new Comments();
    $deleteSignaleComment = $comment->deleteSignaleComment();
    header('Location: /projet4/reportComment?action=reportComment'); 
}