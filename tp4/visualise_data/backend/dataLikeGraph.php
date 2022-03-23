<?php
    require_once('connection.php');
    // $connection

    $result = $connection->query('SELECT aime_cours, COUNT(aime_cours) FROM utilisateur GROUP BY aime_cours');
    if($result != false){
        $all = $result->fetch_all();
        echo json_encode($all);
    }
?>