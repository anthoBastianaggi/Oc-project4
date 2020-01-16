<?php $title = "Jean Forteroche - Un billet simple pour l'alaska"; ?>

<?php
    // Mise en mémoire tampon (rien ne s'affichera)
    ob_start(); 
?>

<div class="comments">
    <h2>Commentaires</h2>
    <div class="row" id="comment_post">
        <div class="col-md-8 col-md-offset-2">
            <form class="form-horizontal" action="<?= CURRENT_PATH ?>comments?action=updateComment&id=<?= $_GET['id'] ?>" method="post">
                <div class="form-group ">
                    <textarea id="idComment" name="contentComment" class="form-control" value="<?= $updateComment['content'] ?>"></textarea> 
                    <label for="exampleInputText3">Jean Forteroche</label>
                </div>
            </form>
        </div>
        <button type="submit" name="btnUpdateComment" class="btn btn-default">Modifier</button>
    </div>
</div>

<?php 
    // On recupere dans une variable le contenu du tampon 
    $content = ob_get_clean() ;

    // On intégre le template qui utilise la variable $content
    include 'Template/template.php'; 
?>