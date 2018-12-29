<?php 

/**
 * Permet de sécuriser une chaine de caractères
 * @param $string
 * @return string
*/
function str_secur($string) {
    return trim(htmlspecialchars($string));
}

/**
 * Débug plus lisible des différentes variables
 * @param $var
*/
function debug($var) {
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}

function curPageURL() 
{
    $pageURL = 'http';
    if (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
    $pageURL .= "://";
    if ($_SERVER["SERVER_PORT"] != "80") 
    {
        $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].substr($_SERVER['PHP_SELF'], 0, -9);
    } 
    else 
    {
        $pageURL .= $_SERVER["SERVER_NAME"].substr($_SERVER['PHP_SELF'], 0, -9);
    }
    return $pageURL;
}