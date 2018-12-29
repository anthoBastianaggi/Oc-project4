<?php $title = "Jean Forteroche - Un billet simple pour l'alaska"; ?>

<?php
    // Mise en mémoire tampon (rien ne s'affichera)
    ob_start(); 
?>

<div class="row">
    <?php foreach ($showChapter as $ticket) { ?>
        <div class="col-md-8 col-md-offset-2">
            <form class="form-horizontal" action="<?= CURRENT_PATH ?>chapters?action=updateChapter&id=<?= $_GET['id'] ?>" method="post">
            <div class="form-group">
                <label for="exampleInputName2">Titre du chapitre</label>
                <input type="text" name="titleTicket" class="form-control" id="exampleInputName2" value="<?= $ticket['title'] ?>">
            </div>
            <div class="form-group ">
                <label for="exampleInputText3">Contenu</label>
                <textarea id="contentTicket" name="contentTicket" class="form-control" value="<?= $ticket['content'] ?>"></textarea> 
            </div>
            <button type="submit" name="btnUpdateChapter" class="btn btn-default">Modifier</button>
            </form>
        </div>
    <?php } ?>
</div>

<?php 
    // On recupere dans une variable le contenu du tampon 
    $content = ob_get_clean() ;

    // On intégre le template qui utilise la variable $content
    include 'Template/template.php'; 
?>