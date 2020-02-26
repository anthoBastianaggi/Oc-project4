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
                    <h2 class="section-title text-center text-uppercase">S'inscrire</h2>
                    <div>
                        <p class="section-subheading text-muted">N'hésitez pas à vous inscrire.</p>
                    </div>
                </div>
            </div>
            <div  id="infobox-register" class="col-sm-12">
                <div class="box-shadow-full">
                    <div class="row">
                        <div class="infoRegisterContainer">
                            <div class="title-box-2 pt-4 pt-md-0">
                                <h5 class="title-left">
                                    Nouveaux clients
                                </h5>
                            </div>
                            <div class="more-info">
                                <p class="lead">
                                    En créant un compte via le formulaire ci-dessous, vous aurez accès à la lecture complète de mes chapitres. Alors n'hésitez pas, inscrivez vous et bonne lecture.
                                </p>                           
                            </div>
                        </div>
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
                        <div class="title-box-2">
                            <h5 class="title-left">
                                S'enregistrer
                            </h5>
                        </div>
                        <form class="form-horizontal" method="POST">
                            <div class="form-group">
                                <div class="inputGroupContainer">
                                    <div class="input-group">
                                        <label class="label-register" for="">Prénom</label>
                                        <span class="icon-case"><i class="fa fa-male"></i></span>                               
                                        <input type="text" name="firstname" maxlength="16"  class="form-control" placeholder="Entrez votre prénom" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="inputGroupContainer">
                                    <div class="input-group">
                                        <label class="label-register" for="">Nom</label>
                                        <span class="icon-case"><i class="fa fa-user"></i></span>                                                               
                                        <input type="text" name="lastname" maxlength="16" class="form-control" placeholder="Entrez votre nom" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="inputGroupContainer">
                                    <div class="input-group">
                                        <label class="label-register" for="">Date de naissance</label>
                                        <span class="icon-case"><i class="fa fa-calendar"></i></span>                                                                 
                                        <input type="date" name="birthdate" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="inputGroupContainer">
                                    <div class="input-group">
                                        <label class="label-register" for="">Pseudo</label>
                                        <span class="icon-case"><i class="fa fa-user"></i></span>                                                          
                                        <input type="text" name="username" maxlength="25" class="form-control" placeholder="Entrez votre pseudo" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="inputGroupContainer">
                                    <div class="input-group">
                                        <label class="label-register" for="">Email</label>
                                        <span class="icon-case"><i class="fa fa-envelope-o"></i></span>                                                                 
                                        <input type="email" name="email" class="form-control" placeholder="Entrez votre adresse email"/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="inputGroupContainer">
                                    <div class="input-group">
                                        <label class="label-register" for="">Mot de passe</label>
                                        <span class="icon-case"><i class="fa fa-lock"></i></span>                                                                 
                                        <input type="password" name="password" minlength="8" maxlength="32" class="form-control" placeholder="Entrez votre mot de passe"/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="inputGroupContainer">
                                    <div class="input-group">
                                        <label class="label-register" for="">Confirmer mot de passe</label>
                                        <span class="icon-case"><i class="fa fa-lock"></i></span>                                                         
                                        <input type="password" name="password-confirm" class="form-control" placeholder="Confirmez votre mot de passe"/>
                                    </div>
                                </div>
                            </div>   
                            <div class="col-md-12 text-center" id="btn-register">
                                <button type="submit" class="button button-a button-big">S'inscrire</button>
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