<?php
/* Template Name: Page "Magasins" */
$page_name = "Magasins";
get_header();
require 'partials/nav.php';
require 'partials/bg.php';

$stores = [
    [
        "name" => "bric à brac",
        "imageSrc" => "../../../wp-content/themes/sef/resources/img/bricabrac.svg",
        "imageDesc" => "Image du magasin Bric à Brac",
        "address" => "Rue du Marché, 35 - 4500 Huy",
        "hours" => [
            "Mardi : 14h à 17h",
            "Mercredi : 9h à 17h",
            "Jeudi : 9h à 12h",
            "Vendredi : 14h à 17h"
        ]
    ],
];

$storeName = get_field('nom_du_magasin');
$storeImageSrc = get_field('image_du_magasin');
$storeImageDesc = get_field('description_de_limage');
$storeAddress = get_field('addresse_du_magasin');
$storeHours = get_field('horaire_douverture');
?>

    <h1 class="main_title">
        Nos <b>Magasins</b>
    </h1>
    <section class="stores__container">
        <h2 class="sr-only">
            Listes des magasins
        </h2>
        <ul>
            <?php foreach ($stores as $store) : ?>
                <li>
                    <p class="store_name">
                        <b><?= $store['name'] ?></b>
                    </p>
                    <div class="store__container">
                        <img src="<?= $store['imageSrc'] ?>"
                             alt="<?= $store['imageDesc'] ?>">
                        <div class="info__container">
                            <p>
                                <b>Où</b>
                                <?= $store['address'] ?>
                            </p>
                            <p>
                                <b>Horaire</b>
                                <?php foreach ($store['hours'] as $hour) : ?>
                                    <i><?= $hour ?></i>
                                <?php endforeach; ?>
                            </p>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>


<?php
get_footer();
?>