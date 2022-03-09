<?php
    function renderMenuToHTML($currentPageId, $currentLeng) {
        // un tableau qui définit la structure du site
        $mymenu = array(
            // idPage titre
            'accueil' => array( 'Accueil' ),
            'cv' => array( 'CV' ),
            'projets' => array( 'Projets' ),
            'info-technique' => array( 'Info technique' ),
            'info' => array( 'Info' ),
            'contact' => array( 'Contact' )
        );
        // Création du menu en insérant l'attribut id=currentpage au bon endroit
        echo '<nav class="menu"><ul>';
        foreach($mymenu as $pageId => $pageParameters) {
            echo "<li";
            if($pageId == $currentPageId){
                echo ' id="currentpage"';
            }
            echo "><a href=index.php?page=".$pageId."&leng=$currentLeng>".$pageParameters[0]."</a></li>";
        }
        $myLeng = array(
            'fr' => array( 'Français' ),
            'en' => array( 'English' )
        );
        foreach($myLeng as $leng => $lengParameters){
            if($leng!=$currentLeng)
                echo "<li><a href=index.php?page=$currentPageId&leng=$leng>".$lengParameters[0]."</a></li>";
        }
        echo '</ul></nav>';
        // Le menu a été crée et la page actuel marqué
    }
?>