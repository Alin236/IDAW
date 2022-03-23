<?php
    require_once('connection.php');
    // $connection

    if(isset($_POST['id']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['dateNaissance']) && isset($_POST['aimeCours']) && isset($_POST['commentaire'])){
        $id = $connection->real_escape_string($_POST['id']);
        $nom = $connection->real_escape_string($_POST['nom']);
        $prenom = $connection->real_escape_string($_POST['prenom']);
        $dateNaissance = $connection->real_escape_string($_POST['dateNaissance']);
        $aimeCours = $connection->real_escape_string($_POST['aimeCours']);
        $commentaire = $connection->real_escape_string($_POST['commentaire']);

        $query = "UPDATE `utilisateur` SET `nom` = '$nom', `prenom` = '$prenom', `date_naissance` = '$dateNaissance', `aime_cours` = $aimeCours, `commentaire` = '$commentaire' WHERE `utilisateur`.`id` = $id";
        $result = $connection->query($query);

        echo $result;
    }
?>