<?php 
    if(!isset($_GET['pseudo']) && !isset($_GET['login']) & !isset($_GET['password'])){
        echo '<form action="" method="GET">
                <table>
                    <tr>
                        <th>Pseudo :</th>
                        <td><input type="text" name="pseudo"></td>
                    </tr>
                    <tr>
                        <th>Login :</th>
                        <td><input type="text" name="login"></td>
                    </tr>
                    <tr>
                        <th>Mot de passe :</th>
                        <td><input type="password" name="password"></td>
                    </tr>
                    <tr>
                        <th></th>
                        <td><input type="submit" value="S\'incrire" /></td>
                    </tr>
                </table>
            </form>';
    }
    else{
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

        $pseudo = $connection->real_escape_string($_GET['pseudo']);
        $login = $connection->real_escape_string($_GET['login']);
        $password = $connection->real_escape_string($_GET['password']);

        $query = "INSERT INTO user (id, login, password, pseudo) VALUES (NULL, '$login', '$password', '$pseudo')";
        $result = $connection->query($query);
        if($result==true){
            echo '<p>Compte créé</p>';
        }
        else{
            echo '<p>Erreur</p>';
        }
    }
?>
<p><a href="login.php">login.php</a></p>