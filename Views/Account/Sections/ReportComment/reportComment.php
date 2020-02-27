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
                                <h4 class="card-title">Report comment</h4>
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
                                                        <td scope="col" colspan=2 class="text-center">Validation</td>
                                                    </tr>
                                                    <?php foreach ($allSignaleComments as $signaleComment) { ?>
                                                    <tr>
                                                        <td><?= $signaleComment['writer'] ?></td>
                                                        <td><?= $signaleComment['content'] ?></td>
                                                        <td><?= $signaleComment['chapter'] ?></td>
                                                        <td><?= $signaleComment['reporter'] ?></td>
                                                        <td>
                                                            <a href="<?= CURRENT_PATH ?>reportComment?action=validateSignaleComment&id=<?= $signaleComment['report_id'] ?>">
                                                                <i class="fa fa-pencil icon"></i>Valider
                                                            </a>
                                                        </td>
                                                        <td>  
                                                            <a href="<?= CURRENT_PATH ?>reportComment?action=deleteSignaleComment&id=<?= $signaleComment['report_id'] ?>">
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
    include 'Template/template.php'; 
?>