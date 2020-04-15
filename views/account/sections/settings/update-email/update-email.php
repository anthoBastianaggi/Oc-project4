<?php $title = "Jean Forteroche - Un billet simple pour l'alaska"; ?>

<?php
    // Buffering (nothing will be displayed)
    ob_start();
?>

<div class="section-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-5 text-header-update-email">
                <div class="text-container">
                    <h2 class="section-title text-center text-uppercase">Modifier adresse e-mail</h2>
                </div>
            </div>
            <div  id="infobox-update-email" class="col-sm-12">
                <div class="box-shadow-full">
                    <div class="row">
                    <div class="col-md-12 col-md-offset-2">
                        <form class="form-horizontal" method="POST">
                            <div class="form-group">
                                <div class="inputGroupContainer">
                                    <div class="input-group">
                                        <label class="label-register" for="">Adresse e-mail actuel</label>
                                        <span class="icon-case"><i class="fa fa-envelope-o"></i></span>
                                        <input type="email" name="email" class="form-control" id="email" placeholder="Entrez votre adresse e-mail actuel" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                        <div class="validation"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="inputGroupContainer">
                                    <div class="input-group">
                                        <label class="label-register" for="">Nouvelle adresse e-mail</label>
                                        <span class="icon-case"><i class="fa fa-envelope-o"></i></span>
                                        <input type="email" name="new-email" class="form-control" id="new-email" placeholder="Entrez votre nouvelle adresse e-mail" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                        <div class="validation"></div>
                                    </div>
                                </div>
                            </div>         
                            <div class="col-md-12 text-center" id="btn-email">
                                <button type="submit" class="button button-a btn-update-email">Modifier adresse e-mail</button>
                                <button type="button" id="btnCancelUpdateEmail" class="btn btn-default btn-cancel">Annuler</button>
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