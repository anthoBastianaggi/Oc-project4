<?php
spl_autoload_register('app_autoload');

function app_autoload($class) {
    require "Models/class/$class.php";
}