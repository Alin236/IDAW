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

    if(isset($_POST['id'])){
        $id = $connection->real_escape_string($_POST['id']);

        $query = "DELETE FROM `utilisateur` WHERE `utilisateur`.`id` = $id";
        $result = $connection->query($query);

        echo $result;
    }
?>