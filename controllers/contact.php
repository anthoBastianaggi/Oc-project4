<?php
require_once 'views/includes/bootstrap.php';
include_once 'services/session.php';

function contact($page) {
    $contact = new Contact();
    $infoContact = $contact->infoContact();
    if(isset($_SESSION['auth'])) {
        if(!empty($_POST) && isset($_POST['btn-contact'])) {
            if(isset($_POST['username'])  && isset($_POST['subject']) && isset($_POST['message'])) {
                if(!empty($_POST['username']) && !empty($_POST['subject']) && !empty($_POST['message'])) {
                    if($_POST['username'] !== $_SESSION['auth']->username) {
                        Session::getInstance()->setFlash('danger', "Votre pseudo est différent de celui ou vous êtes connecté. Veuillez entrer le bon pseudo.");
                    } else {
                        $username = str_secur($_POST['username']);
                        $email = str_secur($_SESSION['auth']->email);
                        $objectMessage = str_secur($_POST['subject']);
                        $message = str_secur($_POST['message']);
                
                        $addMessageContactIsConnected = $contact->addMessageContactIsConnected($_SESSION['auth']->id, $objectMessage, $message);
                        $message .= ' - email envoyé par : ' . $username . ' : ' . $email;
                        // ENVOYER UN EMAIL
                        mail('a.bastianaggi@gmail.com', 'On me contacte sur mon site', $message);
                        Session::getInstance()->setFlash('success', "Le message a bien été envoyé.");
                    }
                } else {     
                    Session::getInstance()->setFlash('danger', "Vous devez remplir tous les champs !");         
                } 
            } else {
                Session::getInstance()->setFlash('danger', "Une erreur s'est produite. Rééssayez !");
            }
        }
    } else {
        if(!empty($_POST) && isset($_POST['btn-contact'])) {
            if(isset($_POST['name']) && isset($_POST['name-family']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])) {
                if(!empty($_POST['name']) && !empty($_POST['name-family']) && !empty($_POST['email']) && !empty($_POST['subject']) && !empty($_POST['message'])) {
                    $firstname = str_secur($_POST['name']);
                    $lastname = str_secur($_POST['name-family']);
                    $email = str_secur($_POST['email']);
                    $objectMessage = str_secur($_POST['subject']);
                    $message = str_secur($_POST['message']);
                    $contact = new Contact();
                    
                    $addMessageContact = $contact->addMessageContact($firstname, $lastname, $email, $objectMessage, $message);
                    $message .= ' - email envoyé par : ' . $firstname . ' ' . $lastname . ' : ' . $email;
                    // ENVOYER UN EMAIL
                    Session::getInstance()->setFlash('success', "Le message a bien été envoyé.");
                    mail('a.bastianaggi@gmail.com', 'On me contacte sur mon site', $message);
                } else {
                    Session::getInstance()->setFlash('danger', "Vous devez remplir tous les champs !");              
                } 
            } else {
                Session::getInstance()->setFlash('danger', "Une erreur s'est produite. Rééssayez !");
            }
        } 
    }  
    include_once 'views/contact/'.$page.'.php';
}
