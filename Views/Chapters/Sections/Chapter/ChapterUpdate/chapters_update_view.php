<?php $title = "Jean Forteroche - Un billet simple pour l'alaska"; ?>

<?php
    // Mise en mémoire tampon (rien ne s'affichera)
    ob_start(); 
?>

<section class="updateChapters content-section text-left">
    <div class="container">
        <h2 class="section-title text-center text-uppercase">Modifier un chapitre</h2>
        <div class="row">
            <div class="col-md-12 col-md-offset-2">
                <form class="form-horizontal" action="<?= CURRENT_PATH ?>chapters?action=updateChapter&id=<?= $_GET['id'] ?>" method="post">
                    <div class="form-group">
                        <label for="exampleInputName2">Titre du chapitre</label>
                        <input type="text" name="titleTicket" class="form-control" id="exampleInputName2" value="<?= $showChapter['title'] ?>">
                    </div>
                    <div class="form-group ">
                        <label for="exampleInputText3">Contenu</label>
                        <textarea id="contentTicket" name="contentTicket" class="form-control" value="<?= $showChapter['content'] ?>"></textarea> 
                    </div>
                    <button type="submit" name="btnUpdateChapter" class="btn btn-default">Modifier</button>
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