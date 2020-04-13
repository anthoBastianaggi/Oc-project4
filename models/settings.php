<?php

class Settings {
    /**
        * Settings constructor.
        * @param $id
    */
    function __construct() {
        global $db;
    }

    public function updateEmail($email, $id) {
        global $db;

        //SQL request to modify email in the database
        $reqComments= $db->prepare("UPDATE users SET `email` = ? WHERE id = ?");
        $reqComments->execute(array($email, $id));
    }

    public function updatePassword($password, $id) {
        global $db;

        //SQL request to modify a password in the database
        $reqComments= $db->prepare("UPDATE users SET `password` = ? WHERE id = ?");
        $reqComments->execute(array($password, $id));
    }

    public function deleteAccount($id) {
        global $db;

        //SQL request to delete an account in the database
        $reqComments= $db->prepare("DELETE FROM users WHERE id = ?");
        $reqComments->execute(array($id));
    }
}