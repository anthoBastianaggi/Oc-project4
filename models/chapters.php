<?php

class Chapters {

    /**
        * Chapters constructor.
        * @param $id
    */
    function __construct() {
        global $db;
    }

    /**
        * SQL request to retrive the all chapters in the database
        * @return array
    */
    public function getAllChapters() {
        global $db;

        $reqTickets = $db -> prepare(
        'SELECT users.firstname AS "users_firstname", users.lastname AS "users_lastname", ticket.*
        FROM ticket INNER JOIN users ON ticket.users_id = users.id
        ORDER BY ticket.id DESC');
        $reqTickets -> execute();
        return $reqTickets -> fetchAll();
    }

    /**
        * SQL request to retrive the three chapters in the database
        * @return array
    */
    public function getThreeLastChapters() {
        global $db;

            $reqTicket = $db -> prepare(
            'SELECT users.firstname AS "users_firstname", users.lastname AS "users_lastname", ticket.*
            FROM ticket INNER JOIN users ON ticket.users_id = users.id
            ORDER BY ticket.id DESC
            LIMIT 3');
            $reqTicket -> execute();    
        return $reqTicket -> fetchAll();
    }

        /**
        * SQL request to show the chapter in the database
        * @return array
    */
    public function showChapter() {
        global $db;

            $id = $_GET['id'];
            $reqTicket = $db -> prepare(
            'SELECT users.firstname AS "users_firstname", users.lastname AS "users_lastname", ticket.* 
            FROM ticket INNER JOIN users ON ticket.users_id = users.id WHERE ticket.id = ?');
            $reqTicket -> execute(array($id));
            return $reqTicket -> fetch();
    }

    /**
        * SQL request to add the chapter in the database
        * @return array
    */
    public function addChapter($titleTicket, $contentTicket, $author) {
        global $db;

        $reqTicket= $db->prepare('INSERT INTO ticket(title, content, users_id, created_at) VALUES(?, ?, ?, NOW())');
        $reqTicket->execute(array($titleTicket, $contentTicket, $author));
    }

    /**
        * SQL request to edit the chapter in the database
        * @return array
    */
    public function updateChapter($titleTicket, $contentTicket, $id) {
        global $db;

        $reqTicket= $db->prepare('UPDATE ticket SET title = ?, content = ?, updated_at = NOW() WHERE id = ?');
        $reqTicket->execute(array($titleTicket, $contentTicket, $id));
    }

    /**
        * SQL request to delete the chapter in the database
        * @return array
    */
    public function deleteChapter() {
        global $db;

        $reqTicket= $db->prepare("DELETE FROM ticket WHERE id = :id");
        $reqTicket->execute(array(':id' => $_GET["id"]));
    }
}