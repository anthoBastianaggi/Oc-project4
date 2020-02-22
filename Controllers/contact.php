<?php

include_once 'Models/contact.php';

function contact($page) {
    if(!empty($_POST) && isset($_POST['btn-contact'])) {
        if(isset($_POST['name']) && isset($_POST['name-family']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])) {
            if(!empty($_POST['name']) && !empty($_POST['name-family']) && !empty($_POST['email']) && !empty($_POST['subject']) && !empty($_POST['message'])) {
                $firstname = str_secur($_POST['name']);
                $lastname = str_secur($_POST['name-family']);
                $email = str_secur($_POST['email']);
                $objectMessage = str_secur($_POST['subject']);
                $message = str_secur($_POST['message']);
                $contact = new Contact();
                
                $addMessageContact = $contact->addMessageContact($_SESSION['auth']->id, $objectMessage, $message);
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
