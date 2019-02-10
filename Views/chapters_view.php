<?php $title = "Jean Forteroche - Un billet simple pour l'alaska"; ?>

<?php
    // Mise en mémoire tampon (rien ne s'affichera)
    ob_start(); 
?>

<section class="allChapters">
    <div class="chaptersContainer">
        <h2 class="section-title text-center text-uppercase">Liste des chapitres</h2>
        <div>
            <p class="section-subheading text-muted">Venez découvrir tous les épisodes</p>
        </div>
        <div class="row">
            <?php foreach ($allChapters as $ticket) { ?>
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?= $ticket['title'] ?></h5>
                            <div class="mb-1 text-center"><?= $ticket['created_at'] ?></div>
                            <p class="card-text text-left"><?= substr($ticket['content'], 0, 700).' '.'. . .' ?></p>
                            <br /><br /><a href="<?= CURRENT_PATH ?>chapters?action=showChapter&id= <?= $ticket['id'] ?>" class="btn btn-primary">Voir plus</a>
                        </div> 
                    </div>
                </div>
            <?php } ?>
        </div> 
        <br />
        <div class="col-lg-12 text-center">
            <a id="btn-addChapters" class="btn btn-primary" href="<?= CURRENT_PATH ?>chapters?action=addChapter" role="button">Ajouter chapitre</a>
        </div>
    </div>
</section>

<?php 
    // On recupere dans une variable le contenu du tampon 
    $content = ob_get_clean() ;

    // On intégre le template qui utilise la variable $content
    include 'Template/template.php'; 
?>