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

    $result = $connection->query('SELECT * FROM utilisateur');
    if($result != false){
        $all = $result->fetch_all();
        echo json_encode($all);
    }
?>