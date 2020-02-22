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
                    <h2 class="section-title text-center text-uppercase">Modifier mot de passe</h2>                   
                </div>
            </div>
            <div>
                <form action="" method="post" role="form" class="contactForm">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <div class="inputGroupContainer">
                                    <div class="input-group">
                                        <label class="label-register" for="">Mot de passe actuel</label>
                                        <span class="icon-case"><i class="fa fa-male"></i></span>
                                        <input type="password" name="password" class="form-control" id="password" placeholder="Entrez votre mot de passe actuel" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                        <div class="validation"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <div class="inputGroupContainer">
                                    <div class="input-group">
                                        <label class="label-register" for="">Nouveau mot de passse</label>
                                        <span class="icon-case"><i class="fa fa-user"></i></span>
                                        <input type="password" name="new-password" class="form-control" id="new-password" placeholder="Entrez votre nouveau mot de passe" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                        <div class="validation"></div>
                                    </div>
                                </div>
                            </div>              
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <div class="inputGroupContainer">
                                    <div class="input-group">
                                        <label class="label-register" for="">Retaper nouveau mot de passe</label>
                                        <span class="icon-case"><i class="fa fa-envelope-o"></i></span>
                                        <input type="password" class="form-control" name="confirm-new-password" id="confirm-new-password" placeholder="Répétez votre nouveau mot de passe" data-rule="email" data-msg="Please enter a valid email" />
                                        <div class="validation"></div>
                                    </div>
                                </div>
                            </div>      
                        </div>
                        <div class="col-md-12" id="btn-contact">
                            <button type="submit" class="button button-a button-big">Modifier mot de passe<span class="icon-send"><i class="fa fa-paper-plane"></i></span></button>
                            <button type="submit" class="button button-a button-big">Cancel<span class="icon-send"><i class="fa fa-paper-plane"></i></span></button>
                        </div>
                    </div>
                </form>
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