<?php

// Inclusion des fichiers principaux
include_once '_functions/functions.php';
include_once '_config/config.php';
include_once 'Views/includes/db.php';

$action = 'home';

$page = explode('?', pathinfo($_SERVER['REQUEST_URI'], PATHINFO_FILENAME));
if ($page[0] === 'projet4') {
    $page[0] = 'home';
}

if(!empty($_GET['action'])) {
    $action = trim($_GET['action']);
}

// Array contenant toutes les pages
$allPages = scandir('Controllers/');

// vérification de l'existance de la page
if(in_array($page[0].'_controller.php', $allPages)) {
    // Inclusion de la page
    //var_dump($page[0]); die;
    include_once 'Controllers/'.$page[0].'_controller.php';
    $action($page[0]);
} else {
    echo 'Erreur 404';
}