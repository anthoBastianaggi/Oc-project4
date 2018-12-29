<?php

try {
    $db = new PDO('mysql:host='.DATABASE_HOST.';dbname='.DATABASE_NAME.';charset=utf8', DATABASE_USER, DATABASE_PASSWORD);
} catch (PDOException $e) {
    echo "connexion échouée : " .$e->getMessage();
}