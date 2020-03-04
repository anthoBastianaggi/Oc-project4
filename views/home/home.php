<?php $title = "Jean Forteroche - Un billet simple pour l'alaska"; ?>

<?php
    // Mise en mémoire tampon (rien ne s'affichera)
    ob_start();
?>

<section class="module-cover parallax fullscreen text-center">
    <div id="home">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="m-b-20"><strong>Un billet simple pour l'Alaska</strong></h2>
                    <p class="m-b-40">Un roman écrit par Jean Forteroche</p>
                </div>
            </div> 
        </div>
    </div>
</section>
<section>
    <div id="homeChapters">
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
                <div class="col-md-7 col-lg-8">
                    <?php foreach ($lastChapters as $ticket) { ?>
                        <article class="col-lg-6">
                            <div class="card mb-3">
                                <div class="headerChapter">
                                    <h2><?= $ticket['title'] ?></h2>
                                </div>
                                <div class="blog-thumb">                             
                                    <img src="https://i.ibb.co/HrtN39y/services1.jpg" alt="" />              
                                </div>
                                <div class="card-block">
                                    <div class="meta-info">
                                        Edité par <span class="author"><?= $ticket['users_firstname'] ?> <?= $ticket['users_lastname'] ?></span> le <span class="date"><?= date('d-m-Y', strtotime($ticket['created_at'])) ?></span>
                                    </div>
                                    <div class="blog-content home-blog">                       
                                        <?= substr($ticket['content'], 0, 300).' '.'. . .' ?>
                                    </div>
                                </div>
                                <div class="card-footer">
                                <?php if(isset($_SESSION['auth'])): ?>
                                    <div class="link-box home-blog-link">
                                        <a href="<?= CURRENT_PATH ?>chapters?action=showChapter&id= <?= $ticket['id'] ?>" class="btn btn-primary">Voir plus</a>
                                    </div>  
                                <?php else: ?>   
                                    <div class="link-box home-blog-link">
                                        <a href="<?= CURRENT_PATH ?>login?action=login" class="btn btn-primary">Voir plus</a>
                                    </div>      
                                <?php endif; ?>    
                                </div>
                            </div>                  
                        </article>
                    <?php } ?>
                </div>
                <aside class="col-md-5 col-lg-4">
                    <div class="card mb-3">
                        <h3 class="card-header mb-3">Rejoignez notre Newsletter</h3>
                        <form class="form-horizontal">
                            <div class="form-group">
                            <div class="col-sm-12">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                            </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary">Rejoignez Nous</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card mb-3">
                        <h3 class="card-header mb-3">A propos du roman</h3>
                        <div class="list-group  mb-3">
                            <div class="list-group-about-container">    
                                <p class="list-group-item-text"> 
                                    Des plaines verdoyantes, aux montagnes acérées ...<br>                
                                    À travers un format inédit et résolument moderne, je souhaite vous faire découvrir mon nouveau roman :
                                    <br><strong>« Un billet simple pour l'Alaska»</strong>    
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
                                <?php if(isset($_SESSION['auth'])): ?>
                                    <a href="<?= CURRENT_PATH ?>chapters?action=showChapter&id= <?= $ticket['id'] ?>" class="">
                                        <h4 class="list-group-item-heading"><?=  $ticket['title'] ?></h4>
                                        <?=  substr($ticket['content'], 0, 300).' '.'. . .' ?>
                                    </a>
                                <?php else: ?>   
                                    <a href="<?= CURRENT_PATH ?>login?action=login" class="">
                                        <h4 class="list-group-item-heading"><?=  $ticket['title'] ?></h4>
                                        <p class="list-group-item-text">
                                            <?=  substr($ticket['content'], 0, 300).' '.'. . .' ?>
                                        </p>
                                    </a>
                                <?php endif; ?> 
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
    </div>
</section>

<?php 
    // On recupere dans une variable le contenu du tampon 
    $content = ob_get_clean() ;

    // On intégre le template qui utilise la variable $content
    include 'template/template.php'; 
?>