<?php $title = "Jean Forteroche - Un billet simple pour l'alaska"; ?>

<?php
    // Mise en mémoire tampon (rien ne s'affichera)
    ob_start();
?>

<h1>Mot de passe oublié</h1>

<form action="" method="POST">

    <div class="form-group">
        <label for="">Email</label>
        <input type="email" name="email" class="form-control"/>
    </div>

    <button type="submit" class="btn btn-primary">Se connecter</button>

</form>

<?php 
    // On recupere dans une variable le contenu du tampon 
    $content = ob_get_clean() ;

    // On intégre le template qui utilise la variable $content
    include 'Template/template.php'; 
?>