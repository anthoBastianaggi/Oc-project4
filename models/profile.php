<?php

class Profile {
    /**
        * Comments constructor.
        * @param $id
    */
    function __construct() {
        global $db;
    }
    
    /**
        * Modification du commentaire
        * @return array
    */
    public function updateProfile($username, $firstname, $lastname, $birthdate, 
    $fixNumber, $phoneNumber, $address, $city, $country, $postalCode, $about, $id) {
        global $db;

        $reqComments= $db->prepare('UPDATE users SET `username` = ?,`firstname` = ?, 
        `lastname` = ?, `birthdate` = ?, `fix_number` = ?, `phone_number` = ?, 
        `address` = ?, `city` = ?, `country` = ?, `postal_code` = ?, `about` = ? WHERE id = ?');
        $reqComments->execute(array($username, $firstname, $lastname, $birthdate, 
        $fixNumber,$phoneNumber, $address, $city, $country, $postalCode, $about, $id));
    }
}