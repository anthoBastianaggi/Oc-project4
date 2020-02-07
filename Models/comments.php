<?php

class Comments {
    /**
        * Comments constructor.
        * @param $id
    */
    function __construct() {
        global $db;
    }
    
    /**
        * Ajout d'un commentaire
        * @return array
    */
    public function addComment($id, $commentChapter) {
        global $db;

        $reqComments= $db->prepare('INSERT INTO comment(ticket_id, content, users_id, created_at) VALUES(?, ?, ?, NOW())');
        $reqComments->execute(array($id, $commentChapter, 1));
    }

    public function addChapter($titleTicket, $contentTicket) {
        global $db;

        $reqTicket= $db->prepare('INSERT INTO ticket(title, content, user_id, created_at) VALUES(?, ?, ?, NOW())');
        $reqTicket->execute(array($titleTicket, $contentTicket, 1));
    }

    
    /**
        * Envoie tous les commentaires
        * @return array
    */
    public function getAllComments($id) {
        global $db;

        $reqComments = $db -> prepare(
        'SELECT id, content, created_at
        FROM comment  
        WHERE ticket_id = ?');
        $reqComments -> execute(array($id));
        return $reqComments -> fetchAll();
    }

    public function showComment() {
        global $db;

        $id = $_GET['id'];
        $reqComments = $db -> prepare(
        'SELECT *
        FROM comment WHERE id = ?');
        $reqComments -> execute(array($id));
        return $reqComments -> fetch();
    }

     /**
        * Suppression du commentaire
        * @return array
    */
    public function deleteComment() {
        global $db;

        //Requete SQL pour supprimer le commentaire dans la base
        $reqComments= $db->prepare("DELETE FROM comment WHERE id = :id");
        $reqComments->execute(array(':id' => $_GET['id']));
    }

    /**
        * Modification du commentaire
        * @return array
    */
    public function updateComment($contentComment, $id) {
        global $db;

        $reqComments= $db->prepare('UPDATE comment SET `content` = ?, updated_at = NOW() WHERE id = ?');
        $reqComments->execute(array($contentComment, $id));
    }
}