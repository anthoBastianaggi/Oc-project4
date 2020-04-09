<?php
require_once 'views/includes/bootstrap.php'; 
include_once 'services/auth.php';
include_once 'services/app.php';

function chapters($page) {
    $chapter = new Chapters();
    $allChapters = $chapter->getAllChapters();
    $lastChapters = $chapter->getThreeLastChapters();
    include_once 'views/chapters/sections/chapter/'.$page.'.php';
}

function showChapter($page) {
    if(AuthService::isAuthenticated()) {
        $chapter = new Chapters();
        $showChapter = $chapter->showChapter();
        $date = $showChapter['created_at'];
        $dateFormatted = date('d-m-Y', strtotime($date));
        $lastChapters = $chapter->getThreeLastChapters();
        $comment = new Comments();
        $allComments = $comment->getAllComments($showChapter['id']);
        include_once 'views/chapters/sections/chapter/chapter-show/'.$page.'_show_view.php';
    }
}

function addChapter($page) { 
    if(AuthService::is_role_admin()) {
        if(!empty($_POST) && isset($_POST['btnAjoutTicket'])) {  
            if(!empty($_POST['titleTicket']) && !empty($_POST['contentTicket'])) {
                $titleTicket = str_secur($_POST['titleTicket']);
                $contentTicket = str_secur($_POST['contentTicket']);
                $chapter = new Chapters();
                $addChapter = $chapter->addChapter($_POST['titleTicket'], $_POST['contentTicket'], $_SESSION['auth']->id);
                Session::getInstance()->setFlash('success', "Le chapitre a bien été ajouté.");
                header('Location: /projet4/chapters?action=chapters'); exit;
            }
        }
        include_once 'views/chapters/sections/chapter/chapter-add/'.$page.'_add_view.php';     
    } 
    App::redirect('/projet4/chapters?action=chapters');
}

function deleteChapter($page) { 
    $chapter = new Chapters();
    $deleteChapter = $chapter->deleteChapter();
    Session::getInstance()->setFlash('success', "Le chapitre a bien été supprimé.");
    header('Location: /projet4/chapters?action=chapters');  
}

function updateChapter($page) {
    if(AuthService::is_role_admin()) {
        $chapter = new Chapters();
        $showChapter = $chapter->showChapter();
        if(!empty($_POST) && isset($_POST['btnUpdateChapter'])) {
            $updateChapter = $chapter->updateChapter($_POST['titleTicket'], $_POST['contentTicket'], $_GET['id']);
            Session::getInstance()->setFlash('success', "Le chapitre a bien été mis à jour.");
            header('Location: /projet4/chapters?action=showChapter&id='.$_GET['id']); exit;
        }
        include_once 'views/chapters/sections/chapter/chapter-update/'.$page.'_update_view.php'; 
    }
    App::redirect('/projet4/chapters?action=chapters');
}