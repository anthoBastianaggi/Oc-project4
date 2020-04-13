<?php $title = "Jean Forteroche - Un billet simple pour l'alaska"; ?>

<?php
    // Buffering (nothing will be displayed)
    ob_start();
?>

<div class="section-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-5 text-header-update-password">
                <div class="text-container">
                    <h2 class="section-title text-center text-uppercase">Modifier mot de passe</h2>
                </div>
            </div>
            <div  id="infobox-update-password" class="col-sm-12">
                <div class="box-shadow-full">
                    <div class="row">
                    <div class="col-md-12 col-md-offset-2">
                        <form class="form-horizontal" method="POST">
                            <div class="form-group">
                                <div class="inputGroupContainer">
                                    <div class="input-group">
                                        <label class="label-register" for="">Mot de passe actuel</label>
                                        <span class="icon-case"><i class="fa fa-lock"></i></span>
                                        <input type="password" name="password" class="form-control" id="password" placeholder="Entrez votre mot de passe actuel" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                        <div class="validation"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="inputGroupContainer">
                                    <div class="input-group">
                                        <label class="label-register" for="">Nouveau mot de passe</label>
                                        <span class="icon-case"><i class="fa fa-lock"></i></span>
                                        <input type="password" class="form-control" name="new-password" id="new-password" placeholder="Entrez votre nouveau mot de passe" data-rule="email" data-msg="Please enter a valid email" />
                                        <div class="validation"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="inputGroupContainer">
                                    <div class="input-group">
                                        <label class="label-register" for="">Confirmer nouveau mot de passe</label>
                                        <span class="icon-case"><i class="fa fa-lock"></i></span>
                                        <input type="password" class="form-control" name="new-password-confirm" id="new-password-confirm" placeholder="Confirmez votre nouveau mot de passe" data-rule="email" data-msg="Please enter a valid email" />
                                        <div class="validation"></div>
                                    </div>
                                </div>
                            </div>                 
                            <div class="col-md-12 text-center" id="btn-password">
                                <button type="submit" class="button button-a btn-update-password">Modifier mot de passe</button>
                                <button type="button" id="btnCancel" class="btn btn-default btn-cancel" onclick="window.location.href='<?= CURRENT_PATH ?>settings?action=settings'">Annuler</button>
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