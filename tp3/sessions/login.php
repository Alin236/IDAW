<?php
    $formulaire =
        '<form id="login_form" action="connected.php" method="POST">
            <table>
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
                    <td><input type="submit" value="Se connecter..." /></td>
                </tr>
            </table>
        </form>';
    session_start();
    if(!isset($_SESSION['login'])){
        echo $formulaire;
    } else if(isset($_GET['disconnect']) && $_GET['disconnect'] == 'true'){
        echo $formulaire;
        unset($_SESSION['login']);
        echo '<p>vous avez été déconnecté</p>';
    }
    else {
        $login = $_SESSION['login'];
        echo "<p>Vous êtes déjà connecté sous le nom $login";
        echo '<p><a href="?disconnect=true">Click ici pour se déconnecter</a></p>';
    }
?>
<p><a href="connected.php">login.php</a></p>
