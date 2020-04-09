<?php

include_once 'services/auth.php';
include_once 'services/session.php';


function showComment($page) {
    $comment = new Comments();
    $showComment = $comment->showComment();
    include_once 'views/chapters/sections/chapter/chapter-show/'.$page.'_show_view.php';
}

function addComment($page) {
    if(AuthService::isAuthenticated()) {
        if(!empty($_POST) && isset($_POST['btnAddComment'])) {      
            if(!empty($_POST['commentChapter'])) {
                $commentChapter= Helpers::str_secur($_POST['commentChapter']);
                $comment = new Comments();
                $addComment = $comment->addComment($_GET['id'], $commentChapter,  $_SESSION['auth']->id);
            }
        }
        Session::getInstance()->setFlash('success', "Le commentaire a bien été ajouté.");
        App::redirect('/projet4/chapters?action=showChapter&id='.$_GET['id']);
    }
}

function deleteComment($page) { 
    $comment = new Comments();
    $showComment = $comment->showComment();
    $deleteComment = $comment->deleteComment();
    Session::getInstance()->setFlash('success', "Le commentaire a bien été supprimé.");
    App::redirect('/projet4/chapters?action=showChapter&id=' .$showComment['ticket_id']);  exit;
}

function updateComment($page) {
    if(AuthService::isAuthenticated()) {
        $comment = new Comments();
        $showComment = $comment->showComment();
        if(!empty($_POST) && isset($_POST['btnUpdateComment'])) {
            $updateComment = $comment->updateComment($_POST['contentComment'], $_GET['id']);
            Session::getInstance()->setFlash('success', "Le commentaire a bien été mis à jour.");
            App::redirect('/projet4/chapters?action=showChapter&id=' .$showComment['ticket_id']);  exit;
        }
        include_once 'views/chapters/sections/comment/comment-update/'.$page.'_update_view.php';  
    }
}

function signaleComment($page) { 
    $comment = new Comments();
    $showComment = $comment->showComment();
    $signaleComment = $comment->signaleComment($_SESSION['auth']->id, $_GET['id']);
    Session::getInstance()->setFlash('success', "Le commentaire a bien été signalé.");
    App::redirect('/projet4/chapters?action=showChapter&id=' .$showComment['ticket_id']);
}