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
    public function numberUsers2018() {
        global $db;

        $reqNumberUsers = $db -> prepare('SELECT COUNT(*) AS "number", users.confirmed_at AS confirmed
        FROM users WHERE confirmed_at BETWEEN "2018-01-01" AND "2018-12-31"');
        $reqNumberUsers -> execute(array());
        return $reqNumberUsers->fetch();
    }

    public function numberUsers2019() {
        global $db;

        $reqNumberUsers = $db -> prepare('SELECT COUNT(*) AS "number", users.confirmed_at AS confirmed
        FROM users WHERE confirmed_at BETWEEN "2019-01-01" AND "2019-12-31"');
        $reqNumberUsers -> execute(array());
        return $reqNumberUsers->fetch();
    }

    public function numberUsers2020() {
        global $db;

        $reqNumberUsers = $db -> prepare('SELECT COUNT(*) AS "number", users.confirmed_at AS confirmed
        FROM users WHERE confirmed_at BETWEEN "2020-01-01" AND "2020-12-31"');
        $reqNumberUsers -> execute(array());
        return $reqNumberUsers->fetch();
    }
}