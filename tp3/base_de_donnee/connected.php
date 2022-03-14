<?php
    session_start();
    if(!isset($_SESSION['pseudo'])){
        
        // on simule une base de données
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'idaw-php-sql';
        
        //On établit la connexion
        $connection = new mysqli($servername, $username, $password, $database);
        
        //On vérifie la connexion
        if($connection->connect_error){
            die('Erreur : ' .$connection->connect_error);
        }

        $pseudo = "anonymous";
        $errorText = "";
        $successfullyLogged = false;
        if(isset($_POST['login']) && isset($_POST['password'])) {
            $tryLogin=$_POST['login'];
            $tryPwd=$_POST['password'];

            $tryLogin = $connection->real_escape_string($tryLogin);
            $result = $connection->query("SELECT password, pseudo FROM user WHERE login='$tryLogin'");
            if($result == 'false')
                die('échec de la query');
            $result = $result->fetch_all();

            // si login existe et password correspond
            if( !empty($result) && $tryPwd == $result[0][0] ) {
                $successfullyLogged = true;
                $pseudo = $result[0][1];
            } else
                $errorText = "Erreur de login/password";
        } else
            $errorText = "Merci d'utiliser le formulaire de login";
        if(!$successfullyLogged) {
            echo $errorText;
        } else {
            echo "<h1>Bienvenu ".$pseudo."</h1>";
            $_SESSION['pseudo'] = $pseudo;
            echo '<p>Une session a été créé<p>';
        }
    } else {
        $pseudo = $_SESSION['pseudo'];
        echo "<h1>Bienvenu ".$pseudo."</h1>";
        echo '<p>Connecté par session<p>';
    }
?>
<p><a href="login.php">connected.php</a></p>
