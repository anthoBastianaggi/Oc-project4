<?php 
 
class Helpers {
    /**
     * Allows you to secure a character string
     * @param $string
     * @return string
    */
    public static function str_secur($string) {
        return trim(htmlspecialchars($string));
    }

    /**
     * More readable debug of the different variables
     * @param $var
    */
    public static function debug($var) {
        echo '<pre>';
        var_dump($var);
        echo '</pre>';
    }

    public static function curPageURL() 
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
}