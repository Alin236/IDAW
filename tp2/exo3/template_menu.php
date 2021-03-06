<?php
    function renderMenuToHTML($currentPageId) {
        // un tableau qui définit la structure du site
        $mymenu = array(
            // idPage titre
            'index' => array( 'Accueil' ),
            'cv' => array( 'CV' ),
            'projets' => array( 'Projets' ),
            'info-technique' => array( 'Info technique' ),
            'info' => array( 'Info' )
        );
        // Création du menu en insérant l'attribut id=currentpage au bon endroit
        echo '<nav class="menu"><ul>';
        foreach($mymenu as $pageId => $pageParameters) {
            echo "<li";
            if($pageId == $currentPageId){
                echo ' id="currentpage"';
            }
            echo "><a href=".$pageId.".php>".$pageParameters[0]."</a></li>";
        }
        echo '</ul></nav>';
        // Le menu a été crée et la page actuel marqué
    }
?>