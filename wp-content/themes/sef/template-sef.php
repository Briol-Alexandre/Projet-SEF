<?php
/* Template Name: Page "SEF" */
$page_name = "SEF";
get_header();
require 'partials/nav.php';
require 'partials/bg.php';

$images = '../../../wp-content/themes/sef/resources/img/';
?>
    <h1 class="main_title">
        <b>Service d'Entraide Familiale</b>
    </h1>
    <section class="sef__container reveal">
        <h2>Qui sommes-nous ?</h2>
        <div class="info" itemscope itemtype="https://schema.org/Organization">
            <img src="../../../wp-content/themes/sef/resources/img/pire.png" alt="Image du père Dominique Pire">
            <p>
                Le <abbr title="Service d'entraide Familial" itemprop="legalName">SEF</abbr>, fondé en <em
                        itemprop="foundingDate">1938</em> par le <em itemprop="founder">Père Dominique Pire</em>,
                prône l’ouverture au-delà des différences sociales,
                religieuses et politiques, ainsi qu’un échange éducatif entre aidants et aidés. Officiellement établi en
                1940, il se concentre d’abord sur l’aide familiale avant de se tourner, en 1981, vers l’accueil des
                sans-abri, ouvrant une maison pour huit personnes. En 1992, une deuxième maison est créée, suivie de
                trois
                logements supervisés en 2001. Le SEF répond aux urgences matérielles des sans-abri tout en les aidant à
                reconstruire leur projet de vie. Situé au centre-ville, le SEF est connu pour son action visible et
                parfois
                controversée, visant à réduire le fossé entre les mondes différents.
            </p>
        </div>
    </section>

    <section class="actions reveal">
        <h2>
            Nos Actions
        </h2>
        <b>
            L’insertion ou la réinsertion sociale d’adultes et de familles en difficulté
        </b>
        <p>
            Le temps passé au SEF doit être mis à profit par chacun pour régler ses questions administratives, repenser
            sa façon
            de vivre avec les autres et préparer son départ. Afin, si possible, de ne pas revenir…
        </p>
        <b>
            Suivi Post-visite
        </b>
        <p>
            Lorsque qu’une personne sort du SEF, elle est toujours suivie après pour être sûr que son parcours reste
            stable et pour
            éviter un retour dans nos logements.
        </p>
    </section>

    <section class="projects reveal">
        <h2>
            Nos Projets
        </h2>
        <ul>
            <li>
                - Achat d'une maison&nbsp;;
            </li>
            <li>
                - Rénovation et agrandissement des 2 maisons en rachetant du terrain autour&nbsp;;
            </li>
            <li>
                - Construction d’une mezzanine au dépôt pour plus d’espace de stockage&nbsp;;
            </li>
            <li>
                - Déplacement de la bouquinerie.
            </li>

        </ul>
    </section>

    <section class="container reveal">
        <h2>
            Gallerie
        </h2>
        <div class="slider-wrapper">
            <div class="slider">
                <img id="slide-1"
                     src="https://image.jimcdn.com/app/cms/image/transf/none/path/s1ea9ecf7c1ba2502/image/i9a9f4386f89592eb/version/1372887304/image.jpg"
                     alt="">
                <img id="slide-2"
                     src="https://image.jimcdn.com/app/cms/image/transf/none/path/s1ea9ecf7c1ba2502/image/ia6dd7bf6adc8462e/version/1372887343/image.jpg"
                     alt="">
                <img id="slide-3"
                     src="https://image.jimcdn.com/app/cms/image/transf/none/path/s1ea9ecf7c1ba2502/image/i03d2580c4bb222a4/version/1279544078/image.jpg"
                     alt="">
                <img id="slide-4"
                     src="https://image.jimcdn.com/app/cms/image/transf/dimension=660x1024:format=jpg/path/s1ea9ecf7c1ba2502/image/ibe6fd67b5db684cc/version/1279566243/image.jpg"
                     alt="">
            </div>
            <div class="slider-nav">
                <a href="#slide-1"></a>
                <a href="#slide-2"></a>
                <a href="#slide-3"></a>
                <a href="#slide-4"></a>
            </div>
        </div>
    </section>


    <section class="temoignages reveal">
        <h2>
            Témoinages
        </h2>
        <ul>
            <li class="post">
                <img src="../../../wp-content/themes/sef/resources/img/user.png" alt="Image de profile"
                     class="user_photo"
                     width="512" height="512">
                <div>
                    <b>Payous</b>
                    <p>
                        Bon bon tous ça,
                        Et bonne continuation pour la suite :)
                        Un staff génial
                    </p>
                </div>
            </li>
        </ul>
    </section>

<?php
get_footer();
?>