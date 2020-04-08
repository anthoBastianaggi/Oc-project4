<?php
require_once 'views/includes/bootstrap.php'; 

function ajax($page) {
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
    $percentBirthdate1 = $chart->percentBirthdate1();
    $percentBirthdate2 = $chart->percentBirthdate2();
    $percentBirthdate3 = $chart->percentBirthdate3();
    $percentBirthdate4 = $chart->percentBirthdate4();
    $dataChartUsers = array(
        "countNumberUsers" => array(
            array(
                "numberUsers" => $countUsers2018["number"],
                "periode" => $dateFormatted2018
            ),
            array(
                "numberUsers" => $countUsers2019["number"],
                "periode" => $dateFormatted2019
            ),
            array(
                "numberUsers" => $countUsers2020["number"],
                "periode" => $dateFormatted2020
            )
        ),
        "percentBirthdateUsers" => array(
            array(
                "percent" => $percentBirthdate1["percent"],
                "periode" => "0-25 ans"
            ),
            array(
                "percent" => $percentBirthdate2["percent"],
                "periode" => "25-50 ans"
            ),
            array(
                "percent" => $percentBirthdate3["percent"],
                "periode" => "50-75 ans"
            ),
            array(
                "percent" => $percentBirthdate4["percent"],
                "periode" => "75-100 ans"
            )
        )
    );

    $dataFormatJson = json_encode($dataChartUsers);
    include_once 'views/ajax/'.$page.'.php';
}
