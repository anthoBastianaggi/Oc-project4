<?php

class Contact {
    /**
        * Contact constructor.
        * @param $id
    */
    function __construct() {
        global $db;
    }
    
    /**
        * Ajout d'un message de contact
        * @return array
    */
    public function addMessageContact($authorContact, $subject, $content) {
        global $db;

        $reqContact= $db->prepare('INSERT INTO message(users_id, subject, content, sended_at) VALUES(?, ?, ?, NOW())');
        $reqContact->execute(array($authorContact, $subject, $content));
    }
}