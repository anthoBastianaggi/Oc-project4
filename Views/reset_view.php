<?php $title = "Jean Forteroche - Un billet simple pour l'alaska"; ?>

<?php
    // Mise en mémoire tampon (rien ne s'affichera)
    ob_start();
?>

<form action="" method="POST">
    <div class="form-group">
        <label for="">Password</label>
        <input type="password" name="password" minlength="8" maxlength="32" />
    </div>
    <div class="form-group">
        <label for="">Password confirm</label>
        <input type="password" name="password-confirm" />
    </div>
    <button type="submit" class="btn btn-primary">Réinitialiser mot de passe</button>
</form>

<?php 
    // On recupere dans une variable le contenu du tampon 
    $content = ob_get_clean() ;

    // On intégre le template qui utilise la variable $content
    include 'Template/template.php'; 
?>