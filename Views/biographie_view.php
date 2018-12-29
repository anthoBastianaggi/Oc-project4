<?php $title = "Jean Forteroche - Un billet simple pour l'alaska"; ?>

<?php
    // Mise en mémoire tampon (rien ne s'affichera)
    ob_start(); 
?>

<section id="a_propos">
    <div class="description">
        <h2>BIOGRAPHIE DE JEAN FORTEROCHE</h2>
        <div>
            <p>Venez découvrir ma biographie</p>
        </div>
    </div>
</section>

<?php 
    // On recupere dans une variable le contenu du tampon 
    $content = ob_get_clean() ;

    // On intégre le template qui utilise la variable $content
    include 'Template/template.php'; 
?>