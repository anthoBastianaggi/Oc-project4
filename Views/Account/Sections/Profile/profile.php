<?php $title = "Jean Forteroche - Un billet simple pour l'alaska"; ?>

<?php
    // Mise en mémoire tampon (rien ne s'affichera)
    ob_start();
?>

<section class="profile">
    <div class="wrapper">
        <?php include_once 'Views/Account/Sections/includes/menuDashboard.php' ?>
    </div>
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg " color-on-scroll="500">
            <div class=" container-fluid  ">
                <a class="navbar-brand" href="#"> Profile : <?= $_SESSION['auth']->username ?></a>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 block-user">
                        <div class="card card-user">
                            <div class="card-image">
                                <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="...">
                            </div>
                            <div class="card-body">
                                <div class="author">
                                    <h5 class="title"><?= $_SESSION['auth']->firstname ?> <?= $_SESSION['auth']->lastname ?></h5>
                                    <p class="username">@<?= $_SESSION['auth']->username ?></p>
                                    <p class="description text-center">Formation Développeur Web Junior chez OpenClassrooms <br> Développeur Front-end chez Qwant Music</p>
                                    <div class="address-container">
                                        <i class="fa fa-map-marker"></i>
                                        <p class="address"><?= $_SESSION['auth']->address ?><br><?= $_SESSION['auth']->postal_code ?> <?= $_SESSION['auth']->city ?></p>
                                    </div>
                                </div>
                                <div class="box">
                                    <div class="box-container">
                                        <i class="fa fa-calendar"></i><span class="box-text"><?= $_SESSION['auth']->birthdate ?></span>
                                    </div>
                                    <div class="box-container">
                                        <i class="fa fa-envelope-o"></i><span class="box-text"><?= $_SESSION['auth']->email ?></span>
                                    </div>
                                    <div class="box-container">
                                        <i class="fa fa-phone"></i><span class="box-text"><?= $_SESSION['auth']->fix_number ?></span>                                     
                                    </div>
                                    <div class="box-container">
                                        <i class="fa fa-mobile"></i><span class="box-text"><?= $_SESSION['auth']->phone_number ?></span>                                     
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
                    <div class="col block-edit">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Edit Profile</h4>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-4 item-container">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" class="form-control" placeholder="Username" value="<?= $_SESSION['auth']->username ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4 item-container">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" class="form-control" placeholder="Company" value="<?= $_SESSION['auth']->firstname ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4 item-container">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" class="form-control" placeholder="Last Name" value="<?= $_SESSION['auth']->lastname ?>">
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="row">                             
                                        <div class="col-md-4 item-container">
                                            <div class="form-group">
                                                <label for="exampleInputDate1">Birthdate</label>
                                                <input type="date" class="form-control" placeholder="Birthdate" value="<?= $_SESSION['auth']->birthdate ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4 item-container">
                                            <div class="form-group">
                                                <label>Fix number</label>
                                                <input class="form-control" type="tel" placeholder="04.95.01.02.03" pattern="[0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}" value="<?= $_SESSION['auth']->fix_number ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4 item-container">
                                            <div class="form-group">
                                                <label>Phone</label>
                                                <input class="form-control" type="tel" placeholder="06.00.01.02.03" pattern="[0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}" value="<?= $_SESSION['auth']->phone_number ?>">
                                            </div>
                                        </div>
                                    </div>                       
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" class="form-control" placeholder="Home Address" value="<?= $_SESSION['auth']->address ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 item-container">
                                            <div class="form-group">
                                                <label>City</label>
                                                <input type="text" class="form-control" placeholder="City" value="<?= $_SESSION['auth']->city ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4 item-container">
                                            <div class="form-group">
                                                <label>Country</label>
                                                <input type="text" class="form-control" placeholder="Country" value="<?= $_SESSION['auth']->country ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4 item-container">
                                            <div class="form-group">
                                                <label>Postal Code</label>
                                                <input type="number" class="form-control" placeholder="ZIP Code" value="<?= $_SESSION['auth']->postal_code ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>About Me</label>
                                                <textarea rows="4" cols="80" maxlength="100" class="form-control" placeholder="Here can be your description">Formation Développeur Web Junior chez OpenClassrooms, Développeur Front-end chez Qwant Music</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-right" id="btn-profile">
                                        <button type="submit" class="button button-a button-big">Update Profile</button>
                                    </div>     
                                </form>
                            </div>
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