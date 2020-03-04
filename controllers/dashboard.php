<?php
include_once 'models/dashboard.php';

function dashboard($page) {
    require 'views/includes/bootstrap.php';
    $chart = New Dashboard;
    $countUsers = $chart->numberUsers();
    $date = $countUsers['confirmed_at'];
    $dateFormatted = date('d-m-Y', strtotime($date));
    App::getAuth()->restrict();
    include_once 'views/account/sections/dashboard/'.$page.'.php';
}