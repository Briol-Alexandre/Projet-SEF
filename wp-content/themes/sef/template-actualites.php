<?php
/* Template Name: Page "Actualités" */
$page_name = "Actualités";
get_header();
require 'partials/nav.php';
require 'partials/bg.php';
?>

    <h1 class="main_title">
        Nos <b>Actualités</b>
    </h1>
    <section class="acts__container">
        <h2 class="sr-only">
            Listes des nos actualités
        </h2>
        <ul>
            <li>
                <p class="act_name">
                    <b>Récolte de dons</b>
                </p>
                <div class="act__container">
                    <img src="../../../wp-content/themes/sef/resources/img/activities_img.svg"
                         alt="image montrant un homme portant une caisse">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusantium aperiam, blanditiis
                        debitis delectus doloremque eius facere harum, id inventore iure nesciunt obcaecati omnis
                        perspiciatis quas qui recusandae rerum sapiente.
                    </p>
                </div>
            </li>
        </ul>
    </section>

<?php
get_footer();
?>