<?php
/* Template Name: Page "Contact" */
$page_name = "Contact";
get_header();
require 'partials/nav.php';
require 'partials/bg.php';
?>

    <h1 class="main_title">
        Nous <b>Contacter</b>
    </h1>
    <section class="form_container">
        <h2 class="sr-only">Formulaire de contact</h2>
        <form method="post" action="/contact" class="form">
            <div class="form__element name">
                <div>
                    <label for="name">Nom</label>
                    <input type="text" id="name" name="name" placeholder="Votre nom" required>
                </div>
                <div>
                    <label for="first-name">Prénom</label>
                    <input type="text" id="first-name" name="first-name" placeholder="Votre prénom" required>
                </div>
            </div>

            <div class="form__element email">
                <div>
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" placeholder="Votre email" required>
                </div>
                <div>
                    <label for="tel">Téléphone</label>
                    <input type="tel" id="tel" name="tel" placeholder="Votre numéro de téléphone" required>
                </div>
            </div>
            <div class="form__element message">
                <div>
                    <label for="message">Message</label>
                    <input type="text" id="message" name="message" placeholder="Entrez votre message ici" required>
                </div>
            </div>
            <button type="submit" class="submit">Envoyer</button>

        </form>
    </section>


<?php
get_footer();
?>