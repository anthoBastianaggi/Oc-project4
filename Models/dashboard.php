<?php

class Dashboard {

    /**
        * Chapters constructor.
        * @param $id
    */
    function __construct() {
        global $db;
    }

        /**
        * Affichage du chapitre
        * @return array
        */
    public function numberUsers() {
        global $db;

        $reqNumberUsers = $db -> prepare('SELECT COUNT(*) AS "number_users", users.confirmed_at
        FROM users WHERE confirmed_at BETWEEN "2018-01-01" AND NOW()');
        $reqNumberUsers -> execute(array());
        return $reqNumberUsers->fetch();
    }
}