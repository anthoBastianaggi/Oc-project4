<?php $title = "Jean Forteroche - Un billet simple pour l'alaska"; ?>

<?php
    // Buffering (nothing will be displayed)
    ob_start(); 
?>

<div class="section-content update-comments">
    <div class="container">
        <div class="row" id="comment_post">
            <div class="col-md-12 col-md-5 textHeaderComment">
                <div class="text-container">
                    <h2 class="section-title text-center text-uppercase">Modifier commentaire</h2>
                </div>
            </div>
            <div class="col-md-10">
                <form class="form-horizontal" action="<?= CURRENT_PATH ?>comments?action=updateComment&id=<?= $_GET['id'] ?>" method="post">
                    <div class="form-group">
                        <label for="exampleInputText3">Comment by Jean Forteroche</label>
                        <textarea id="idComment" cols="80" rows="4" name="contentComment" class="form-control"><?= $showComment['content'] ?></textarea> 
                        <div class="col-lg-12 text-center">
                            <button type="submit" id="btnUpdateComment" name="btnUpdateComment" class="button button-a">Modifier le commentaire</button>
                        </div>
                    </div>
                </form>
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