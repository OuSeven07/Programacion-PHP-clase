<?php
    session_start();

    // conectate a la base de datos
    $db = mysqli_connect("localhost", "root", "", "authentication");
    
    if (isset($_POST['register_btn'])) {
        session_start();
        $username = mysql_real_escape_string($_POST['username']);
        $email = mysql_real_escape_string($_POST['email']);
        $password = mysql_real_escape_string($_POST['password']);
        $password2 = mysql_real_escape_string($_POST['password2']);

        if ($password == $password2) {
            // create user
            $password = md5($password); // debatir password antes de guardarla por motivos de seguridad
            $sql = "INSERT INTO user(username, email, password) VALUES( '$username', '$email', '$password')";
            mysqli_query($db, $sql);
            $_SESSION['message'] = "You are now logged in";
            $_SESSION['username'] = $username;
            header("location: asignacion1.php");// redirecciona a la paguina principal
        }else{
            $_SESSION['message'] = "The two passwords do not match";
            // Expresion utilizada cuando el registro falla o no es exitoso
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register, login and logout</title>
</head>
<body>
<div class="header">
    <h1>Register, login and logout</h1>
</div>

<form method="post" action="register.php">
    <table>
        <tr>
            <td>Username:</td>
            <td><input type="text" name="username" class="textInput"></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="email" name="email" class="textInput"></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="password" name="password" class="textInput"></td>
        </tr>
        <tr>
            <td>Password again:</td>
            <td><input type="password" name="password2" class="textInput"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="register_btn" value="Register"></td>
        </tr>
    </table>
    <ul>
        
        <li><a href="loginsystem.php">Login</a></li>
        <li><a href="asignacion1.php">Asignacion</a></li>
        <li><a href="Conversordemoneda.php">Conversor de moneda</a></li>
        <li><a href="ipclienteservidor.php">Get your ip!</a></li>
        <li><a href="URLactual.php">Ubicate!</a></li>
        <li><a href="register.php">CREA TU CUENTA YA!</a></li>
</ul>

<footer>Bruh! &copy; 2019 </footer>


</form>
</body>
</html>