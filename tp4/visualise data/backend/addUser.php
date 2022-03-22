<?php
    require_once('connection.php');
    // $connection

    if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['dateNaissance']) && isset($_POST['aimeCours']) && isset($_POST['commentaire'])){
        $nom = $connection->real_escape_string($_POST['nom']);
        $prenom = $connection->real_escape_string($_POST['prenom']);
        $dateNaissance = $connection->real_escape_string($_POST['dateNaissance']);
        $aimeCours = $connection->real_escape_string($_POST['aimeCours']);
        $commentaire = $connection->real_escape_string($_POST['commentaire']);

        $query = "INSERT INTO utilisateur (id, nom, prenom, date_naissance, aime_cours, commentaire) VALUES (NULL, '$nom', '$prenom', '$dateNaissance', $aimeCours, '$commentaire')";
        $result = $connection->query($query);

        if($result)
            echo $connection->insert_id;
    }
?>