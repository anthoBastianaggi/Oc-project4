<?php $title = "Jean Forteroche - Un billet simple pour l'alaska"; ?>

<?php
    // Mise en mémoire tampon (rien ne s'affichera)
    ob_start();
?>

<h1>Se connecter</h1>

<form action="" method="POST">
    <div class="form-group">
        <label for="">Pseudo ou email</label>
        <input type="text" name="username" maxlength="25" />
    </div>
    <div class="form-group">
        <label for="">Password<a href="forget.php">(J'ai oublié mon mot de passe)</a></label>
        <input type="password" name="password" minlength="8" maxlength="32" />
    </div>
    <div class="form-group">
        <label>
            <input type="checkbox" name="remember" value="1"/>Se souvenir de moi 
        </label>
    </div>
    <button type="submit" class="btn btn-primary">Se connecter</button>
</form>

<?php 
    // On recupere dans une variable le contenu du tampon 
    $content = ob_get_clean() ;

    // On intégre le template qui utilise la variable $content
    include 'Template/template.php'; 
?>