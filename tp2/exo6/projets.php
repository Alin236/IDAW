<?php require_once("template_header.php")?>
    <div class="container">
        <?php
            require_once("template_menu.php");
            renderMenuToHTML("projets");
        ?>
        <div class="contenu">
            <h2>Mes projets</h2>
            <h3>Jeu de Taquin</h3>
            <p>Une application Flutter permettant de jouer au Taquin avec des images contenu dans le téléphone, prise en directe ou encore reçu par un site donnant des images aléatoires.</p>
            <h3>iMangerMieux - A venir</h3>
            <p>Application web permettant de maintenir un journal de tous les aliments consommés par un utilisateur.</p>
        </div>
    </div>
<?php require_once("template_footer.php")?>