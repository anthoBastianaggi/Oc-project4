<?php

class Contact {
    
    // Contact constructor.
    function __construct() {
        global $db;
    }
    
    /**
        * SQL request to add message contact is connected in the database
        * @return array
    */
    public function addMessageContactIsConnected($authorContact, $subject, $content) {
        global $db;

        $reqContact= $db->prepare('INSERT INTO message(users_id, subject, content, sended_at) VALUES(?, ?, ?, NOW())');
        $reqContact->execute(array($authorContact, $subject, $content));
    }

    /**
        * SQL request to add message contact is not connected in the database
        * @return array
    */
    public function addMessageContact($firstnameContact, $lastnameConctact, $emailContact, $subject, $content) {
        global $db;

        $reqContact= $db->prepare('INSERT INTO message(firstname, lastname, email, subject, content, sended_at) VALUES(?, ?, ?, ?, ?, NOW())');
        $reqContact->execute(array($firstnameContact,$lastnameConctact, $emailContact, $subject, $content));
    }

    /**
        * SQL request to retrive info contact in the database
        * @return array
    */
    public function infoContact() {
        global $db;

        $reqContact = $db -> prepare('SELECT address, postal_code, city, fix_number, phone_number, email FROM users WHERE id = 1');
        $reqContact -> execute();
        return $reqContact -> fetch();
    }
}