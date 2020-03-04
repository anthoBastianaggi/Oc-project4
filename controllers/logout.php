<?php
function logout($page) {
    require 'views/includes/bootstrap.php';
    App::getAuth()->logout();
    Session::getInstance()->setFlash('success', "Vous êtes maintenant déconnecté");
    App::redirect('/projet4/login?action=login');
}