<?php $title = "Jean Forteroche - Un billet simple pour l'alaska"; ?>

<?php
    // Buffering (nothing will be displayed)
    ob_start(); 
?>
<div class="section-content show-chapters">
    <div class="container conttainer-show-chapters">
        <div class="row">
            <div class="col-md-12 col-md-5 textHeaderShowChapters">
                <div class="text-container">
                    <h2 class="section-title text-center text-uppercase"><?= $showChapter['title'] ?></h2>                    
                </div>
            </div>
            <div class="col-lg-8 col-md-7">
                <article class="col-lg-12">
                    <div class="card md-3">
                        <div class="blog-thumb">
                            <img src="https://i.ibb.co/HrtN39y/services1.jpg" alt="img-card-chapter" />
                            <div class="meta-info">
                                Edité par <span class="author"><?= $showChapter['users_firstname'] ?> <?= $showChapter['users_lastname'] ?></span> le <span class="date"><?= $dateFormatted ?></span>
                            </div>
                        </div>
                        <div class="card-block">
                            <div class="card-block-container">
                                <div class="headerChapter">
                                    <h3 class="card-header mb-3"><a href=""><?= $showChapter['title'] ?></a></h3>
                                </div>                             
                                <div class="blog-content home-blog">                       
                                    <?= $showChapter['content'] ?>
                                </div>
                                <div class="card-footer">
                                    <?php if($_SESSION['auth']->role_id === "1"): ?>
                                    <div class="btn-body-card">
                                        <div class="btn-card">
                                            <a href="<?= CURRENT_PATH ?>chapters?action=updateChapter&id=<?= $_GET['id'] ?>" class="btn btn-default stat-item">
                                            <i class="fa fa-pencil"></i>
                                            </a>
                                            <a href="<?= CURRENT_PATH ?>chapters?action=deleteChapter&id=<?= $_GET['id'] ?>" class="btn btn-default stat-item">
                                            <i class="fa fa-trash"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                </div>   
                            </div>                            
                        </div>
                        
                    </div>                  
                </article>
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
                                <button type="submit" class="btn btn-primary">Rejoignez nous</button>
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
                                <a href="<?= CURRENT_PATH ?>chapters?action=showChapter&id=<?= $ticket['id'] ?>">
                                    <h4 class="list-group-item-heading"><?=  $ticket['title'] ?></h4>
                                    <?=  substr($ticket['content'], 0, 300).' '.'. . .' ?>
                                </a>
                            </div>
                        <?php } ?>                
                    </div>
                </div>            
            </aside>
        </div>
    </div>
    <div class="container container-show-comment">
        <div class="row">        
            <div class="col-md-7 col-lg-8">
                <div class="col-lg-12 card-comment">
                    <div class="card-block">
                        <h3>Commentaires</h3>
                        <div class="card-block-container">
                            <?php if(empty($allComments)): ?>
                                <div class="post panel-shadow"> 
                                    <div class="post-description"> 
                                        <p>Aucun commentaire actuellement.</p>                          
                                    </div>
                                </div>  
                            <?php else: ?>
                            <?php foreach ($allComments as $comment) { ?> 
                                <div class="panel panel-white post panel-shadow">
                                    <div class="post-heading">
                                        <div class="pull-left image">
                                            <p class="comment-author">
                                            <?php if($comment['avatar'] === NULL): ?>
                                                <img src="http://bootdey.com/img/Content/user_1.jpg" class="img-circle avatar" alt="user profile image">
                                            <?php else: ?>
                                                <img src="<?= $comment['avatar'] ?>" class="img-circle avatar" alt="user profile image">
                                            <?php endif; ?>
                                                <span class="says">Commenté par</span>
                                                <span class="comment-author-name"><?= $comment['username'] ?></span>
                                            </p>    
                                            <h6 class="text-muted time">Le <?= date('d-m-Y', strtotime($comment['created'])) ?></h6>                          
                                        </div>
                                        <?php if($comment['validate'] === NULL): ?>
                                        <div class="dropdownOptions">
                                            <i class="fa fa-ellipsis-v"></i>
                                            <ul class="dropdownListOptions">
                                            <?php if($comment['username'] === $_SESSION['auth']->username): ?>
                                                <li class="dropdownItemOptions">
                                                    <a href="<?= CURRENT_PATH ?>comments?action=updateComment&id=<?= $comment['id'] ?>" class="btn btn-default stat-item">
                                                        <i class="fa fa-pencil"></i>
                                                        <span>Modifier</span>
                                                    </a>
                                                </li>
                                                <li class="dropdownItemOptions">
                                                    <a href="<?= CURRENT_PATH ?>comments?action=deleteComment&id=<?= $comment['id'] ?>" class="btn btn-default stat-item">
                                                        <i class="fa fa-trash"></i>
                                                        <span>Supprimer</span>
                                                    </a>
                                                </li>
                                                <?php elseif($comment['username'] !== $_SESSION['auth']->username && $_SESSION['auth']->role_id === "1"): ?>   
                                                <li class="dropdownItemOptions">
                                                    <a href="<?= CURRENT_PATH ?>comments?action=deleteComment&id=<?= $comment['id'] ?>" class="btn btn-default stat-item">
                                                        <i class="fa fa-trash"></i>
                                                        <span>Supprimer</span>
                                                    </a>
                                                </li>
                                                <?php else: ?> 
                                                <li class="dropdownItemOptions">
                                                    <a href="<?= CURRENT_PATH ?>comments?action=signaleComment&id=<?= $comment['id'] ?>" class="btn btn-default stat-item">
                                                        <i class="fa fa-flag"></i>
                                                        <span>Signaler</span>
                                                    </a>
                                                </li>
                                                <?php endif; ?> 
                                            </ul>
                                        </div>
                                        <?php endif; ?>
                                    </div> 
                                    <?php if($comment['validate'] === NULL): ?>
                                    <div class="post-description"> 
                                        <p style="white-space:pre-line"><?= $comment['content'] ?></p>                          
                                    </div>  
                                    <?php else: ?>
                                        <div class="post-description"> 
                                        <p style="color: red; white-space: pre-line">Ce commentaire à été signalé et ne peut être lu car le contenu est indésirable.</p>                          
                                    </div> 
                                    <?php endif; ?>
                                </div>   
                            <?php } ?>
                            <?php endif; ?>
                        </div>                                            
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container container-add-comment">
        <div class="row" id="comment_add">        
            <div class="col-md-7 col-lg-8">
                <div class="col-lg-12 card-comment">
                    <div class="card-block">
                        <h3>Laisser un commentaire</h3>
                        <div class="card-block-container">
                            <form class="form-horizontal" action="<?= CURRENT_PATH ?>comments?action=addComment&id=<?= $_GET['id'] ?>" method="post">
                                <div class="form-group ">
                                    <textarea id="commentChapter" name="commentChapter" class="form-control" placeholder="Entrez votre commentaire"></textarea> 
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12" id="btnAddComment">
                                        <button type="submit" name="btnAddComment" class="btn btn-primary">Envoyer commentaire</button>
                                    </div>
                                </div>
                            </form>
                        </div>                                            
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
    // We recover in a variable the content of the buffer
    $content = ob_get_clean() ;

    // We integrate the template which uses the variable $content
    include 'template/template.php'; 
?>