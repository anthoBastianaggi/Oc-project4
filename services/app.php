<?php
include_once 'services/database.php';
include_once 'services/session.php';

class App {
    static $db = null;

    static function getDatabase() {
        if(!self::$db) {
            self::$db = new Database('root', '', 'projet_openclassrooms');
        }
        return self::$db;
    }

    static function getAuth() {
        return new Auth(Session::getInstance(), ['restriction_msg' => "Lol tu es bloqué !"]);
    }

    static function redirect($page) {
        header("Location: $page");
        exit();
    }
}