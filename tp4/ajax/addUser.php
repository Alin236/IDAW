<?php
    // on simule une base de données
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'idaw-php-ajax';

    //On établit la connexion
    $connection = new mysqli($servername, $username, $password, $database);

    //On vérifie la connexion
    if($connection->connect_error){
        die('Erreur : ' .$connection->connect_error);
    }

    if(isset($_POST['nom']) && isset($_POST['prenom'])){
        $nom = $connection->real_escape_string($_POST['nom']);
        $prenom = $connection->real_escape_string($_POST['prenom']);

        $query = "INSERT INTO utilisateur (id, nom, prenom) VALUES (NULL, '$nom', '$prenom')";
        $result = $connection->query($query);

        echo $result;
    }
    else{
        echo 'fuyvhv';
    }
?>