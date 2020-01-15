<div class="navbar-collapse navbarRight">
    <ul class="navbarRightNavigation">
        <?php if(isset($_SESSION['auth'])): ?>
        <li class="nav-item mx-0 mx-lg-1 dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"  role="button" aria-haspopup="true" aria-expanded="false" onclick='display("myDropdown"); return false'><?= $_SESSION['auth']->username ?><span class="caret"></span></a>
            <div id="myDropdown" class="dropdown-menu">
                <ul>
                    <li>
                        <a href="<?= CURRENT_PATH ?>account?action=account">Mon compte</a>
                    </li>
                    <li>
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