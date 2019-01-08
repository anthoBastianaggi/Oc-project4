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

    
    /**
        * Envoie tous les commentaires
        * @return array
    */
    public function getAllComments($id) {
        global $db;

        $reqComments = $db -> prepare(
        'SELECT content
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

        //Tu recuperes l'id du contact
        $id = $_GET["id"];
        //Requete SQL pour supprimer le contact dans la base
        $reqComments= $db->prepare("DELETE comment.id FROM comment WHERE id = " . $id);
        $reqComments->execute(array('id' => $id));
    }

    /**
        * Modification du commentaire
        * @return array
    */
    public function updateComment($idComment, $contentComment, $id) {
        global $db;

        $reqComments= $db->prepare('UPDATE comment SET `id`= comment.id, `content` = ?, updated_at = NOW() WHERE `ticket_id` = ?');
        $reqComments->execute(array($idComment, $contentComment, $id));
    }
}