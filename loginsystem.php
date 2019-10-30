<!DOCTYPE HTML>

<?php
    session_start();
   
    $username = "user";
    $password = "password";

    if (isset($_SESSION ['loggedin']) && $_SESSION['loggedin'] == true) 
    {
        header("Location: loginsystemsuccess.php");
    }
    
    if (isset ($_POST['username']) && isset($_POST['password'])) 
    {
        if ($_POST['username'] == $username && $_POST['password'] == $password) 
        {
            $_SESSION['loggedin'] = true;
            header("Location: loginsystemsuccess.php");
        }
    }
?>

<html>
    <body>
<h1>We r waiting for ya!</h1>
  <h5> GET IN BRO!!!! </h5>
    
    <h1>Logeate!</h1>

        <form method="post" action="loginsystem.php">
            Username:<br/>
            <input type="text" name="username"><br/>
            Password<br/>
            <input type="password" name="password"><br/>
            <input type="submit" value="Login!">
        </form>
        
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