<?php
function contact($page) {
    if(!empty($_POST) && isset($_POST['btnContact'])) {
        if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['object_message']) && isset($_POST['message'])) {
            if(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['object_message']) && !empty($_POST['message'])) {
                $firstname = str_secur($_POST['firstname']);
                $lastname = str_secur($_POST['lastname']);
                $email = str_secur($_POST['email']);
                $objectMessage = str_secur($_POST['object_message']);
                $message = str_secur($_POST['message']);
                $message .= ' - email envoyé par : ' . $firstname . ' ' . $lastname . ' : ' . $email;
                // ENVOYER UN EMAIL
                mail('a.bastianaggi@gmail.com', 'On me contacte sur mon site', $message);
            } else {
                $error = "Vous devez remplir tous les champs !";
            } 
        } else {
            $error = "Une erreur s'est produite. Rééssayez !";
        }
    } 
    include_once 'Views/Contact/'.$page.'.php';
}
