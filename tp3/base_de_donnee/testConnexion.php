<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    
    //On établit la connexion
    $connection = new mysqli($servername, $username, $password);
    
    //On vérifie la connexion
    if($connection->connect_error){
        die('Erreur : ' .$connection->connect_error);
    }
    echo 'yeahye';
?>