<?php $title = "Jean Forteroche - Un billet simple pour l'alaska"; ?>

<?php
    // Mise en mémoire tampon (rien ne s'affichera)
    ob_start(); 
?>

<div class="row" id="addChapter">
    <div class="col-md-8 col-md-offset-2">
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

<?php 
    // On recupere dans une variable le contenu du tampon 
    $content = ob_get_clean() ;

    // On intégre le template qui utilise la variable $content
    include 'Template/template.php'; 
?>