<?php $title = "Jean Forteroche - Un billet simple pour l'alaska"; ?>

<?php
    // Buffering (nothing will be displayed)
    ob_start(); 
?>

<div class="section-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-5 textHeaderAddChapter">
                <div class="text-container">
                    <h2 class="section-title text-center text-uppercase">Modifier l'avatar du profil</h2>                   
                </div>
            </div>
            <div id="infobox-add-chapter" class="col-sm-12">
                <div class="box-shadow-full boxContainer">
                    <div class="row">   
                        <div class="col-md-12 col-md-offset-2">
                        <form class="form-horizontal" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="imageCard" id="imageCard">Choisir une image</label>
                                <input type="file" id="imageCard" name="imageAvatar" accept="image/png, image/jpeg">
                            </div>
                            <div class="col-md-12 text-center" id="btn-container">
                                <button type="submit" name="submit" value="Upload" class="button button-a">Modifier avatar</button>
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