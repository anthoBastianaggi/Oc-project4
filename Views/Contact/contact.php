<?php $title = "Jean Forteroche - Un billet simple pour l'alaska"; ?>

<?php
    // Mise en mémoire tampon (rien ne s'affichera)
    ob_start(); 
?>

<!--/ Section Contact-Footer Star /-->
<section class="paralax-mf route" id="sectionContact">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-5 textHeaderContact">
                <div class="text-container">
                    <h2 class="section-title text-center text-uppercase">Contactez-moi</h2>
                    <div>
                        <p class="section-subheading text-muted">N'hésitez pas à me contacter.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="contact-mf">
                    <div id="contact" class="box-shadow-full">
                        <div class="row">
                            <div class="col-md-6 block-info">
                                <div class="title-box-2">
                                    <h5 class="title-left">
                                        Entrez en contact
                                    </h5>
                                </div>
                                <div class="more-info">
                                    <h3 class="card-title">Informations</h3>
                                    <p class="lead">
                                        Vous pouvez utiliser les informations suivantes ou le formulaire de contact ci-dessous pour me contacter.
                                    </p>
                                    <h3 class="card-title">Contact Moi</h3>
                                    <ul class="list-ico">
                                        <li class="list-info-contact"><span class="fa fa-map-marker"></span> 14, Place de la Madeleine 75009 PARIS</li>
                                        <li class="list-info-contact"><span class="fa fa-phone"></span> 01.26.73.50.74</li>
                                        <li class="list-info-contact"><span class="fa fa-envelope"></span> j.forteroche@gmail.com</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 block-form">
                                <div class="title-box-2 block-form-title">
                                    <h5 class="title-left">
                                        Envoyez-moi un message
                                    </h5>
                                </div>
                                <div>
                                    <form action="" method="post" role="form" class="contactForm">
                                        <div id="sendmessage">Your message has been sent. Thank you!</div>
                                        <div id="errormessage"></div>
                                        <div class="row">
                                        <?php if(isset($_SESSION['auth'])): ?>
                                            <div class="col-md-12 mb-3">
                                                <div class="form-group">
                                                    <div class="inputGroupContainer">
                                                        <div class="input-group">
                                                            <span class="icon-case"><i class="fa fa-user"></i></span>                                                          
                                                            <input type="text" name="username" maxlength="25" class="form-control" placeholder="Entrez votre pseudo" />
                                                            <div class="validation"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php else: ?>
                                            <div class="col-md-12 mb-3">
                                                <div class="form-group">
                                                    <div class="inputGroupContainer">
                                                        <div class="input-group">
                                                            <span class="icon-case"><i class="fa fa-male"></i></span>
                                                            <input type="text" name="name" class="form-control" id="name" placeholder="Entrez votre prénom" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                                            <div class="validation"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <div class="form-group">
                                                    <div class="inputGroupContainer">
                                                        <div class="input-group">
                                                            <span class="icon-case"><i class="fa fa-user"></i></span>
                                                            <input type="text" name="name-family" class="form-control" id="name-family" placeholder="Entrez votre nom de famille" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                                            <div class="validation"></div>
                                                        </div>
                                                    </div>
                                                </div>              
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <div class="form-group">
                                                    <div class="inputGroupContainer">
                                                        <div class="input-group">
                                                            <span class="icon-case"><i class="fa fa-envelope-o"></i></span>
                                                            <input type="email" class="form-control" name="email" id="email" placeholder="Entrez votre adresse email" data-rule="email" data-msg="Please enter a valid email" />
                                                            <div class="validation"></div>
                                                        </div>
                                                    </div>
                                                </div>      
                                            </div>
                                            <?php endif; ?>
                                            <div class="col-md-12 mb-3">
                                                <div class="form-group">
                                                    <div class="inputGroupContainer">
                                                        <div class="input-group">
                                                            <span class="icon-case"><i class="fa fa-comment-o"></i></span>
                                                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Objet du message" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                                            <div class="validation"></div>
                                                        </div>
                                                    </div>
                                                </div>   
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <div class="form-group">
                                                    <div class="inputGroupContainer">
                                                        <div class="input-group">
                                                            <span class="icon-case icon-case-textarea"><i class="fa fa-pencil"></i></span>
                                                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Tapez votre message"></textarea>
                                                            <div class="validation"></div>
                                                        </div>
                                                    </div>
                                                </div>   
                                            </div>
                                            <div class="col-md-12" id="btn-contact">
                                                <button type="submit" name="btn-contact" class="button button-a button-big">Envoyez message<span class="icon-send"><i class="fa fa-paper-plane"></i></span></button>
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
    </div>
</section>
<!--/ Section Contact-footer End /-->

<?php 
    // On recupere dans une variable le contenu du tampon 
    $content = ob_get_clean() ;

    // On intégre le template qui utilise la variable $content
    include 'Template/template.php'; 
?>
