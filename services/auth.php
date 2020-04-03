<?php 

function is_admin() {
    if($_SESSION['auth']) {
        return true;
    } else {
        Session::getInstance()->setFlash('danger', "Vous n'avez pas accès à cette page. Veuillez vous connecter.");
        App::redirect('/projet4/login?action=login');
    }
}

function is_role_admin() {
    if($_SESSION['auth']->role_id === "1") {
        return true;
    } else {
        Session::getInstance()->setFlash('danger', "Vous n'avez pas accès à cette page.");
        App::redirect('/projet4/chapters?action=chapters');
    }
}