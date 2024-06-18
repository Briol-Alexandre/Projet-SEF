<?php
/* Template Name: Page "Actualités" */
$page_name = "Actualités";
get_header();
require 'partials/nav.php';
require 'partials/bg.php';

$act_title = get_field('act_title');
$act_img = get_field('act_img');
$act_desc = get_field('act_desc');
?>

    <h1 class="main_title">
        Nos <b>Actualités</b>
    </h1>
    <section class="acts__container">
        <h2 class="sr-only">
            Listes des nos actualités
        </h2>
        <ul>
            <li class="reveal-side">
                <p class="act_name">
                    <b><?= $act_title ?></b>
                </p>
                <div class="act__container">
                    <img src="<?= $act_img['url'] ?>"
                         alt="<?= $act_img['alt'] ?>">
                    <p>
                        <?= $act_desc ?>
                    </p>
                </div>
            </li>
        </ul>
    </section>

<?php
get_footer();
?>