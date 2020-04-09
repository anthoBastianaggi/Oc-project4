<?php
class ValidatorService {
    private $data;
    private $errors = [];

    public function __construct($data) {
        $this->data = $data;
    }

    public function getField($field) {
        if(!isset($this->data[$field])) {
            return null;
        }
        return $this->data[$field];
    }

    public function isAlpha($field, $errorMsg) {
        if(!preg_match("/^[a-zA-Z-]+$/ ", $this->getField($field))) {
            $this->errors[$field] = $errorMsg;
        }
    }

    public function isAlphaNum($field, $errorMsg) {
        if(!preg_match("/^[a-zA-Z0-9_]+$/ ", $this->getField($field))) {
            $this->errors[$field] = $errorMsg;
        }
    }

    public function isDate($field, $errorMsg) {
        if(!preg_match("/^[a-z A-Z 0-9 -\'.-]{2,20}$/i " , $this->getField($field))) {
            $this->errors[$field] = $errorMsg;
        }
    }

    public function isEmail($field, $errorMsg) {
        if(!preg_match("#[A-Z0-9a-z._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,64}#", $this->getField($field))) {
            $this->errors[$field] = $errorMsg;
        }
    }

    public function isConfirmed($field, $errorMsg = '') {
        $value = $this->getField($field);
        if(empty($value) || $value != $this->getField($field. '-confirm')) {
            $this->errors[$field] = $errorMsg;
        }
    }

    public function isValid() {
        return empty($this->errors);
    }

    public function getErrors() {
        return $this->errors;
    }
}