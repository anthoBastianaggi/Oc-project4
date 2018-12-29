<?php $title = "Jean Forteroche - Un billet simple pour l'alaska"; ?>

<?php
    // Mise en mémoire tampon (rien ne s'affichera)
    ob_start();
?>

<h1>S'inscrire</h1>

<?php if(!empty($errors)): ?>
<div class="alert alert-danger">
    <p>Vous n'avez pas rempli le formulaire correctement</p>
    <ul>
        <?php foreach($errors as $error): ?>
           <li><?= $error; ?></li>
        <?php endforeach; ?>
    </ul>
</div>
<?php endif; ?>

<form action="" method="POST">
    <div class="form-group">
        <label for="">Firstname</label>
        <input type="text" name="firstname" maxlength="16" />
    </div>
    <div class="form-group">
        <label for="">Lastname</label>
        <input type="text" name="lastname" maxlength="16" />
    </div>
    <div class="form-group">
        <label for="">Birthdate</label>
        <input type="date" name="birthdate"/>
    </div>
    <div class="form-group">
        <label for="">Pseudo</label>
        <input type="text" name="username" maxlength="20" />
    </div>
    <div class="form-group">
        <label for="">Email</label>
        <input type="email" name="email" />
    </div>
    <div class="form-group">
        <label for="">Password</label>
        <input type="password" name="password" minlength="8" maxlength="32" />
    </div>
    <div class="form-group">
        <label for="">Password confirm</label>
        <input type="password" name="password-confirm" />
    </div>
    <button type="submit" class="btn btn-primary">S'inscrire</button>
</form>

<?php 
    // On recupere dans une variable le contenu du tampon 
    $content = ob_get_clean() ;

    // On intégre le template qui utilise la variable $content
    include 'Template/template.php'; 
?>