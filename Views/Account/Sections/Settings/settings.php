<?php $title = "Jean Forteroche - Un billet simple pour l'alaska"; ?>

<?php
    // Mise en mémoire tampon (rien ne s'affichera)
    ob_start(); 
?>
<section class="settings">
    <div class="wrapper">
        <?php include_once 'Views/Account/Sections/includes/menuDashboard.php' ?>
    </div>
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg " color-on-scroll="500">
            <div class=" container-fluid  ">
                <a class="navbar-brand" href="#"> Profil : <?= $_SESSION['auth']->username ?></a>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-xl-12 block-edit">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Paramètres</h4>
                            </div>
                            <div class="card-body">
                                <div class="card-body-container">
                                    <div class="card-body-section">
                                        <h3 class="card-body-section-title">Préférences</h3>
                                        <div class="col-md-12 card-body-section-box">
                                            <div class="item-container">
                                                <p class="box-label">Avatar</p>
                                                <p class="box-title">Changer votre avatar</p>
                                                <p class="box-description">Change l'avatar de votre profil.</p>
                                            </div>
                                            <div class="item-container">
                                            <button type="submit" class="button btn-change">
                                                <i class="fa fa-edit icon"></i>
                                                <span class="change">Changer</span>
                                            </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body-section">
                                        <h3 class="card-body-section-title">Sécurités</h3>
                                        <div class="col-md-12 card-body-section-box">
                                            <div class="item-container">
                                                <p class="box-label">Adresse email</p>
                                                <p class="box-title">Changer votre adresse email</p>
                                                <p class="box-description">Nous vous conseillons d’utiliser un mot de passe sûr que vous n’utilisez nulle part ailleurs.</p>
                                            </div>
                                            <div class="item-container">
                                                <a href="<?= CURRENT_PATH ?>update-email?action=updateEmail" class="button btn-change">
                                                    <i class="fa fa-edit icon"></i>
                                                    <span class="change">Changer</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-12 card-body-section-box">
                                            <div class="item-container">
                                                <p class="box-label">Mot de passe</p>
                                                <p class="box-title">Changer votre mot de passe</p>
                                                <p class="box-description">Nous vous conseillons d’utiliser un mot de passe sûr que vous n’utilisez nulle part ailleurs.</p>
                                            </div>
                                            <div class="item-container">
                                                <a href="<?= CURRENT_PATH ?>update-password?action=updatePassword" class="button btn-change">
                                                    <i class="fa fa-edit icon"></i>
                                                    <span class="change">Changer</span>
                                                </a>
                                            </div>
                                        </div>      
                                        <div class="col-md-12 card-body-section-box">
                                            <div class="item-container">
                                                <p class="box-label">Compte</p>
                                                <p class="box-title">Supprimer votre compte utilisateur</p>
                                                <p class="box-description">Vous pouvez supprimer définitivement votre compte utilisateur.</p>
                                            </div>
                                            <div class="item-container">
                                                <a href="<?= CURRENT_PATH ?>delete-account?action=deleteAccount" class="button btn-delete">
                                                    <i class="fa fa-trash icon"></i>
                                                    <span class="delete">Supprimer</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>            
                                </div>
                            </div>
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