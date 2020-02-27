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
    public function addComment($id, $commentChapter, $authorComment) {
        global $db;

        $reqComments= $db->prepare('INSERT INTO comment(ticket_id, content, users_id, created_at) VALUES(?, ?, ?, NOW())');
        $reqComments->execute(array($id, $commentChapter, $authorComment));
    }
    
    /**
        * Envoie tous les commentaires
        * @return array
    */
    public function getAllComments($id) {
        global $db;

        $reqComments = $db -> prepare( 
        'SELECT comment.id, content, created_at, users.username AS "users_username" 
        FROM comment INNER JOIN users ON comment.users_id = users.id
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

     /**
        * Ajout d'un commentaire
        * @return array
    */
    public function signaleComment($usersId, $commentId) {
        global $db;

        $reqComments= $db->prepare('INSERT INTO report(users_id, comment_id) VALUES(?, ?)');
        $reqComments->execute(array($usersId, $commentId));
    }

    public function getAllSignaleComment() {
        global $db;

        $reqComments = $db -> prepare(
            'SELECT report.id as report_id, writers.username AS "writer", 
            reporters.username AS "reporter", comment.content AS "content", 
            ticket.title as "chapter" 
            FROM report INNER JOIN comment ON report.comment_id = comment.id 
            INNER JOIN users as writers ON writers.id = comment.users_id 
            INNER JOIN users as reporters ON reporters.id = report.users_id 
            INNER JOIN ticket ON comment.ticket_id = ticket.id ');
            $reqComments -> execute();
            return $reqComments -> fetchAll();
    }

    public function validateSignaleComment($id) {
        global $db;

        $reqComments= $db->prepare('UPDATE report SET `validate` = passed WHERE id = ?');
        $reqComments->execute($id);
    }

    public function deleteSignaleComment() {
        global $db;

        //Requete SQL pour supprimer le commentaire dans la base
        $reqComments= $db->prepare("DELETE FROM report WHERE id = :id");
        $reqComments->execute(array(':id' => $_GET['id']));
    }
}