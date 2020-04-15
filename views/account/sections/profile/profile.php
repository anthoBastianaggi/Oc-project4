<?php $title = "Jean Forteroche - Un billet simple pour l'alaska"; ?>

<?php
    // Buffering (nothing will be displayed)
    ob_start();
?>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg " color-on-scroll="500">
    <div class=" container-fluid  ">
        <a class="navbar-brand" href="#"> Profil : <?= $infoProfile['username'] ?></a>
    </div>
</nav>
<!-- End Navbar -->
<div class="contentProfile">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 block-user">
                <div class="card card-user">
                    <div class="card-image">
                        <img src="<?= $infoProfile['avatar'] ?>" alt="card-user-image">
                    </div>
                    <div class="card-body">
                        <div class="author">
                            <h5 class="title"><?=  $infoProfile['firstname'] ?> <?=  $infoProfile['lastname'] ?></h5>
                            <p class="username">@<?=  $infoProfile['username'] ?></p>
                            <p class="description text-center"><?=  $infoProfile['about'] ?></p>
                            <div class="address-container">
                                <i class="fa fa-map-marker"></i>
                                <p class="address"><?=  $infoProfile['address'] ?><br><?=  $infoProfile['postal_code'] ?> <?=  $infoProfile['city'] ?></p>
                            </div>
                        </div>
                        <div class="box">
                            <div class="box-container">
                                <i class="fa fa-calendar"></i><span class="box-text"><?=  $infoProfile['birthdate'] ?></span>
                            </div>
                            <div class="box-container">
                                <i class="fa fa-envelope-o"></i><span class="box-text"><?=  $infoProfile['email'] ?></span>
                            </div>
                            <div class="box-container">
                                <i class="fa fa-phone"></i><span class="box-text"><?=  $infoProfile['fix_number'] ?></span>                                     
                            </div>
                            <div class="box-container">
                                <i class="fa fa-mobile"></i><span class="box-text"><?= $infoProfile['phone_number'] ?></span>                                     
                            </div>
                        </div>
                        <div class="social-reseau">
                            <ul class="list-unstyled list-inline social text-center"> 
                                <li class="list-inline-item">
                                    <a href="https://www.facebook.com/" target="_blank">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li> 
                                <li class="list-inline-item">
                                    <a href="https://twitter.com/login?lang=fr" target="_blank">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li> 
                                <li class="list-inline-item">
                                    <a href="https://www.instagram.com/?hl=fr" target="_blank">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li> 
                                <li class="list-inline-item">
                                    <a href="https://www.snapchat.com/l/fr-fr/" target="_blank">
                                        <i class="fa fa-snapchat"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="https://fr.linkedin.com/" target="_blank">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li> 
                            </ul> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="col block-edit-profile">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Editer Profil</h4>
                    </div>
                    <div class="card-body">
                        <form action="<?= CURRENT_PATH ?>profile?action=profile" method="post" role="form">
                            <div class="row">
                                <div class="col-md-4 item-container">
                                    <div class="form-group">
                                        <label>Pseudo</label>
                                        <input type="text" class="form-control" name="username" placeholder="Username" value="<?= $infoProfile['username'] ?>">
                                    </div>
                                </div>
                                <div class="col-md-4 item-container">
                                    <div class="form-group">
                                        <label>Nom</label>
                                        <input type="text" class="form-control" name="lastname" placeholder="Company" value="<?= $infoProfile['lastname'] ?>">
                                    </div>
                                </div>
                                <div class="col-md-4 item-container">
                                    <div class="form-group">
                                        <label>Prénom</label>
                                        <input type="text" class="form-control" name="firstname" placeholder="Last Name" value="<?= $infoProfile['firstname'] ?>">
                                    </div>
                                </div> 
                            </div>
                            <div class="row">                             
                                <div class="col-md-4 item-container">
                                    <div class="form-group">
                                        <label for="exampleInputDate1">Date de Naissance</label>
                                        <input type="date" class="form-control" name="birthdate" placeholder="Birthdate" value="<?= $infoProfile['birthdate'] ?>">
                                    </div>
                                </div>
                                <div class="col-md-4 item-container">
                                    <div class="form-group">
                                        <label>Fixe</label>
                                        <input class="form-control" type="tel" name="fixnumber" placeholder="0495010203" pattern="[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}" value="<?= $infoProfile['fix_number'] ?>">
                                    </div>
                                </div>
                                <div class="col-md-4 item-container">
                                    <div class="form-group">
                                        <label>Mobile</label>
                                        <input class="form-control" type="tel" name="phonenumber" placeholder="0600010203" pattern="[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}" value="<?= $infoProfile['phone_number'] ?>">
                                    </div>
                                </div>
                            </div>                       
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Adresse</label>
                                        <input type="text" class="form-control" name="address" placeholder="Home Address" value="<?= $infoProfile['address'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 item-container">
                                    <div class="form-group">
                                        <label>Ville</label>
                                        <input type="text" class="form-control" name="city" placeholder="City" value="<?= $infoProfile['city'] ?>">
                                    </div>
                                </div>
                                <div class="col-md-4 item-container">
                                    <div class="form-group">
                                        <label>Pays</label>
                                        <input type="text" class="form-control" name="country" placeholder="Country" value="<?= $infoProfile['country'] ?>">
                                    </div>
                                </div>
                                <div class="col-md-4 item-container">
                                    <div class="form-group">
                                        <label>Code Postal</label>
                                        <input type="number" class="form-control" name="postalcode" placeholder="ZIP Code" value="<?= $infoProfile['postal_code'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>A propos de moi</label>
                                        <textarea rows="4" cols="80" maxlength="100" name="about" class="form-control" placeholder="Here can be your description"><?= $infoProfile['about'] ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 text-right" id="btn-profile">
                                <button type="submit" class="button button-a button-big" name="btnUpdateProfile">Modifier Profil</button>
                            </div>     
                        </form>
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
    include 'template/template-admin.php'; 
?>