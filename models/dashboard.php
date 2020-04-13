<?php

class Dashboard {

    // Dashboard constructor.
    function __construct() {
        global $db;
    }

    /**
        * SQL request to retrieve the number users for the year 2018 in the database
        * @return array
    */
    public function numberUsers2018() {
        global $db;

        $reqNumberUsers = $db -> prepare('SELECT COUNT(*) AS "number", users.confirmed_at AS confirmed
        FROM users WHERE confirmed_at BETWEEN "2018-01-01" AND "2018-12-31"');
        $reqNumberUsers -> execute(array());
        return $reqNumberUsers->fetch();
    }

    /**
        * SQL request to retrieve the number users for the year 2019 in the database
        * @return array
    */
    public function numberUsers2019() {
        global $db;

        $reqNumberUsers = $db -> prepare('SELECT COUNT(*) AS "number", users.confirmed_at AS confirmed
        FROM users WHERE confirmed_at BETWEEN "2019-01-01" AND "2019-12-31"');
        $reqNumberUsers -> execute(array());
        return $reqNumberUsers->fetch();
    }

    /**
        * SQL request to retrieve the number users for the year 2020 in the database
        * @return array
    */
    public function numberUsers2020() {
        global $db;

        $reqNumberUsers = $db -> prepare('SELECT COUNT(*) AS "number", users.confirmed_at AS confirmed
        FROM users WHERE confirmed_at BETWEEN "2020-01-01" AND "2020-12-31"');
        $reqNumberUsers -> execute(array());
        return $reqNumberUsers->fetch();
    }

     /**
        * SQL request to retrieve the percentage of users between 0 and 25 years old in the database
        * @return array
    */
    public function percentBirthdate1() {
        global $db;

        $reqNumberUsers = $db -> prepare('SELECT 100*COUNT(*)/(SELECT COUNT(*) FROM users ) AS "percent" FROM users WHERE birthdate BETWEEN "1995-12-31" AND "2020-12-31"');
        $reqNumberUsers -> execute(array());
        return $reqNumberUsers->fetch();
    }

     /**
        * SQL request to retrieve the percentage of users between 25 and 50 years old in the database
        * @return array
    */
    public function percentBirthdate2() {
        global $db;

        $reqNumberUsers = $db -> prepare('SELECT 100*COUNT(*)/(SELECT COUNT(*) FROM users ) AS "percent" FROM users WHERE birthdate BETWEEN "1970-12-31" AND "1995-12-31"');
        $reqNumberUsers -> execute(array());
        return $reqNumberUsers->fetch();
    }

    /**
        * SQL request to retrieve the percentage of users between 50 and 75 years old in the database
        * @return array
    */
    public function percentBirthdate3() {
        global $db;

        $reqNumberUsers = $db -> prepare('SELECT 100*COUNT(*)/(SELECT COUNT(*) FROM users ) AS "percent" FROM users WHERE birthdate BETWEEN "1945-12-31" AND "1970-12-31"');
        $reqNumberUsers -> execute(array());
        return $reqNumberUsers->fetch();
    }

    /**
        * SQL request to retrieve the percentage of users between 75 and 100 years old in the database
        * @return array
    */
    public function percentBirthdate4() {
        global $db;

        $reqNumberUsers = $db -> prepare('SELECT 100*COUNT(*)/(SELECT COUNT(*) FROM users ) AS "percent" FROM users WHERE birthdate BETWEEN "1920-12-31" AND "1945-12-31"');
        $reqNumberUsers -> execute(array());
        return $reqNumberUsers->fetch();
    }
}
