<?php
    require_once('connection.php');
    // $connection

    if(isset($_POST['id'])){
        $id = $connection->real_escape_string($_POST['id']);

        $query = "DELETE FROM `utilisateur` WHERE `utilisateur`.`id` = $id";
        $result = $connection->query($query);

        echo $result;
    }
?>