<?php $title = "Jean Forteroche - Un billet simple pour l'alaska"; ?>

<?php
    // Mise en mémoire tampon (rien ne s'affichera)
    ob_start();
?>

<section id="forget" class="content-section text-left">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-5 textHeaderForget">
                <div class="text-container">
                    <h2 class="section-title text-center text-uppercase">Réinitialisation du mot de passe</h2>                   
                </div>
            </div>
            <div  id="infobox-forget" class="col-sm-12">
                <div class="box-shadow-full">
                    <div class="row">
                        <div class="infoForgetContainer">
                            <div class="title-box-2 pt-4 pt-md-0">
                                <h5 class="title-left">
                                    Vous avez oublié votre mot de passe ?
                                </h5>
                            </div>
                            <div class="more-info">
                                <p class="lead">Vous avez demandé la réinitialisation de votre mot de passe.</p>
                                <p class="lead">                               
                                   Pour réinitialiser votre mot de passe, saisissez l'adresse e-mail que vous utilisez pour vous connecter à votre compte.
                                </p>                           
                            </div>
                        </div>
                    <div class="col-md-12 col-md-offset-2">
                        <form class="form-horizontal" action="" method="POST">                        
                            <div class="form-group">
                                <div class="inputGroupContainer">
                                    <div class="input-group">
                                        <label class="label-register" for="">Adresse e-mail</label>
                                        <span class="icon-case"><i class="fa fa-envelope-o"></i></span>                                                                 
                                        <input type="email" name="email" class="form-control" id="exampleInputName2" placeholder="Entrez votre adresse email"/>
                                    </div>
                                </div>
                            </div>                    
                            <div class="col-md-12 text-right" id="btn-forget">
                                <button type="submit" class="btn btn-primary">réinitialisez votre mot de passe</button>
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