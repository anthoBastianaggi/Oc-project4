<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img class='icone_book' src="../projet4/Public/images/livre.png"><span class="prenom_title">Jean Forteroche</span> Un billet simple pour l'alaska</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= CURRENT_PATH ?>home">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= CURRENT_PATH ?>biographie?action=biographie">A propos de l'auteur</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= CURRENT_PATH ?>chapters?action=chapters">Les chapitres</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= CURRENT_PATH ?>contact?action=contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= CURRENT_PATH ?>register?action=register">S'inscrire</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= CURRENT_PATH ?>login?action=login">Se connecter</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
