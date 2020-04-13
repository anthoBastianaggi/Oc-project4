<?php

// Include main files
require 'helpers/index.php';
require 'config/parameters.php';
require 'db.php';

function bootstrap($class) {
    $lowerClass = strtolower($class);
    if (file_exists("services/$lowerClass.php")) require "services/$lowerClass.php";
    if (file_exists("models/$lowerClass.php")) require "models/$lowerClass.php";
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

    // Array containing all pages
    $allPages = scandir('controllers/');

    // Checking the existence of the page
    if(in_array($page[0].'.php', $allPages)) {
        // Inclusion of the page
        include_once 'controllers/'.$page[0].'.php';
        $action($page[0]);
    } else {
        echo 'Erreur 404';
    }
}

// We call the bootstrap function
// when loading the site
spl_autoload_register('bootstrap');

// We listen to the routes that are called at each
// page loading
dispatcher();