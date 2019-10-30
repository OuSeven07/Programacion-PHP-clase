<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Capturar ips</title>
</head>
<body>
    
    <h1>IP proviniente del servidor</h1>
    
    <?php
    
        $archivo="ips.text";
        $proceso=fopen($archivo,"a") or die("Error en el sistema");
        $ip=$_SERVER['SERVER_ADDR'];
        $fecha=date("d/m/y");
        $datos="La ip es: " .$ip. " Fue capturada el: ".$fecha."\n";
        fwrite($proceso,$datos);
        fclose($proceso);
    ?>

    <h1>We got your ip already! </h1>
    
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