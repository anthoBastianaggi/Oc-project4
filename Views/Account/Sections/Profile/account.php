<?php $title = "Jean Forteroche - Un billet simple pour l'alaska"; ?>

<?php
    // Mise en mémoire tampon (rien ne s'affichera)
    ob_start();
?>

<section class="profile">
    <div class="wrapper">
        <div class="sidebar" data-image="../assets/img/sidebar-5.jpg">
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a class="nav-link" href="<?= CURRENT_PATH ?>account?action=account">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= CURRENT_PATH ?>profile?action=profile">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?= CURRENT_PATH ?>params?action=params">
                            <i class="nc-icon nc-notes"></i>
                            <p>Params</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?= CURRENT_PATH ?>tableList?action=tableList">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>Table List</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class=" container-fluid  ">
                    <a class="navbar-brand" href="#"> Profile : <?= $_SESSION['auth']->username ?></a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="navbar-nav ml-auto">
                            <li class="dropdown nav-item">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-planet"></i>
                                    <span class="notification">5</span>
                                    <span class="d-lg-none">Notification</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Notification 1</a>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4 col-xl-3 block-user">
                            <div class="card card-user">
                                <div class="card-image">
                                    <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="...">
                                </div>
                                <div class="card-body">
                                    <div class="author">
                                        <h5 class="title"><?= $_SESSION['auth']->firstname ?> <?= $_SESSION['auth']->lastname ?></h5>
                                        <p class="username">@<?= $_SESSION['auth']->username ?></p>
                                        <p class="description text-center">Formation Développeur Web Junior chez OpenClassrooms </br> Développeur Front-end chez Qwant Music</p>
                                        <div class="address-container">
                                            <i class="fa fa-map-marker"></i>
                                            <p class="address">Route d'Afa, Lieu-dit U Vangoni</br> 20167 Appietto</p>
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
                                            <i class="fa fa-phone"></i><span class="box-text">04.95.22.96.07</span>                                     
                                        </div>
                                        <div class="box-container">
                                            <i class="fa fa-mobile"></i><span class="box-text">06.32.62.99.06</span>                                     
                                        </div>
                                    </div>
                                    <div class="social-reseau">
                                        <ul class="list-unstyled list-inline social text-center"> 
                                            <li class="list-inline-item">
                                                <a href="javascript:void();">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li> 
                                            <li class="list-inline-item">
                                                <a href="javascript:void();">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li> 
                                            <li class="list-inline-item">
                                                <a href="javascript:void();">
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                            </li> 
                                            <li class="list-inline-item">
                                                <a href="javascript:void();">
                                                    <i class="fa fa-snapchat"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="javascript:void();" target="_blank">
                                                    <i class="fa fa-linkedin"></i>
                                                </a>
                                            </li> 
                                        </ul> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-xl-9 block-edit">
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
                                                    <input class="form-control" type="tel" placeholder="04.95.01.02.03" pattern="[0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}" value="04.95.22.96.07">
                                                </div>
                                            </div>
                                            <div class="col-md-4 item-container">
                                                <div class="form-group">
                                                    <label>Phone</label>
                                                    <input class="form-control" type="tel" placeholder="06.00.01.02.03" pattern="[0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}" value="06.32.62.99.06">
                                                </div>
                                            </div>
                                        </div>                       
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Address</label>
                                                    <input type="text" class="form-control" placeholder="Home Address" value="Route d'Afa, Lieu-dit U Vangoni">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 item-container">
                                                <div class="form-group">
                                                    <label>City</label>
                                                    <input type="text" class="form-control" placeholder="City" value="Appietto">
                                                </div>
                                            </div>
                                            <div class="col-md-4 item-container">
                                                <div class="form-group">
                                                    <label>Country</label>
                                                    <input type="text" class="form-control" placeholder="Country" value="France">
                                                </div>
                                            </div>
                                            <div class="col-md-4 item-container">
                                                <div class="form-group">
                                                    <label>Postal Code</label>
                                                    <input type="number" class="form-control" placeholder="ZIP Code" value="20167">
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
    </div>
</section>

<?php 
    // On recupere dans une variable le contenu du tampon 
    $content = ob_get_clean() ;

    // On intégre le template qui utilise la variable $content
    include 'Template/template.php'; 
?>