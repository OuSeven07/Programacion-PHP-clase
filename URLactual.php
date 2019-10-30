<?php

    $dominio = $_SERVER["HTTP_HOST"];
    $rest = $_SERVER["REQUEST_URI"];

    $url_completa = "http://" . $dominio . $rest;

    echo "Right now you are at: $url_completa"
    echo "ENJOY OUR CONTENT!"
    
?>

<ul>
        
        <li><a href="loginsystem.php">Login</a></li>
        <li><a href="asignacion1.php">Asignacion</a></li>
        <li><a href="Conversordemoneda.php">Conversor de moneda</a></li>
        <li><a href="ipclienteservidor.php">Get your ip!</a></li>
        <li><a href="URLactual.php">Ubicate!</a></li>
        <li><a href="register.php">CREA TU CUENTA YA!</a></li>
</ul>

<footer>Bruh! &copy; 2019 </footer>