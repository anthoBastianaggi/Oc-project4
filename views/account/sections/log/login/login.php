<?php $title = "Jean Forteroche - Un billet simple pour l'alaska"; ?>

<?php
    // Mise en mémoire tampon (rien ne s'affichera)
    ob_start();
?>

<section id="login" class="content-section text-left">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-5 textHeaderLogin">
                <div class="text-container">
                    <h2 class="section-title text-center text-uppercase">Se connecter au compte</h2>                   
                </div>
            </div>
            <div  id="infobox-login" class="col-sm-12">
                <div class="box-shadow-full boxContainer">
                    <div class="row">   
                        <div class="infoForgetContainer">
                            <div class="iconContainer">
                                <span class="icon-case"><i class="fa fa-users"></i></span>
                            </div>
                            <div class="more-info description">
                                <p class="lead">
                                  Connexion membres
                                </p>                           
                            </div>
                        </div>       
                        <div class="col-md-12 col-md-offset-2">
                            <form class="form-horizontal" method="POST">                        
                                <div class="form-group">
                                    <div class="inputGroupContainer">
                                        <div class="input-group">
                                            <label class="label-login">Nom d'utilisateur ou adresse e-mail</label>
                                            <span class="icon-case"><i class="fa fa-user"></i></span>
                                            <input type="text" name="username" maxlength="25" class="form-control" placeholder="Entrez votre nom d'utilisateur ou adresse e-mail"/>                                                                                                               
                                        </div>
                                    </div>
                                </div>   
                                <div class="form-group">
                                    <div class="inputGroupContainer">
                                        <div class="input-group">
                                            <label class="label-login">Mot de passe</label>
                                            <span class="icon-case"><i class="fa fa-lock"></i></span> 
                                            <input type="password" name="password" minlength="8" maxlength="32" class="form-control" placeholder="Entrez votre mot de passe" />                                                                    
                                        </div>
                                    </div>
                                </div>     
                                <div class="form-group">
                                    <div class="inputGroupContainer">
                                        <div class="input-group">
                                            <a href="<?= CURRENT_PATH ?>forget?action=forget">(J'ai oublié mon mot de passe)</a>
                                            <label class="label-login">
                                                <input type="checkbox" name="remember" value="1"/> Se souvenir de moi 
                                            </label>
                                        </div>
                                    </div>
                                </div>                    
                                <div class="col-md-12 text-center" id="btn-login">
                                    <button type="submit" class="button button-a button-big">Connexion</button>
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
    include 'template/template.php'; 
?>