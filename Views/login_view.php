<?php $title = "Jean Forteroche - Un billet simple pour l'alaska"; ?>

<?php
    // Mise en mémoire tampon (rien ne s'affichera)
    ob_start();
?>

<section id="login" class="content-section text-left">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-4">
                <div class="text-container">
                    <h2 class="section-title text-center text-uppercase">Se connecter</h2>
                </div>
            </div>
            <div  id="infobox-login" class="col-md-12 col-md-5">
                <div class="box-shadow-full">
                    <div class="row">
                        <div class="col-md-12 col-md-offset-2">
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label class="label-login" for="">Pseudo ou email</label>
                                    <input type="text" name="username" maxlength="25" class="form-control" id="exampleInputName2" placeholder="Entrez votre pseudo ou email"/>
                                </div>
                                <div class="form-group">
                                    <label class="label-login" for="">Mot de passe <br /><a href="<?= CURRENT_PATH ?>forget?action=forget">(J'ai oublié mon mot de passe)</a></label>
                                    <input type="password" name="password" minlength="8" maxlength="32" class="form-control" id="exampleInputName2" placeholder="Entrez votre mot de passe" />
                                </div>
                                <div class="form-group">
                                    <label class="label-login">
                                        <input type="checkbox" name="remember" value="1"/> Se souvenir de moi 
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-primary" id="btn-login">Se connecter</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php 
    // On recupere dans une variable le contenu du tampon 
    $content = ob_get_clean() ;

    // On intégre le template qui utilise la variable $content
    include 'Template/template.php'; 
?>