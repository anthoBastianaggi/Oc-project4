<?php



function confirm($page) {
    $db = App::getDatabase();

    if(App::getAuth()->confirm($db, $_GET['id'], $_GET['token'], Session::getInstance())) {  
        Session::getInstance()->setFlash('success', "Votre compte a bien été validé.");
        App::redirect('/projet4/profile?action=profile');
    } else {
        Session::getInstance()->setFlash('danger', "Ce token n'est plus valide.");
        App::redirect('/projet4/login?action=login');
    }
}