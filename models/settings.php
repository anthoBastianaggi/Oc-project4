<?php

class Settings {
    /**
        * Comments constructor.
        * @param $id
    */
    function __construct() {
        global $db;
    }

    public function updateEmail($email, $id) {
        global $db;

        //Requete SQL pour supprimer le commentaire dans la base
        $reqComments= $db->prepare("UPDATE users SET `email` = ? WHERE id = ?");
        $reqComments->execute(array($email, $id));
    }

    public function updatePassword($password, $id) {
        global $db;

        //Requete SQL pour supprimer le commentaire dans la base
        $reqComments= $db->prepare("UPDATE users SET `password` = ? WHERE id = ?");
        $reqComments->execute(array($password, $id));
    }

    public function deleteAccount($id) {
        global $db;

        //Requete SQL pour supprimer le commentaire dans la base
        $reqComments= $db->prepare("DELETE FROM users WHERE id = ?");
        $reqComments->execute(array($id));
    }
}