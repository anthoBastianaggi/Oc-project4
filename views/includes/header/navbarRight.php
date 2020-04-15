<div class="navbar-collapse navbarRight">
    <ul class="navbarRightNavigation">
        <?php if(isset($_SESSION['auth'])): ?>
        <li class="nav-item mx-0 mx-lg-1 dropdown">
            <a href="#" class="nav-link dropdown-toggle" id="dropdownToggle" data-toggle="dropdown"  role="button" aria-haspopup="true" aria-expanded="false"><?= $_SESSION['auth']->username ?><span class="caret"></span></a>
            <div id="myDropdown" class="dropdownMenu">
                <ul class="dropdown-menu-list">
                    <li class="dropdown-menu-item">
                        <a href="<?= CURRENT_PATH ?>profile?action=profile">Mon compte</a>
                    </li>
                    <li class="dropdown-menu-item">
                        <a href="<?= CURRENT_PATH ?>logout?action=logout">Se déconnecter</a>
                    </li>
                </ul>  
            </div>
        </li>
        <?php else: ?>
        <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link" href="<?= CURRENT_PATH ?>register?action=register">S'inscrire</a>
        </li>
        <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link" href="<?= CURRENT_PATH ?>login?action=login">Se connecter</a>
        </li>
        <?php endif; ?>
    </ul>
</div>