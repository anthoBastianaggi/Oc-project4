<?php $title = "Jean Forteroche - Un billet simple pour l'alaska"; ?>

<?php
    // Mise en mémoire tampon (rien ne s'affichera)
    ob_start(); 
?>

<section id="contact" class="content-section text-left">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-5">
                <div class="text-container">
                    <h2 class="section-title text-center text-uppercase">Contactez-moi</h2>
                    <div>
                        <p class="section-subheading text-muted">N'hésitez pas à me contacter.</p>
                    </div>
                </div>
            </div>
            <div  id="infobox-contact" class="col-md-12 col-md-5">
                <div class="box-shadow-full">
                    <div class="row">
                        <div class="col-md-12 col-md-offset-2">
                            <form class="form-horizontal" action="" method="post">
                                <div class="form-group">
                                    <label class="label-contact" for="">Prénom</label>
                                    <input type="text" name="firstname" class="form-control" id="exampleInputName2" placeholder="Entrez votre prénom">
                                </div>
                                <div class="form-group">
                                    <label class="label-contact" for="">Nom</label>
                                    <input type="text" name="lastname" class="form-control" id="exampleInputName2" placeholder="Entrez votre nom">
                                </div>
                                <div class="form-group">
                                    <label class="label-contact" for="">Email</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail2" placeholder="Entrez votre email">
                                </div>
                                <div class="form-group">
                                    <label class="label-contact" for="">Objet du message</label>
                                    <input type="text" name="object_message" class="form-control" id="exampleInputText2" placeholder="Entrez votre objet du message">
                                </div>
                                <div class="form-group ">
                                    <label class="label-contact" for="">Votre message</label>
                                    <textarea name="message" class="form-control" placeholder="Description"></textarea> 
                                </div>
                                <button type="submit" name="btnContact" id="btn-contact" class="btn btn-default">Envoyé message</button>
                            </form>
                        </div>
                    </div>
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
