<?php
    session_start();
    if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false) {
        header("Location: loginsystem.php");
    }
?>

<h2>You have logged in!</h2>

<ul>
        
        <li><a href="loginsystem.php">Login</a></li>
        <li><a href="asignacion1.php">Asignacion</a></li>
        <li><a href="Conversordemoneda.php">Conversor de moneda</a></li>
        <li><a href="ipclienteservidor.php">Get your ip!</a></li>
        <li><a href="URLactual.php">Ubicate!</a></li>
        <li><a href="register.php">CREA TU CUENTA YA!</a></li>
</ul>

<footer>Bruh! &copy; 2019 </footer>