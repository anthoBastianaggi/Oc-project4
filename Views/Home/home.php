<?php $title = "Jean Forteroche - Un billet simple pour l'alaska"; ?>

<?php
    // Mise en mémoire tampon (rien ne s'affichera)
    ob_start();
?>

<section class="module-cover parallax fullscreen text-center" id="home">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="m-b-20"><strong>Un billet simple pour l'Alaska</strong></h2>
                <p class="m-b-40">Un roman écrit par Jean Forteroche</p>
            </div>
        </div> 
    </div>
</section>
<section class="paralax-mf route" id="homeChapters">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-5 textHeaderHomeChapters">
                <div class="text-container">
                    <h2 class="section-title text-center text-uppercase">Chapitres</h2>
                    <div>
                        <p class="section-subheading text-muted">Venez découvrir les derniers épisodes.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <?php foreach ($lastChapters as $ticket) { ?>
                    <article class="col-lg-6">
                        <div class="card mb-3">
                            <div class="headerChapter">
                                <h2><a href=""><?= $ticket['title'] ?></a></h2>
                            </div>
                            <div class="blog-thumb">
                                <a href="https://bit.ly/2LHKl61">
                                    <img src="https://i.ibb.co/HrtN39y/services1.jpg" alt="" />
                                </a>
                            </div>
                            <div class="card-block">
                                <div class="meta-info">
                                    Written by <span class="author">Jean Forteroche</span> <span class="date"><?= $ticket['created_at'] ?></span>
                                </div>
                                <div class="blog-content home-blog">                       
                                    <p class="lead"><?= substr($ticket['content'], 0, 300).' '.'. . .' ?></p>
                                </div>
                            </div>
                            <div class="card-footer">
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
                <a id="btn-getAllChapters" class="btn btn-primary" href="<?= CURRENT_PATH ?>chapters?action=chapters" role="button">Voir plus de chapitres</a>
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