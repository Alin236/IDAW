<?php
    function renderMenuToHTML($currentPageId, $currentLeng) {
        // un tableau qui définit la structure du site
        @require_once('var/myMenu.php');
        // Création du menu en insérant l'attribut class=selected au bon endroit
        echo '<nav class="menu"><ul>';
        foreach($myMenu as $pageId => $pageParameters) {
            echo '<li';
            if($pageId == $currentPageId){
                echo ' class="selected"';
            }
            echo "><a href=\"index.php?page=$pageId&leng=$currentLeng\">$pageParameters[0]</a></li>";
        }
        echo '</ul></nav>';
        // un tableau qui définit les langues disponible du site
        @require_once('var/myLeng.php');
        echo '<nav class="menu"><ul>';
        foreach($myLeng as $leng => $lengParameters){
            echo '<li';
            if($leng == $currentLeng){
                echo ' class="selected"';
            }
            echo "><a href=\"index.php?page=$currentPageId&leng=$leng\">$lengParameters[0]</a></li>";
        }
        echo '</ul></nav>';
        // Le menu a été crée et la page actuel marqué
    }
?>