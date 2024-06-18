<?php
/* Template Name: Page "Soutient */
$page_name = "Soutient";
get_header();
require 'partials/nav.php';
require 'partials/bg.php';
?>
<h1 class="main_title">
    Nous <b>soutenir</b>
</h1>

<section class="financial reveal">
    <h2 class="donation_title">
        <b>Dons fincanciers</b>
    </h2>
    <div class="financial__container">
        <div class="financial__container__text">
            <p>
                Vous voulez faire un don de type financier ? Rien de plus simple !
            </p>
            <p>
                Vous pouvez effectuer votre virement aux comptes suivant :
            </p>
            <ul>
                <li>
                    BNP BE43 2400 2934 2201
                </li>
                <li>
                    CCP BE34 0000 2750 8590
                </li>
            </ul>
        </div>
        <img src="../../../wp-content/themes/sef/resources/img/finDon.png"
             alt="Ilustration d'une main qui dépose de l'argent dans une tirelire en forme de coeur" width="600"
             height="424">
    </div>
</section>

<section class="stuff reveal">
    <h2 class="donation_title">
        <b>Dons matériels</b>
    </h2>
    <div class="stuff__container">
        <div class="stuff__container__text">
            <p>
                Si vous souhaitez faire un don matériel, vous pouvez vous rendre
                dans l’un de nos magasins suivants :
            </p>
            <ul>
                <li>
                    Le Bric à Brac - Rue du Marché, 35 - Huy
                </li>
                <li>
                    Le Dépôt-Meubles - Chaussée de Waremme, 18 - Huy
                </li>
                <li>
                    La Bouquinerie du P’tit Augustin - Rue des Augustins, 27 - Huy
                </li>
            </ul>
        </div>
        <img src="../../../wp-content/themes/sef/resources/img/matDon.png"
             alt="Illustration d'une caisse avec l'inscription donation dessus" width="612" height="383">
    </div>

</section>

<?php
get_footer();
?>
