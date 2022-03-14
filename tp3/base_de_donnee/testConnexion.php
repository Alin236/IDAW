<?php
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
    $result = $connection->query('SELECT * FROM user');
    if($result != false){
        $all = $result->fetch_all();
        echo '<table>
                <tr>
                    <th>id</th>
                    <th>login</th>
                    <th>password</th>
                    <th>pseudo</th>
                </tr>';
        foreach($all as $row){
            echo "<tr>
                    <td>$row[0]</td>
                    <td>$row[1]</td>
                    <td>$row[2]</td>
                    <td>$row[3]</td>
                </tr>";
        }
        echo '</table>';
    }
    else{
        echo '<p>échec de la query</p>';
    }
?>