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

    public function percentBirthdate1() {
        global $db;

        $reqNumberUsers = $db -> prepare('SELECT 100*COUNT(*)/(SELECT COUNT(*) FROM users ) AS "percent" FROM users WHERE birthdate BETWEEN "1995-12-31" AND "2020-12-31"');
        $reqNumberUsers -> execute(array());
        return $reqNumberUsers->fetch();
    }

    public function percentBirthdate2() {
        global $db;

        $reqNumberUsers = $db -> prepare('SELECT 100*COUNT(*)/(SELECT COUNT(*) FROM users ) AS "percent" FROM users WHERE birthdate BETWEEN "1970-12-31" AND "1995-12-31"');
        $reqNumberUsers -> execute(array());
        return $reqNumberUsers->fetch();
    }

    public function percentBirthdate3() {
        global $db;

        $reqNumberUsers = $db -> prepare('SELECT 100*COUNT(*)/(SELECT COUNT(*) FROM users ) AS "percent" FROM users WHERE birthdate BETWEEN "1945-12-31" AND "1970-12-31"');
        $reqNumberUsers -> execute(array());
        return $reqNumberUsers->fetch();
    }

    public function percentBirthdate4() {
        global $db;

        $reqNumberUsers = $db -> prepare('SELECT 100*COUNT(*)/(SELECT COUNT(*) FROM users ) AS "percent" FROM users WHERE birthdate BETWEEN "1920-12-31" AND "1945-12-31"');
        $reqNumberUsers -> execute(array());
        return $reqNumberUsers->fetch();
    }
}
