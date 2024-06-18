<?php
$page_name = 'Accueil';
get_header();
require('partials/nav.php');
require('partials/bg.php');

/* ACF var*/

$page_title = get_field('titre_page');

$act_title = get_field('act_title');
$act_img = get_field('act_img');
$act_desc = get_field('act_desc');
?>


    <h1 class="sr-only">Page d'accueil</h1>
    <section class="home_title reveal">
        <h2 class="sr-only">
            Bienvenue
        </h2>
        <p class="main_title">
            Le moindre geste peut avoir son <b>importance</b>
        </p>

        <a href="/soutenir" title="Aller à la page de soutient" hreflang="fr" class="link-to-other-pages reveal">
            Soutenir
        </a>
    </section>

    <section class="recent_activities reveal">
        <h2 class="main_title">
            Activités récentes
        </h2>
        <ul class="home_act_list">
            <li class="act_item">
                <img src="../../../wp-content/themes/sef/resources/img/activities_img.svg" alt="Image test" width="662"
                     height="485">
                <p>Récolte dons</p>
            </li>
            <li class="act_item">
                <img src="../../../wp-content/themes/sef/resources/img/activities_img.svg" alt="Image test" width="662"
                     height="485">
                <p>Récolte dons</p>
            </li>
            <li class="act_item">
                <img src="../../../wp-content/themes/sef/resources/img/activities_img.svg" alt="Image test" width="662"
                     height="485">
                <p>Récolte dons</p>
            </li>
        </ul>
            <a href="/news" title="Aller a la page contenant toutes les activités" class="link-to-activities">
                Voir toutes les activités
            </a>
    </section>

<?php get_footer(); ?>