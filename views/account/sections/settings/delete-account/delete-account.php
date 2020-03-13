<?php $title = "Jean Forteroche - Un billet simple pour l'alaska"; ?>

<?php
    // Mise en mémoire tampon (rien ne s'affichera)
    ob_start();
?>

<div class="section-content">
    <div class="container container-delete-account">
        <div class="row">
            <div class="col-md-12 col-md-5 text-header-delete-account">
                <div class="text-container">
                    <h2 class="section-title text-center text-uppercase">Supprimer mon compte</h2>                   
                </div>
            </div>
            <div  id="infobox-delete-account" class="col-sm-12">
                <div class="box-shadow-full col-sm-10 col-md-8">
                    <div class="row infobox-container">
                        <div class="info-delete-account-container">
                            <div class="icon-container">
                                <i class="fa fa-exclamation-circle"></i>
                            </div>
                            <div class="more-info">
                                <p class="lead">Vous êtes sur le point de supprimer votre compte.</p>
                                <p class="lead">Si vous ne pensez jamais réutiliser votre compte et souhaiter l'effacer complètement, nous pouvons nous en charger.  Rappelez vous cependant que vous ne pourrez ni réactiver votre compte ni récupérer ses informations.</p> 
                                <p class="lead">Si vous souhaitez tout de même de supprimer votre compte, cliquez sur Supprimer mon compte.</p>                           
                            </div>
                        </div>   
                    </div>
                    <div class="card-footer">
                        <div class="btn-body-card">
                            <div class="btn-card">
                                <button type="submit" name="btnDeleteAccount" id="btnDeleteAccount" class="button button-a" onclick="window.location.href='<?= CURRENT_PATH ?>settings?action=deleteMyAccount'">Supprimer mon compte</button>
                                <button type="button" id="btnCancel" class="btn btn-default" onclick="window.location.href='<?= CURRENT_PATH ?>settings?action=settings'">Annuler</button>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
    // On recupere dans une variable le contenu du tampon 
    $content = ob_get_clean() ;

    // On intégre le template qui utilise la variable $content
    include 'template/template.php'; 
?>