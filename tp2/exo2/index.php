<!DOCTYPE HTML>
<html lang="fr">
<head> 
    <title>PHP donne l'heure</title> 
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
</head>
<body>
    <p>PHP donne l'heure : <?php echo date("d/m/Y h:i:s")?></p>
    <p>Test de fonction qui addition l'heure, les minutes et les secondes : <?php
    function additionTemps($temps){
        $resultat = $temps["h"] + $temps["i"] + $temps["s"];
        return $resultat;
    }
    $temps = array(
        "h" => date("h"),
        "i" => date("i"),
        "s" => date("s")
    );
    echo additionTemps($temps);
    echo " (= ".$temps["h"]." + ".$temps["i"]." + ".$temps["s"].")";
    ?>
    </p>
</body>
</html>