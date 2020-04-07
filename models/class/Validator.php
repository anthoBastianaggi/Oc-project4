<?php
include_once 'services/validator.php';

class Validator {
    public function isUniq($field, $db, $table, $errorMsg) {
        $record = $db->query("SELECT id FROM $table WHERE $field = ?", [$this->getField($field)])->fetch();
        if($record) {
            $this->errors[$field] = $errorMsg;
        }
    }
}