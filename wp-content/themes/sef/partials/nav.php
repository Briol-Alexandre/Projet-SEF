<header>
    <nav class="main-nav">
        <h1 class="sr-only">
            Navigation principale
        </h1>
        <a href="/" title="Retour à l'accueil">
            <img src="/wp-content/themes/sef/resources/img/1x/sef-logo.png" alt="Logo de l'association SEF" class="logo">
        </a>
        <div class="hamburger-menu">
            <input type="checkbox" id="menu__toggle">
            <label for="menu__toggle" class="menu__button">
                <span></span>
                <span></span>
                <span></span>
            </label>

            <ul class="menu__box">
                <li><a class="<?= urlIs('/sef/') ? 'current_page' : 'menu__item' ?> menu__item" href="/sef" title="Vers la page SEF">SEF</a></li>
                <li><a class="<?= urlIs('/magasins/') ? 'current_page' : 'menu__item' ?> menu__item" href="/magasins" title="Vers la page des magasins">Magasins</a></li>
                <li><a class="<?= urlIs('/news/') ? 'current_page' : 'menu__item' ?> menu__item" href="/news" title="Vers la page des actualités">Actualités</a></li>
                <li><a class="<?= urlIs('/soutenir/') ? 'current_page' : 'menu__item' ?> menu__item" href="/soutenir" title="Vers la page de soutien">Soutenir</a></li>
                <li><a id="contactButton" href="/contact" title="Vers la page de Contact">Contact</a></li>
            </ul>
        </div>
    </nav>
</header>
