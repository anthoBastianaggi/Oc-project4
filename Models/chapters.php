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
        * Envoie tous les chapitres
        * @return array
    */
    public function getAllChapters() {
        global $db;

        $reqTickets = $db -> prepare(
        'SELECT *
        FROM ticket  
        ORDER BY ticket.id DESC');
        $reqTickets -> execute();
        return $reqTickets -> fetchAll();
    }

    /**
        * Envoie les trois derniers chapitres
        * @return array
    */
    public function getThreeLastChapters() {
        global $db;

            $reqTicket = $db -> prepare(
            'SELECT *
            FROM ticket  
            ORDER BY ticket.id DESC
            LIMIT 3');
            $reqTicket -> execute();    
        return $reqTicket -> fetchAll();
    }

        /**
        * Affichage du chapitre
        * @return array
    */
    public function showChapter() {
        global $db;

            $id = $_GET['id'];
            $reqTicket = $db -> prepare(
            'SELECT *
            FROM ticket WHERE id = ?');
            $reqTicket -> execute(array($id));
            return $reqTicket -> fetch();
    }

    /**
        * Ajout de chapitres
        * @return array
    */
    public function addChapter($titleTicket, $contentTicket) {
        global $db;

        $reqTicket= $db->prepare('INSERT INTO ticket(title, content, user_id, created_at) VALUES(?, ?, ?, NOW())');
        $reqTicket->execute(array($titleTicket, $contentTicket, 1));
    }

    /**
        * Modification de chapitres
        * @return array
    */
    public function updateChapter($titleTicket, $contentTicket, $id) {
        global $db;

        $reqTicket= $db->prepare('UPDATE ticket SET title = ?, content = ?, updated_at = NOW() WHERE id = ?');
        $reqTicket->execute(array($titleTicket, $contentTicket, $id));
    }

    /**
        * Suppression de chapitres
        * @return array
    */
    public function deleteChapter() {
        global $db;

        //Requete SQL pour supprimer le contact dans la base
        $reqTicket= $db->prepare("DELETE FROM ticket WHERE id = :id");
        $reqTicket->execute(array(':id' => $_GET["id"]));
    }
}