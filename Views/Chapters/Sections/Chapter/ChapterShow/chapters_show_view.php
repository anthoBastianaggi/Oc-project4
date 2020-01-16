<?php $title = "Jean Forteroche - Un billet simple pour l'alaska"; ?>

<?php
    // Mise en mémoire tampon (rien ne s'affichera)
    ob_start(); 
?>

<section class="showChapters content-section text-left">
    <div class="container">
        <div class="row">
            <div class="infobox_chapters col-md-12">
               <div class="card">
                    <div class="card-body">
                        <h2 class="card-title"><?= $showChapter['title'] ?></h2>
                        <div class="mb-1 text-center"><?= $showChapter['created_at'] ?></div>
                        <p class="card-text"><?= $showChapter['content'] ?></p>
                    </div>
                    <div class="text-right">
                        <div class="title h5">
                            By
                            <a href="#"><b>Jean Forteroche</b></a>
                        </div>
                        <div class="btn-body-card">
                        <div class="btn-card">
                                <a href="<?= CURRENT_PATH ?>chapters?action=updateChapter&id=<?= $_GET['id'] ?>" class="btn btn-default stat-item">
                                <i class="fas fa-pencil-alt"></i>
                                </a>
                                <a href="<?= CURRENT_PATH ?>chapters?action=deleteChapter&id=<?= $_GET['id'] ?>" class="btn btn-default stat-item">
                                <i class="fas fa-trash-alt"></i>
                                </a>
                            </div>
                        </div>
                    </div>   
                </div>
            </div>
        </div>
    </div>
</section>

<section class="commentChapter">
    <div class="container">
        <h2>Commentaires</h2>
        <div class="row">
            <?php foreach ($allComments as $comment) { ?>
                <div class="col-md-12">
                    <div class="panel panel-white post panel-shadow">
                        <div class="post-heading">
                            <div class="pull-left image">
                                <img src="http://bootdey.com/img/Content/user_1.jpg" class="img-circle avatar" alt="user profile image">
                            </div>
                            <div class="pull-left meta">
                                <div class="title h5">
                                    <a href="#"><b>Jean Forteroche</b></a>
                                    made a post.
                                </div>
                                <h6 class="text-muted time"><?= $comment['created_at'] ?></h6>
                            </div>
                        </div> 
                        <div class="post-description"> 
                            <p><?= $comment['content'] ?></p>
                            <div class="stats">
                                <a href="<?= CURRENT_PATH ?>comments?action=updateComment&id=<?= $comment['id'] ?>" class="btn btn-default stat-item">
                                <i class="fas fa-pencil-alt"></i>
                                </a>
                                <a href="<?= CURRENT_PATH ?>comments?action=deleteComment&id=<?= $comment['id'] ?>" class="btn btn-default stat-item">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                                <a href="<?= CURRENT_PATH ?>comments?action=signalComment&id=<?= $_GET['id'] ?>" class="btn btn-default stat-item">
                                    <i class="fas fa-flag"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="addComments">
            <h2>Ajouter commentaires</h2>
            <div class="row" id="comment_add">
                <div class="col-md-12 col-md-offset-2">
                    <form class="form-horizontal" action="<?= CURRENT_PATH ?>comments?action=addComment&id=<?= $_GET['id'] ?>" method="post">
                    <div class="form-group ">
                        <textarea id="commentChapter" name="commentChapter" class="form-control" placeholder="Entrez votre commentaire"></textarea> 
                    </div>
                    <button type="submit" name="btnAddComment" class="btn btn-default">Envoyé commentaire</button>
                    </form>
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