<?php require_once("template_header.php")?>
    <div class="container">
        <?php
            require_once("template_menu.php");
            renderMenuToHTML("info-technique");
        ?>
        <div class="contenu">
            <h2>Info technique du site ?</h2>
            <p>La consigne demandait d'avoir une page info, main ce site possédait déjà une page info.</p>
            <p>A la place, voici l'heure donné par PHP : <?php echo date("d/m/Y H:i:s", time()+3600)?>.</p>
        </div>
    </div>
<?php require_once("template_footer.php")?>