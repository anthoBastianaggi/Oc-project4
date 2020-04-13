<?php $title = "Jean Forteroche - Un billet simple pour l'alaska"; ?>

<?php
    // Buffering (nothing will be displayed)
    ob_start();
?>

<div class="section-content reset-password">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-5 text-header-reset-password">
                <div class="text-container">
                    <h2 class="section-title text-center text-uppercase">Réinitialiser le mot de passe</h2>
                </div>
            </div>
            <div  id="infobox-reset-password" class="col-sm-12">
                <div class="box-shadow-full">
                    <div class="row">
                        <div class="col-md-12 col-md-offset-2">
                            <form class="form-horizontal" method="POST">
                                <div class="form-group">
                                    <div class="inputGroupContainer">
                                        <div class="input-group">
                                            <label class="label-reset-password" for="">Mot de passe</label>
                                            <span class="icon-case"><i class="fa fa-lock"></i></span>
                                            <input type="password"  class="form-control" name="password" minlength="8" maxlength="32" placeholder="Entrez votre nouveau mot de passe" />
                                            <div class="validation"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="inputGroupContainer">
                                        <div class="input-group">
                                            <label class="label-reset-password-confirm" for="">Confirmation mot de passe</label>
                                            <span class="icon-case"><i class="fa fa-lock"></i></span>
                                            <input type="password"  class="form-control" name="password-confirm" placeholder="Confirmez votre nouveau mot de passe" />
                                            <div class="validation"></div>
                                        </div>
                                    </div>
                                </div>  
                                <div class="col-md-12 text-center" id="btn-reset">
                                    <button type="submit" class="button button-a btn-reset-password">Réinitialiser mot de passe</button>
                                </div>                           
                            </form>
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
    include 'template/template.php'; 
?>