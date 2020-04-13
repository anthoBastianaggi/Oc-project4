<?php $title = "Jean Forteroche - Un billet simple pour l'alaska"; ?>

<?php
    // Buffering (nothing will be displayed)
    ob_start(); 
?>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg " color-on-scroll="500">
    <div class=" container-fluid  ">
        <a class="navbar-brand" href="#"> Profil : <?= $infoProfile['username'] ?></a>
    </div>
</nav>
<!-- End Navbar -->
<div class="section-content dashboard">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Statistique nombre d'utilisateur</h3>
                    </div>
                    <div class="card-body text-center">
                        <div class="chart-area">
                            <canvas id="chartCountNumberUsers" class="chart"></canvas>
                        </div>   
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Statistique de l'âge (%)</h3>
                    </div>
                    <div class="card-body text-center">
                        <div class="chart-area">
                            <canvas id="chartPercentBirthdate" class="chart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 
<?php 
    // We recover in a variable the content of the buffer
    $content = ob_get_clean() ;

    // We integrate the template which uses the variable $content
    include 'template/template-admin.php'; 
?>