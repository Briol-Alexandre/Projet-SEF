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
        "map" => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2536.8760916796264!2d5.241181076516773!3d50.517872282507!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c1a9782e36484f%3A0xbbd57e797b9fcc95!2sRue%20du%20March%C3%A9%2035%2C%204500%20Huy!5e0!3m2!1sfr!2sbe!4v1718620246604!5m2!1sfr!2sbe" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
        "hours" => [
            "Mardi : 14h à 17h",
            "Mercredi : 9h à 17h",
            "Jeudi : 9h à 12h",
            "Vendredi : 14h à 17h"
        ]
    ],
    [
        "name" => "Dépôt des meubles",
        "imageSrc" => "../../../wp-content/themes/sef/resources/img/depotmeuble.svg",
        "imageDesc" => "Image du magasin Dépôt de Meuble",
        "address" => "Chee de Waremme, 18 - 4500 Huy",
        "map" => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2536.3865710569203!2d5.226966876517226!3d50.52697968185066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c1a9a23689df11%3A0xf35159761082a135!2sChau.%20de%20Waremme%2018%2C%204500%20Huy!5e0!3m2!1sfr!2sbe!4v1718620498510!5m2!1sfr!2sbe" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
        "hours" => [
            "Mardi : 12h à 17h",
            "Mercredi : 12h à 17h",
            "Jeudi : 12h à 17h",
            "Vendredi : 12h à 17h",
            "1er Samedi du mois : 10h à 13h",
        ]
    ],
    [
        "name" => "BOUQUINERIE DU P’TIT AUGUSTIN",
        "imageSrc" => "../../../wp-content/themes/sef/resources/img/bouquinerie.svg",
        "imageDesc" => "Image du magasin Bouquinerie de p'tit Augustin",
        "address" => "Rue des Augustins, 27 - 4500 Huy",
        "map" => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2536.3865710569203!2d5.226966876517226!3d50.52697968185066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c1a99d68be5c2b%3A0x4b469944ef50eaa9!2sRue%20des%20Augustins%2027%2C%204500%20Huy!5e0!3m2!1sfr!2sbe!4v1718620552674!5m2!1sfr!2sbe" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
        "hours" => [
            "Mardi : 9h à 17h",
            "Mercredi : 9h à 17h",
            "Samedi : 10h à 16h",
        ]
    ],
];

$storeName = get_field('nom_du_magasin');
$storeImageSrc = get_field('image_du_magasin');
$storeImageDesc = get_field('description_de_limage');
$storeAddress = get_field('addresse_du_magasin');
$storeHours = get_field('horaire_douverture');
$plan = get_field('plan');
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
                <li class="reveal-side">
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
                        <div class="map__container">
                            <?= $store['map'] ?>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>
    <div class="map__container">

    </div>

<?php
get_footer();
?>