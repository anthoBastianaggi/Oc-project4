<?php
function account($page) {
    require 'Views/includes/bootstrap.php';
    App::getAuth()->restrict();
    include_once 'Views/'.$page.'.php';
}