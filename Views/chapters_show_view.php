<?php $title = "Jean Forteroche - Un billet simple pour l'alaska"; ?>

<?php
    // Mise en mémoire tampon (rien ne s'affichera)
    ob_start(); 
?>

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><?= $showChapter['title'] ?></h5>
                <div class="mb-1 text-muted"><?= $showChapter['created_at'] ?></div>
                <p class="card-text"><?= $showChapter['content'] ?></p>
            </div>
            <div class="btn-body-card">
                <div class="btn-card">
                    <a href="<?= CURRENT_PATH ?>chapters?action=updateChapter&id=<?= $_GET['id'] ?>">modifier chapitre</a></td>
                    <a href="<?= CURRENT_PATH ?>chapters?action=deleteChapter&id=<?= $_GET['id'] ?>">Suppprimer chapitre</a></td>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="comments">
    <h2>Commentaires</h2>
    <?php foreach ($allComments as $comment) { ?>
        <div class="row" id="comment_post">
            <div class="col-md-8 col-md-offset-2">
                <div class="form-group ">
                    <label for="exampleInputText3"><?= $comment['content'] ?></label>
                    <label for="exampleInputText3">Jean Forteroche</label>
                </div>
                <a href="<?= CURRENT_PATH ?>comments?action=updateComment&id=<?= $_GET['id'] ?>">modifier commentaire</a>
                <a href="<?= CURRENT_PATH ?>comments?action=deleteComment&id=<?= $_GET['id'] ?>">supprimer commentaire</a>
                <a href="<?= CURRENT_PATH ?>comments?action=signalComment&id=<?= $_GET['id'] ?>">signaler commentaire</a>
            </div>
        </div>
    <?php } ?>
</div>
<div class="addComments">
    <h2>Ajouter commentaires</h2>
    <div class="row" id="comment_add">
        <div class="col-md-8 col-md-offset-2">
            <form class="form-horizontal" action="<?= CURRENT_PATH ?>chapters?action=addComment&id=<?= $_GET['id'] ?>" method="post">
            <div class="form-group ">
                <label for="exampleInputText3">Commentaire</label>
                <textarea id="commentChapter" name="commentChapter" class="form-control" placeholder="Entrez votre commentaire"></textarea> 
            </div>
            <button type="submit" name="btnAddComment" class="btn btn-default">Envoyé commentaire</button>
            </form>
        </div>
    </div>
</div>

<?php 
    // On recupere dans une variable le contenu du tampon 
    $content = ob_get_clean() ;

    // On intégre le template qui utilise la variable $content
    include 'Template/template.php'; 
?>