<?php $title = "Jean Forteroche - Un billet simple pour l'alaska"; ?>

<?php
    // Mise en mémoire tampon (rien ne s'affichera)
    ob_start(); 
?>
<section class="chapterList">
    <div class="wrapper">
        <?php include_once 'Views/Account/Sections/includes/menuDashboard.php' ?>
    </div>
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg " color-on-scroll="500">
            <div class=" container-fluid  ">
                <a class="navbar-brand" href="#"> Profile : <?= $_SESSION['auth']->username ?></a>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-xl-12 block-edit">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Chapter List</h4>
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
                                                <button type="submit" class="button btn-add">
                                                    <i class="fa fa-plus icon"></i>           
                                                </button>
                                                <button type="submit" class="button btn-update">
                                                    <i class="fa fa-pencil icon"></i>           
                                                </button>
                                                <button type="submit" class="button btn-delete">
                                                    <i class="fa fa-trash icon"></i>           
                                                </button>
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
</section>
<?php 
    // On recupere dans une variable le contenu du tampon 
    $content = ob_get_clean() ;

    // On intégre le template qui utilise la variable $content
    include 'Template/template.php'; 
?>