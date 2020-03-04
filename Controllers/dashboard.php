<?php
include_once 'Models/dashboard.php';

function dashboard($page) {
    require 'Views/includes/bootstrap.php';
    $chart = New Dashboard;
    $countUsers = $chart->numberUsers();
    $date = $countUsers['confirmed_at'];
    $dateFormatted = date('d-m-Y', strtotime($date));
    App::getAuth()->restrict();
    include_once 'Views/Account/Sections/Dashboard/'.$page.'.php';
}