<?php include_once 'models/class/Session.php' ?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <title><?= ucfirst($page) ?> - <?= $title; ?></title>
        <?php include_once 'views/includes/head/head.php' ?>
    </head>
    <body>
        <div id="root">
            <div class="layout">
                <header>
                    <?php include_once 'views/includes/header/header.php' ?>
                </header>
                <main id="main"> 
                    <section>
                    <div class="wrapper">
                        <?php include_once 'views/account/sections/includes/menu-dashboard.php' ?>
                    </div>
                    <div class="main-panel">
                        <?php if(Session::getInstance()->hasFlashes()): ?>
                            <?php foreach(Session::getInstance()->getFlashes() as $type => $message): ?>
                                <div class="alert alert-<?= $type; ?>">
                                    <?= $message; ?>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    
                        <?= $content; ?>
                    </div>
                </main>    
                <footer id="footer-page" class="page-footer font-small special-color-dark pt-4">
                    <?php include_once 'views/includes/footer/footer.php' ?>
                </footer>
            </div>
        </div>
        
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
        <script src='public/javascript/header/header.js'></script>
        <script src='public/javascript/header/sidebar.js'></script>
        <script src='public/javascript/comment/comment.js'></script>
        <script src='public/javascript/main.js'></script>
        <script src='public/javascript/ajax.js'></script>
        <script>
            async function makeit() {
                var labelsNumberUsers = [];
                var dataNumberUsers = [];
                var labelsPercentBirthdate = [];
                var dataPercentBirthdateUsers = [];

                var dataCountNumberUsers = await get('ajax?action=ajax');
                response = JSON.parse(dataCountNumberUsers);
                response.countNumberUsers.forEach(function(item) {
                    var element = Object.values(item);
                    labelsNumberUsers.push(element[1]);
                    dataNumberUsers.push(parseInt(element[0], 10));
                });

                var chartNumberUsers = document.querySelector('#chartCountNumberUsers').getContext('2d');
                var chart = new Chart(chartNumberUsers, {
                    // The type of chart we want to create
                    type: 'bar',

                    // The data for our dataset
                    data: {
                        labels: labelsNumberUsers,
                        datasets: [{
                            label: "Nombres d'utilisateurs",
                            backgroundColor: "#36A2EB",
                            borderColor: "#36A2EB",
                            data: dataNumberUsers
                        }]
                    },

                    // Configuration options go here
                    options: {}
                });

                var dataPercentBirthdate = await get('ajax?action=ajax');
                response = JSON.parse(dataPercentBirthdate);
                response.percentBirthdateUsers.forEach(function(item) {
                    var element = Object.values(item);
                    labelsPercentBirthdate.push(element[1]);
                    dataPercentBirthdateUsers.push(parseInt(element[0], 10));
                });

                var chartPercent = document.querySelector('#chartPercentBirthdate').getContext('2d');
                var chart = new Chart(chartPercent, {
                    // The type of chart we want to create
                    type: 'pie',

                    // The data for our dataset
                    data: {
                        labels: labelsPercentBirthdate,
                        datasets: [{
                            backgroundColor: [
                                "#90EE90",
                                "#FF6384",
                                "#36A2EB",
                                "#FFCE56"
                            ], 
                            borderColor: [
                                "#90EE90",
                                "#FF6384",
                                "#36A2EB",
                                "#FFCE56"
                            ], 
                            data: dataPercentBirthdateUsers
                        }]
                    },

                    // Configuration options go here
                    options: {}
                });
            }
            makeit();
        </script>
    </body>
</html>