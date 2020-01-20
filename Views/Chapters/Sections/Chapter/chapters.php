<?php $title = "Jean Forteroche - Un billet simple pour l'alaska"; ?>

<?php
    // Mise en mémoire tampon (rien ne s'affichera)
    ob_start(); 
?>

<section class="paralax-mf route" id="allChapters">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-5 textHeaderChapters">
                <div class="text-container">
                    <h2 class="section-title text-center text-uppercase">Liste des chapitres</h2>
                    <div>
                        <p class="section-subheading text-muted">Venez découvrir tous les épisodes.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <?php foreach ($allChapters as $ticket) { ?>
                    <article>
                        <div class="blog-wrapper home-blog-wrapper white-bg">
                            <div class="headerChapter">
                                <h2><a href=""><?= $ticket['title'] ?></a></h2>
                            </div>
                            <div class="entry-content">
                                <div class="blog-thumb">
                                    <a href="https://bit.ly/2LHKl61">
                                        <img src="https://i.ibb.co/HrtN39y/services1.jpg" alt="" />
                                    </a>
                                </div>
                                <div class="meta-info">
                                    Written by <span class="author">Jean Forteroche</span> <span class="date"><?= $ticket['created_at'] ?></span>
                                </div>
                                <div class="blog-content home-blog">                       
                                    <p class="lead"><?= substr($ticket['content'], 0, 700).' '.'. . .' ?></p>
                                </div>
                                <div class="link-box home-blog-link">
                                    <a href="<?= CURRENT_PATH ?>chapters?action=showChapter&id= <?= $ticket['id'] ?>" class="btn btn-primary">Voir plus</a>
                                </div>                         
                            </div>
                        </div>
                    </article>
                <?php } ?>
            </div>
            <aside class="col-md-4">
                <div class="card mb-3">
                    <h3 class="card-header mb-3">Join our Newsletter</h3>
                    <form class="form-horizontal">
                        <div class="form-group">
                        <div class="col-sm-12">
                            <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                        </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary">Join Us</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card mb-3">
                    <h3 class="card-header mb-3">A propos du roman</h3>
                    <div class="list-group  mb-3">
                        <div class="list-group-about-container">    
                            <p class="list-group-item-text"> 
                                Des plaines verdoyantes, aux montagnes acérées ...</br>                
                                À travers un format inédit et résolument moderne, je souhaite vous faire découvrir mon nouveau roman :
                                </br><strong>« Un billet simple pour l'Alaska»</strong>    
                            </p>
                            <p class="list-group-item-text">
                                Êtes vous prêt pour le voyage le plus glacial de votre vie ... ?
                            </p>
                            <div class="meta-info">
                                <span class="author">- Jean Forteroche -</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <h3 class="card-header mb-3">Les derniers chapitres</h3>
                    <div class="list-group mb-3">
                        <?php foreach ($lastChapters as $ticket) { ?>
                            <div class="list-group-container">
                                <a href="#" class="">
                                    <h4 class="list-group-item-heading"><?=  $ticket['title'] ?></h4>
                                    <p class="list-group-item-text">
                                        <?=  substr($ticket['content'], 0, 300).' '.'. . .' ?>
                                    </p>
                                </a>
                            </div>
                        <?php } ?>                
                    </div>
                </div>            
            </aside>
            <div class="col-lg-12 text-center">
                <a id="btn-addChapters" class="btn btn-primary" href="<?= CURRENT_PATH ?>chapters?action=addChapter" role="button">Ajouter chapitre</a>
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