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
    public function updateComment($contentComment) {
        global $db;

        $reqComments= $db->prepare('UPDATE comment SET `id`= 10, `content` = "Salut les gars", updated_at = NOW() WHERE `ticket_id` = 20');
        $reqComments->execute(array( $contentComment));
    }
}