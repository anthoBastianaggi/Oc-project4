<?php $title = "Jean Forteroche - Un billet simple pour l'alaska"; ?>

<?php
    // Mise en mémoire tampon (rien ne s'affichera)
    ob_start(); 
?>

<section class="addChapters content-section text-left">
    <div class="container">
        <h2 class="section-title text-center text-uppercase">Ajouter un chapitre</h2>
        <div class="row">
            <div class="col-md-12 col-md-offset-2">
                <form class="form-horizontal" action="<?= CURRENT_PATH ?>chapters?action=addChapter" method="post">
                    <div class="form-group">
                        <label for="exampleInputName2">Titre du chapitre</label>
                        <input type="text" name="titleTicket" class="form-control" id="exampleInputName2" placeholder="Entrez votre titre du chapitre">
                    </div>
                    <div class="form-group ">
                        <label for="exampleInputText3">Contenu</label>
                        <textarea id="contentTicket" name="contentTicket" class="form-control" placeholder="Entrez votre contenu"></textarea> 
                    </div>
                    <button type="submit" name="btnAjoutTicket" class="btn btn-default">Envoyé message</button>
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