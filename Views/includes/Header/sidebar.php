<div class="btnSidebarOpen">
    <button id="menuBurgerOpen" class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars"></i>
    </button> 
</div>
<div class="sidebar">
    <div class="overlay"></div>
    <div class="sidebarOpen">
        <div class="sidebarMenu">
            <div class="sidebarContainer">
                <button id="menuBurgerClose">
                <i class="fa fa-times"></i>
                </button>
                <?php if(isset($_SESSION['auth'])): ?>
                    <div class="sidebarProfileContainer">
                        <div class="sidebarConnected">
                            <div class="sidebarUserInfo">
                                <div class="sidebarUserCardImg">
                                    <img src="http://bootdey.com/img/Content/user_1.jpg" alt="" />
                                </div>
                                <ul class="sidebarMenuUser">
                                    <li class="sidebarItemUser">
                                        <span class="username"><?= $_SESSION['auth']->firstname ?> <?= $_SESSION['auth']->lastname ?></span>
                                    </li>
                                    <li class="sidebarItemUser">
                                        <span class="address"><?= $_SESSION['auth']->email ?></span>
                                    </li>
                                </ul>
                            </div>
                            <div class="btnSidebarProfileContainer">
                                <button class="btnProfile" onclick="window.location.href='<?= CURRENT_PATH ?>profile?action=profile'">
                                    <i class="fa fa-user"></i>
                                    <span>Profil</span>
                                </button>
                                <div class="separator"></div>
                                <button class="btnSettings"  onclick="window.location.href='<?= CURRENT_PATH ?>settings?action=settings'" >
                                    <i class="fa fa-cog"></i>
                                    <span>Paramètres</span>
                                </button>
                            </div>
                            <div class="btnLogOutContainer">
                                <button class="btnLogOut" onclick="window.location.href='<?= CURRENT_PATH ?>logout?action=logout'">
                                    <i class="fa fa-sign-out"></i>
                                    <span>Déconnexion</span>
                                </button>
                            </div>          
                        </div>
                    </div>
                <?php else: ?>
                    <div class="sidebarLoginContainer">
                        <div class="sidebarNotConnected">
                            <form class="form-horizontal" method="POST">  
                                <div class="form-group">
                                    <div class="inputGroupContainer">
                                        <label class="label-login">Nom d'utilisateur</label>
                                        <div class="input-group">      
                                            <input type="text" name="username" maxlength="25" class="form-control" placeholder="Entrez votre nom d'utilisateur"/>                                                                                                               
                                        </div>
                                    </div>
                                </div>   
                                <div class="form-group">
                                    <div class="inputGroupContainer">
                                        <label class="label-login">Mot de passe</label>
                                        <div class="input-group">        
                                            <input type="password" name="password" minlength="8" maxlength="32" class="form-control" placeholder="Entrez votre mot de passe" />                                                                    
                                        </div>
                                    </div>
                                </div>   
                            </form>
                                
                        </div>
                        <div class="btnLoginContainer">
                            <button class="btnLogin">
                                <i class="fa fa-sign-in"></i>
                                <span>Connexion</span>
                            </button>
                        </div>  
                        <div class="btnRegisterContainer">
                            <a class="nav-link" href="<?= CURRENT_PATH ?>register?action=register"><span>S'inscrire</span></a>
                        </div>   
                    </div>
                <?php endif; ?>
                <div class="sidebarContent">
                    <div class="sidebarContentContainer">
                        <div class="sidebarMenuContainer">
                            <div class="btnDropdownMenu">
                                <button id="dropdownMenuSidebar" onclick='displayMenuSidebar(); return false'>
                                    <span>Menu</span>
                                    <i class="fa fa-chevron-down" id="iconChevron"></i>
                                </button>
                            </div>
                            <ul id="sidebarDropdownMenu">
                                <li class="menuItem">
                                    <a href="<?= CURRENT_PATH ?>home" class="menuLink">
                                        <i class="fa fa-home"></i>
                                        <span class="name">Accueil</span>
                                    </a>
                                </li>
                                <li class="menuItem">
                                    <a href="<?= CURRENT_PATH ?>about?action=about" class="menuLink">
                                        <i class="fa fa-user"></i>
                                        <span class="name">A propos de l'auteur</span>
                                    </a>
                                </li>
                                <li class="menuItem">
                                    <a href="<?= CURRENT_PATH ?>chapters?action=chapters" class="menuLink">
                                        <i class="fa fa-book"></i>
                                        <span class="name">Chapitres</span>
                                    </a>
                                </li>
                                <li class="menuItem">
                                    <a href="<?= CURRENT_PATH ?>contact?action=contact" class="menuLink">
                                        <i class="fa fa-address-book"></i>
                                        <span class="name">Contact</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>