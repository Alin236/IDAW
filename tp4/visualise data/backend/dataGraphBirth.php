<?php
    require_once('connection.php');
    // $connection

    $result = $connection->query('SELECT MONTH(date_naissance), COUNT(date_naissance) FROM utilisateur GROUP BY MONTH(date_naissance)');
    if($result != false){
        $all = $result->fetch_all();
        echo json_encode($all);
    }
?>