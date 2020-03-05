<?php $title = "Jean Forteroche - Un billet simple pour l'alaska"; ?>

<?php
    // Mise en mémoire tampon (rien ne s'affichera)
    ob_start(); 
?>
<section class="settings">
    <div class="wrapper">
        <?php include_once 'views/account/sections/includes/menu-dashboard.php' ?>
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
                                <h4 class="card-title">Commentaires signalés</h4>
                            </div>
                            <div class="card-body">
                                <div class="card-body-container">
                                    <div class="card-body-section">
                                        <div class="col-md-12 card-body-section-box">
                                            <div class="item-container">
                                                <table class="table table-bordered">
                                                    <tr>
                                                        <td scope="col" class="text-center">Publié par</td>
                                                        <td scope="col" class="text-center">Content</td>
                                                        <td scope="col" class="text-center">Chapitre lié</td>
                                                        <td scope="col" class="text-center">Signalé par</td>
                                                    </tr>
                                                    <?php foreach ($allSignaleCommentsValidate as $signaleCommentValidate) { ?>
                                                    <tr>
                                                        <td><?= $signaleCommentValidate['writer'] ?></td>
                                                        <td><?= $signaleCommentValidate['content'] ?></td>
                                                        <td><?= $signaleCommentValidate['chapter'] ?></td>
                                                        <td><?= $signaleCommentValidate['reporter'] ?></td>
                                                    </tr>
                                                    <?php } ?>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-md-12 card-body-section-box">
                                            <div class="item-container">
                                                <table class="table table-bordered">
                                                    <tr>
                                                        <td scope="col" class="text-center">Publié par</td>
                                                        <td scope="col" class="text-center">Content</td>
                                                        <td scope="col" class="text-center">Chapitre lié</td>
                                                        <td scope="col" class="text-center">Signalé par</td>
                                                        <td scope="col" colspan=2 class="text-center">Validation</td>
                                                    </tr>
                                                    <?php foreach ($allSignaleCommentsNotValidate as $signaleCommentNotValidate) { ?>
                                                    <tr>
                                                        <td><?= $signaleCommentNotValidate['writer'] ?></td>
                                                        <td><?= $signaleCommentNotValidate['content'] ?></td>
                                                        <td><?= $signaleCommentNotValidate['chapter'] ?></td>
                                                        <td><?= $signaleCommentNotValidate['reporter'] ?></td>
                                                        <td>
                                                            <a href="<?= CURRENT_PATH ?>report-comment?action=validateSignaleComment&id=<?= $signaleCommentNotValidate['report_id'] ?>">
                                                                <i class="fa fa-pencil icon"></i>Valider
                                                            </a>
                                                        </td>
                                                        <td>  
                                                            <a href="<?= CURRENT_PATH ?>report-comment?action=deleteSignaleComment&id=<?= $signaleCommentNotValidate['report_id'] ?>">
                                                                <i class="fa fa-pencil icon"></i>Annuler
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <?php } ?>
                                                </table>
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
    include 'template/template.php'; 
?>