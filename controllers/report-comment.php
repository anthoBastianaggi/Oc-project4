<?php
include_once 'models/comments.php';
include_once 'services/auth.php';
include_once 'services/app.php';

function reportComment($page) {
    if(AuthService::is_role_admin()) {
        $comment = new Comments();
        $allSignaleCommentsValidate = $comment->getAllSignaleCommentValidate();
        include_once 'views/account/sections/report-comment/'.$page.'.php';
    }
    App::redirect('/projet4/profile?action=profile');
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