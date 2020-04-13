<?php $title = "Jean Forteroche - Un billet simple pour l'alaska"; ?>

<?php
    // Buffering (nothing will be displayed)
    ob_start(); 
?>

<nav class="navbar navbar-expand-lg " color-on-scroll="500">
    <div class=" container-fluid  ">
        <a class="navbar-brand" href="#"> Profil : <?= $infoProfile['username'] ?></a>
    </div>
</nav>
<!-- End Navbar -->
<div class="contentReport">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-xl-12 block-edit-report">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Commentaires signalés</h4>
                    </div>
                    <div class="card-body">
                        <div class="card-body-container">
                            <div class="card-body-section">
                                <div class="col-md-12 card-body-section-box">
                                    <div class="item-container">
                                        <div class="box-header">
                                            <div class="box-header-container">
                                                <p class="box-title">Publié par</p>
                                            </div>
                                            <div class="box-header-container">
                                                <p class="box-title">Content</p>
                                            </div>
                                            <div class="box-header-container">
                                                <p class="box-title">Chapitre lié</p>
                                            </div>
                                            <div class="box-header-container">
                                                <p class="box-title">Signalé par</p>
                                            </div>
                                            <div class="box-header-container">
                                                <p class="box-title">Validation</p>
                                            </div>
                                        </div>
                                        <?php foreach ($allSignaleCommentsValidate as $signaleCommentValidate) { ?>
                                        <div class="box-body">
                                            <div class="box-body-container">
                                                <p class="box-description"><?= $signaleCommentValidate['writer'] ?></p>
                                            </div>
                                            <div class="box-body-container">
                                                <p class="box-description"><?= $signaleCommentValidate['content'] ?></p>
                                            </div>
                                            <div class="box-body-container">
                                                <p class="box-description"><?= $signaleCommentValidate['chapter'] ?></p>
                                            </div>
                                            <div class="box-body-container">
                                                <p class="box-description"><?= $signaleCommentValidate['reporter'] ?></p>
                                            </div>
                                            <div class="box-btn-body-container ">
                                                <div class="box-btn">
                                                    <div class="btn-container-validate">
                                                        <a href="<?= CURRENT_PATH ?>report-comment?action=validateSignaleComment&id=<?= $signaleCommentValidate['comment_id'] ?>" class="button btn-validate">
                                                            <i class="fa fa-pencil icon"></i>
                                                            <span class="validate">Valider</span>
                                                        </a>
                                                    </div>
                                                    <div class="btn-container-cancel">
                                                        <a href="<?= CURRENT_PATH ?>report-comment?action=deleteSignaleComment&id=<?= $signaleCommentValidate['report_id'] ?>" class="button btn-cancel">
                                                            <i class="fa fa-pencil icon"></i>
                                                            <span class="cancel">Annuler</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
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

<?php 
    // We recover in a variable the content of the buffer
    $content = ob_get_clean() ;

    // We integrate the template which uses the variable $content
    include 'template/template-admin.php'; 
?>