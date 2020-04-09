<?php

// Inclusion des fichiers principaux
require 'helpers/index.php';
require 'config/parameters.php';
require 'views/includes/db.php';

function bootstrap($class) {
    require "services/app.php";
    if (file_exists("models/$class.php")) require "models/$class.php";
}

function dispatcher() {
    $action = 'home';

    $page = explode('?', pathinfo($_SERVER['REQUEST_URI'], PATHINFO_FILENAME));
    if ($page[0] === 'projet4') {
        $page[0] = 'home';
    }

    if(!empty($_GET['action'])) {
        $action = trim($_GET['action']);
    }

    // Array contenant toutes les pages
    $allPages = scandir('controllers/');

    // vérification de l'existance de la page
    if(in_array($page[0].'.php', $allPages)) {
        // Inclusion de la page
        include_once 'controllers/'.$page[0].'.php';
        $action($page[0]);
    } else {
        echo 'Erreur 404';
    }
}

// On appelle la fonction bootstrap
// au chargement du site
spl_autoload_register('bootstrap');

// On écoute les routes qui sont appelées à chaque
// chargement de page
dispatcher();