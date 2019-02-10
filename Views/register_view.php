<?php $title = "Jean Forteroche - Un billet simple pour l'alaska"; ?>

<?php
    // Mise en mémoire tampon (rien ne s'affichera)
    ob_start();
?>

<section id="register" class="content-section text-left">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-5">
                <div class="text-container">
                    <h2 class="section-title text-center text-uppercase">S'inscrire</h2>
                    <div>
                        <p class="section-subheading text-muted">N'hésitez pas à vous inscrire.</p>
                    </div>
                </div>
            </div>
            <div  id="infobox-register" class="col-sm-12">
            <div class="box-shadow-full">
                <div class="row">
                <div class="col-md-12 col-md-offset-2">
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
                    <form class="form-horizontal" action="" method="POST">
                        <div class="form-group">
                            <label class="label-register" for="">Prénom</label>
                            <input type="text" name="firstname" maxlength="16"  class="form-control" id="exampleInputName2" placeholder="Entrez votre prénom" />
                        </div>
                        <div class="form-group">
                            <label class="label-register" for="">Nom</label>
                            <input type="text" name="lastname" maxlength="16" class="form-control" id="exampleInputName2" placeholder="Entrez votre nom" />
                        </div>
                        <div class="form-group">
                            <label class="label-register" for="">Date de naissance</label>
                            <input type="date" name="birthdate" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label class="label-register" for="">Pseudo</label>
                            <input type="text" name="username" maxlength="25" class="form-control" id="exampleInputName2" placeholder="Entrez votre pseudo" />
                        </div>
                        <div class="form-group">
                            <label class="label-register" for="">Email</label>
                            <input type="email" name="email" class="form-control" id="exampleInputName2" placeholder="Entrez votre adresse email"/>
                        </div>
                        <div class="form-group">
                            <label class="label-register" for="">Mot de passe</label>
                            <input type="password" name="password" minlength="8" maxlength="32" class="form-control" id="exampleInputName2" placeholder="Entrez votre mot de passe"/>
                        </div>
                        <div class="form-group">
                            <label class="label-register" for="">Confirmer mot de passe</label>
                            <input type="password" name="password-confirm" class="form-control" id="exampleInputName2" placeholder="Confirmez votre mot de passe"/>
                        </div>
                        <div class="col-lg-12 text-right" id="btn-register">
                            <button type="submit" class="btn btn-primary">S'inscrire</button>
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