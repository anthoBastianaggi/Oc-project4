<?php $title = "Jean Forteroche - Un billet simple pour l'alaska"; ?>

<?php
    // Mise en mémoire tampon (rien ne s'affichera)
    ob_start(); 
?>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg " color-on-scroll="500">
    <div class=" container-fluid  ">
        <a class="navbar-brand" href="#"> Profil : <?= $_SESSION['auth']->username ?></a>
    </div>
</nav>
<!-- End Navbar -->
<div class="contentChapterList">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-xl-12 block-edit-chapter-list">
                <div class="card">
                    <div class="card-header">
                        <div class="card-header-item-container">
                            <h4 class="card-title">Liste des chapitres</h4>
                        </div>
                        <div class="card-header-item-container">
                            <a class="button btn-add" href="<?= CURRENT_PATH ?>chapters?action=addChapter">
                            <i class="fa fa-plus icon"></i>  
                            </a>
                        </div>                
                    </div>
                    <div class="card-body">
                        <div class="card-body-container">
                            <div class="card-body-section">
                                <?php foreach ($allChapters as $ticket) { ?>
                                <div class="col-md-12 card-body-section-box">
                                    <div class="item-container">
                                        <p class="box-title"><?= $ticket['title'] ?></p>
                                    </div>
                                    <div class="item-container">
                                        <a href="<?= CURRENT_PATH ?>chapters?action=updateChapter&id=<?= $ticket['id'] ?>" class="button btn-update">
                                        <i class="fa fa-pencil icon"></i>
                                        </a>
                                        <a href="<?= CURRENT_PATH ?>chapters?action=deleteChapter&id=<?= $ticket['id'] ?>" class="button btn-delete">
                                        <i class="fa fa-trash icon"></i>
                                        </a>
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

<?php 
    // On recupere dans une variable le contenu du tampon 
    $content = ob_get_clean() ;

    // On intégre le template qui utilise la variable $content
    include 'template/template-admin.php'; 
?>