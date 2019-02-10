<?php
function logout($page) {
    require 'Views/includes/bootstrap.php';
    App::getAuth()->logout();
    Session::getInstance()->setFlash('success', "Vous êtes maintenant déconnecté");
    App::redirect('/projet4/login?action=login');
}