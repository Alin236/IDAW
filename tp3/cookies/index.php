<form id="style_form" action="index.php" method="GET">
    <select name="css">
        <option value="style1">style1</option>
        <option value="style2">style2</option>
    </select>
    <input type="submit" value="Appliquer" />
</form>

<?php
    $css = 'style1';
    if(isset($_COOKIE['css']))
        $css = $_COOKIE['css'];
    if(isset($_GET['css']))
        $css = $_GET['css'];
    setcookie('css', $css);
?>
