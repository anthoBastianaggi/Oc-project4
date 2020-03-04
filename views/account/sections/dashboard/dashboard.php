<?php $title = "Jean Forteroche - Un billet simple pour l'alaska"; ?>

<?php
    // Mise en mémoire tampon (rien ne s'affichera)
    ob_start(); 
?>
<section class="dashboard">
    <div class="wrapper">
    
        <?php include_once 'views/account/sections/includes/menu-dashboard.php' ?>
        <canvas id="myChart"></canvas>
    </div>
</section>
<?php 
    // On recupere dans une variable le contenu du tampon 
    $content = ob_get_clean() ;

    // On intégre le template qui utilise la variable $content
    include 'template/template.php'; 
?>