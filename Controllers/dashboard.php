<?php
function dashboard($page) {
    require 'Views/includes/bootstrap.php';
    App::getAuth()->restrict();
    include_once 'Views/Account/Sections/Dashboard/'.$page.'.php';
}