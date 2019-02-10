 <!-- Navigation -->
 <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
    <div class="navContainer">
        <a class="navbar-brand js-scroll-trigger" href="#">
            <img class='icone_book' src="../projet4/Public/images/livre.png">
            <span class="name_title">Jean Forteroche</span><br />
            <span class="content_title">Un billet simple pour l'alaska</span>
        </a>
        <button id="btn-menu" class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul id="navbarDeroulant" class="navbar-nav ml-auto">
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?= CURRENT_PATH ?>home">Accueil</a>
                </li>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?= CURRENT_PATH ?>about?action=about">A propos de l'auteur</a>
                </li>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?= CURRENT_PATH ?>chapters?action=chapters">Les chapitres</a>
                </li>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?= CURRENT_PATH ?>contact?action=contact">Contact</a>
                </li>
                <?php if(isset($_SESSION['auth'])): ?>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?= CURRENT_PATH ?>logout?action=logout">Se déconnecter</a>
                </li>
                <?php else: ?>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?= CURRENT_PATH ?>register?action=register">S'inscrire</a>
                </li>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?= CURRENT_PATH ?>login?action=login">Se connecter</a>
                </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>