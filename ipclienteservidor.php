<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Capturar ips</title>
</head>
<body>
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
    </body>
    </html>