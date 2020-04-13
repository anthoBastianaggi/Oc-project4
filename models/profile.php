<?php

class Profile {
    /**
        * Profile constructor.
        * @param $id
    */
    function __construct() {
        global $db;
    }
    
    /**
        * SQL request to modify profile in the database
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

    /**
        * SQL request to retrieve profile information from the database
        * @return array
    */
    public function infoProfile($id) {
        global $db;
        
        $reqProfile= $db->prepare('SELECT `username`, `firstname`, `lastname`, `birthdate`, `email`, `fix_number`, `phone_number`, 
        `address`, `city`, `country`, `postal_code`, `about` FROM users WHERE id = ?');
        $reqProfile -> execute(array($id));
        return $reqProfile -> fetch();
    }
}