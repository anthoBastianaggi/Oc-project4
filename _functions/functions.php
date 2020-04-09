<?php 
 include_once 'services/app.php';

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


function logged_only() {
    if(session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    if(!isset($_SESSION['auth'])) {
        $_SESSION['flash']['danger'] = "Vous n'avez pas le droit d'accéder à cette page.";
        App::redirect('/projet4/login?action=login');
        exit();
    }
}

function reconnect_from_cookie(){
    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }
    if(isset($_COOKIE['remember']) && !isset($_SESSION['auth']) ){
        require_once 'db.php';
        if(!isset($pdo)){
            global $pdo;
        }
        $remember_token = $_COOKIE['remember'];
        $parts = explode('==', $remember_token);
        $user_id = $parts[0];
        $req = $pdo->prepare('SELECT * FROM users WHERE id = ?');
        $req->execute([$user_id]);
        $user = $req->fetch();
        if($user){
            $expected = $user_id . '==' . $user->remember_token . sha1($user_id . 'ratonlaveurs');
            if($expected == $remember_token){
                session_start();
                $_SESSION['auth'] = $user;
                setcookie('remember', $remember_token, time() + 60 * 60 * 24 * 7);
            } else{
                setcookie('remember', null, -1);
            }
        }else{
            setcookie('remember', null, -1);
        }
    }
}