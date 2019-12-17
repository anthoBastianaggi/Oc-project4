<?php $title = "Jean Forteroche - Un billet simple pour l'alaska"; ?>

<?php
    // Mise en mémoire tampon (rien ne s'affichera)
    ob_start(); 
?>


<section class="about_me">
    <div class="aboutContainer col-md-7">
        <h2 class="section-title text-center text-uppercase col-md-11">Biographie de Jean Forteroche</h2>
        <div>
            <p class="section-subheading text-center col-md-11">Venez découvrir ma biographie</p>
        </div>

        <div class="row col-md-11">
            <p class="col-md-12">Bonjour je m'appelle Jean Forteroche et je suis né à Bordeaux le 10 Mai 1962. D'abords inspiré 
                par le théatre,j'ai suivi des cours à 12ans afin de devenir acteur. Encouragé par mon professeur, j'ai été 
                rapidement remarqué par une compagnie de théatre. 
                Mais à 14 ans, j'ai commencé à écrire, dans le cadre d'un travail scolaire, l'histoire d'un oisillons tombé du nid, 
                ce qui m'inspira une nouvelle voie. Dès l’âge de 15 ans, j'ai fait mes premières armes en écrivant des histoires 
                pour un fanzine, mais aussi tout au long de ma scolarité, je me suis consacré à la lecture ainsi qu’à l’écriture en 
                montant un journal pour mon lycée. Après mon bac, j'ai commencé l’écriture de Milwoo.
            </p>   
            <p class="col-md-12">Après mes études en psychologie social à Bordeaux. je me suis passionné pour les voyages. 
                J'ai commencé par voyager au Pérou, puis en Inde. Durant ces années il me vient le goût pour le récit d'aventure, 
                que je mêle avec mes thèmes favoris, des animaux à la mort jusqu’aux origines de l’humanité. 
                En février 1986, j'ai publié mon premier roman, Milwoo le chien errant. Avec 5 millions d’exemplaires vendus dans 
                le monde, je suis devenu l'un des auteurs français contemporains les plus lus en france.
            </p>
            <p class="col-md-12">En juin 1986, je suis parti voyager en Pologne afin d'écrire un second roman intitulé : Le Sorceleur. 
                Le Sorceleur (Wiedźmin), ne fut publiée en mars 1991 dans Fantastyka, le magazine de littérature fantastique polonais
                de référence, et reçut un énorme succès de la part des critiques. Sapkowski a créé un cycle de contes basé sur le
                monde du Sorceleur qui comprend trois collections d'histoires courtes et cinq romans. Ce cycle et ses nombreux autres
                livres ont fait de moi l'un des auteurs fantastiques les plus connus de la Pologne des années 1990.
            </p>
            <p class="col-md-12">Lors de mes nombreuses années passé en Pologne, j'ai eu l'occasion de gagner cinq fois le prix 
                Janusz A. Zajdel, trois fois pour les nouvelles Mniejsze zło (Moindre mal) (1992), Miecz przeznaczenia 
                (L'Épée du Destin) (1993), W leju po bombie (Dans un cratère de bombe) (1994), et deux fois pour les romans 
                Krew elfów (Le Sang des Elfes) (1996) et Narrenturm (2002). En 2009, j'ai pu gagner le tout premier prix David 
                Gemmell du meilleur roman de fantasy pour Krew elfów (Le Sang des Elfes).
            </p>
            <p class="col-md-12">En 1997, j'ai également remporté le prestigieux prix Paszport Polityki, remis annuellement aux artistes 
                ayant de fortes perspectives de succès international.
            </p>
            <p class="col-md-11">Les livres ont été traduits en Anglais, Hongrois, Tchèque, Russe, Lituanien, Allemand, 
                Espagnol, Français, Slovaque et Portugais.
            </p>
            <p class="col-md-10">En 2001, une série télévisée basée sur le cycle du Sorceleur est sortie en Pologne et à 
                l'international, intitulée Wiedźmin (The Hexer). Un film du même nom fut monté à partir de la série, mais l'un 
                comme l'autre ont été des échecs commerciaux.
            </p>
            <p class="col-md-10">En 2010, j'ai décidé de revenir en France afin de consacrer mon temps pour mon roman, Le fou de Lasco. 
                Il fut publier en fevrier 2012 et connu un énorme succès.
                Après celà, j'ai décidé de me rediriger vers ma voie initial et commença des petits rôles dans des séries TV notamment 
                dans "Encore eux ?" une série qui vise à montrer le côté hypocrite de notre société. J'ai fini par décrocher le rôle 
                principal dans "Fais moi danser" avec Sarah Bouranvier. Ce film rencontrera un franc succès auprès des téléspectateurs, 
                ou je serai à la suite de ça reconnu comme un acteur avéré.
                Depuis Peu je souhaite me remettre à l'écriture d'une manière plutôt différente, associant nouvelles technologies. 
                J'entreprend donc la création d'un blog dans lequel je rédigerai en plusieurs épisodes mon nouveau roman intitulé 
                "Un billet simple pour l'Alaska". 
            </p>
        </div> 
    </div>
</section>

<?php 
    // On recupere dans une variable le contenu du tampon 
    $content = ob_get_clean() ;

    // On intégre le template qui utilise la variable $content
    include 'Template/template.php'; 
?>