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
    <p class="contact_explain">
        Vous avez des questions, des suggestions ou vous souhaitez nous aider ? N'hésitez pas à nous contacter en
        remplissant le formulaire ci-dessous ou en nous contactant via les coordonnées à côté du formulaire.
    </p>
    <section class="form_container">
        <h2 class="sr-only">Formulaire de contact</h2>
        <form method="post" action="/contact" class="form">
            <div>
                <label for="name">Nom, Prénom</label>
                <input type="text" id="name" name="name" placeholder="Ex Doe John" required>
            </div>
            <div>
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" placeholder="Ex. john.doe@domaine.con" required>
            </div>
            <div>
                <label for="subject">Sujet</label>
                <select name="subject" id="subject">
                    <option value="no-choice">-- Choisissez une option --</option>
                    <option value="Dons">Dons (Financiers ou matériels)</option>
                    <option value="help">Bénévolat</option>
                    <option value="shelter">Recherche d'hébergement</option>
                    <option value="contact">Prise de contact</option>
                </select>
            </div>
            <div>
                <label for="message">Message</label>
                <input type="text" id="message" name="message" placeholder="Entrez votre message ici" required>
            </div>
            <button type="submit" class="submit">Envoyer</button>
        </form>
        <div class="contact_info">
            <h2>Informations de contact</h2>
            <p>
                <b>Adresse :</b> Rue du Marché 33, 4500 Huy
            </p>
            <p>
                <b>Téléphone :</b> <a href="tel:085 / 21 57 52" title="Nous téléphoner">085 / 21 57 52</a>
            </p>
            <p>
                <b>E-mail :</b> <a href="mailto: contact@sefasbl.com" title="Nous envoyer un mail">contact@sefasbl.com</a>
            </p>
        </div>

    </section>


<?php
get_footer();
?>