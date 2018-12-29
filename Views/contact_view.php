<?php $title = "Jean Forteroche - Un billet simple pour l'alaska"; ?>

<?php
    // Mise en mémoire tampon (rien ne s'affichera)
    ob_start(); 
?>

<section id="contact" class="content-section text-center">
    <div class="section-content">
        <div class="conainer">
            <h1 class="section-header"><span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s">Contactez-moi</span></h1>
            <h3>N'hésitez pas à me contacter.</h3>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <form class="form-horizontal" action="" method="post">
                    <div class="form-group">
                        <label for="exampleInputName2">Prénom</label>
                        <input type="text" name="firstname" class="form-control" id="exampleInputName2" placeholder="Entrez votre prénom">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName3">Nom</label>
                        <input type="text" name="lastname" class="form-control" id="exampleInputName2" placeholder="Entrez votre nom">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail2">Email</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail2" placeholder="Entrez votre email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputText2">Objet du message</label>
                        <input type="text" name="object_message" class="form-control" id="exampleInputText2" placeholder="Entrez votre objet du message">
                    </div>
                    <div class="form-group ">
                        <label for="exampleInputText3">Votre message</label>
                        <textarea name="message" class="form-control" placeholder="Description"></textarea> 
                    </div>
                    <button type="submit" name="btnContact" class="btn btn-default">Envoyé message</button>
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
