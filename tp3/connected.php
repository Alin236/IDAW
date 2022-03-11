<?php
$login = 'login';
if(isset($_GET['login']))
        $login = $_GET['login'];
$password = 'password';
if(isset($_GET['password']))
    $password = $_GET['password'];
echo $login." ".$password
?>