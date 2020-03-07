<?php
include_once 'models/dashboard.php';

function dashboard($page) {
    require 'views/includes/bootstrap.php';
    $chart = New Dashboard;
    $countUsers2018 = $chart->numberUsers2018();
    $countUsers2019 = $chart->numberUsers2019();
    $countUsers2020 = $chart->numberUsers2020();
    $date2018 = $countUsers2018['confirmed'];
    $date2019 = $countUsers2019['confirmed'];
    $date2020 = $countUsers2020['confirmed'];
    $dateFormatted2018 = date('Y', strtotime($date2018));
    $dateFormatted2019 = date('Y', strtotime($date2019));
    $dateFormatted2020 = date('Y', strtotime($date2020));
    $dataChartUsers = array(
        array(
            "numberUsers" => $countUsers2018["number"],
            "periode" => $dateFormatted2018
        ),
        array(
            "numberUsers" =>  $countUsers2019["number"],
            "periode" =>  $dateFormatted2019
        ),
        array(
            "numberUsers" => $countUsers2020["number"],
            "periode" =>  $dateFormatted2020
        )
    );
    include_once 'views/account/sections/dashboard/'.$page.'.php';
}