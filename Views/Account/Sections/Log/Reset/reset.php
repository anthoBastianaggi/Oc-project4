<?php $title = "Jean Forteroche - Un billet simple pour l'alaska"; ?>

<?php
    // Mise en mémoire tampon (rien ne s'affichera)
    ob_start();
?>

<section id="register" class="content-section text-left">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-5 textHeaderRegister">
                <div class="text-container">
                    <h2 class="section-title text-center text-uppercase">Réinitialiser le mot de passe</h2>
                </div>
            </div>
            <div  id="infobox-register" class="col-sm-12">
                <div class="box-shadow-full">
                    <div class="row">
                        <div class="col-md-12 col-md-offset-2">
                            <form class="form-horizontal" method="POST">
                                <div class="form-group">
                                    <div class="inputGroupContainer">
                                        <div class="input-group">
                                            <label class="label-password" for="">Password</label>
                                            <input type="password" name="password" minlength="8" maxlength="32" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="inputGroupContainer">
                                        <div class="input-group">
                                            <label class="label-password-confirm" for="">Password confirm</label>
                                            <input type="password" name="password-confirm" />
                                        </div>
                                    </div>
                                </div>  
                                <div class="col-md-12 text-center" id="btn-register">
                                    <button type="submit" class="button button-a button-big">Réinitialiser mot de passe</button>
                                </div>                           
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