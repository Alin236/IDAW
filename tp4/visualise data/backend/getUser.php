<?php
    require_once('connection.php');
    // $connection

    $result = $connection->query('SELECT * FROM utilisateur');
    if($result != false){
        $all = $result->fetch_all();
        echo json_encode($all);
    }
?>