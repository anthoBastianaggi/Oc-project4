<?php
function account($page) {
    require 'Views/includes/bootstrap.php';
    App::getAuth()->restrict();
    include_once 'Views/Account/Section/Profile/'.$page.'.php';
}