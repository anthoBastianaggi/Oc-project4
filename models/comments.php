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
        * SQL request to add the comment reported in the database
        * @return array
    */
    public function addComment($id, $commentChapter, $authorComment) {
        global $db;

        $reqComments= $db->prepare('INSERT INTO comment(ticket_id, content, users_id, created_at) VALUES(?, ?, ?, NOW())');
        $reqComments->execute(array($id, $commentChapter, $authorComment));
    }
    
    /**
        * SQL request to retrive the comment in the database
        * @return array
    */
    public function getAllComments($id) {
        global $db;

        $reqComments = $db -> prepare( 
        'SELECT comment.validate AS "validate", comment.id AS "id", comment.content AS "content", 
        comment.created_at AS "created", users.username AS "username" FROM comment 
        INNER JOIN users ON comment.users_id = users.id WHERE ticket_id = ?');
        $reqComments -> execute(array($id));
        return $reqComments -> fetchAll();
    }

    /**
        * SQL request to show the comment in the database
        * @return array
    */
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
        * SQL request to delete the comment in the database
        * @return array
    */
    public function deleteComment() {
        global $db;

        $reqComments= $db->prepare("DELETE FROM comment WHERE id = :id");
        $reqComments->execute(array(':id' => $_GET['id']));
    }

    /**
        * SQL request to edit the comment in the database
        * @return array
    */
    public function updateComment($contentComment, $id) {
        global $db;

        $reqComments= $db->prepare('UPDATE comment SET `content` = ?, updated_at = NOW() WHERE id = ?');
        $reqComments->execute(array($contentComment, $id));
    }

    /**
        * SQL request to signale the comment in the database
        * @return array
    */
    public function signaleComment($usersId, $commentId) {
        global $db;

        $reqComments= $db->prepare('INSERT INTO report(users_id, comment_id) VALUES(?, ?)');
        $reqComments->execute(array($usersId, $commentId));
    }


    // SQL request to retrive the all comment reported in the database
    public function getAllSignaleCommentValidate() {
        global $db;

        $reqComments = $db -> prepare(
            'SELECT report.id as report_id, comment.id AS "comment_id", comment.validate AS "validate", 
            writers.username AS "writer", reporters.username AS "reporter", 
            comment.content AS "content", ticket.title as "chapter" FROM report 
            INNER JOIN comment ON report.comment_id = comment.id 
            INNER JOIN users as writers ON writers.id = comment.users_id 
            INNER JOIN users as reporters ON reporters.id = report.users_id 
            INNER JOIN ticket ON comment.ticket_id = ticket.id 
            WHERE comment.validate IS NULL'); 
            $reqComments -> execute();
            return $reqComments -> fetchAll();
    }

    /**
        * SQL request to validate the comment reported in the database
        * @return array
    */
    public function validateSignaleComment() {
        global $db;

        $reqComments= $db->prepare('UPDATE comment SET `validate` = "Ok" WHERE id = :id');
        $reqComments->execute(array(':id' => $_GET['id']));
    }

    /**
        * SQL request to delete the comment reported in the database
        * @return array
    */
    public function deleteSignaleComment() {
        global $db;

        $reqComments= $db->prepare("DELETE FROM report WHERE id = :id");
        $reqComments->execute(array(':id' => $_GET['id']));
    }
}