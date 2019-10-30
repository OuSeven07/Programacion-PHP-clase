<!doctype html>
<html>
<head>
<title>BRUH!</title>
</head>
<body>

<div><h4>Welcome <?php echo $_SESSION['username']; ?></h4></div>

<?php
    
    
    $nombre = "Luilly Jesus Baez Rodriguez"; 

    echo "What's up, Im $nombre";

    $x = 144;
    $y = 999;

    echo "<p>Esta fue mi primera asignacion</p>";
    
    echo "<p>resultado de suma =</p>".  ($x + $y);

    echo "<p>resultado de resta =</p>". ($x - $y);

    echo "<p>resultado de multiplicacion =</p>". ($x * $y);

    echo "<p>resultado de division =</p>". ($x / $y);
    
    
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

</body>
</html>