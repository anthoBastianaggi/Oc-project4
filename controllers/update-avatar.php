<?php

function updateAvatar($page) {
    if(AuthService::isAuthenticated()) {
        if(isset($_POST['submit'])) {
            $target_path = "public/images/";
            $target_path =  $target_path.basename($_FILES['imageAvatar'] ['name']);
            if(move_uploaded_file($_FILES['imageAvatar']['tmp_name'], $target_path)) {
                $settings = new Settings();
                $updateAvatar = $settings->updateAvatar($target_path, $_SESSION['auth']->id);
                Session::getInstance()->setFlash('success', "Votre avatar a bien été modifiée.");
                App::redirect('/projet4/settings?action=settings');
            }
        }
        include_once 'views/account/sections/settings/update-avatar/'.$page.'.php'; 
    }
}