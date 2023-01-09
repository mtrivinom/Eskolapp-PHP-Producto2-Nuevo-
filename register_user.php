<?php

    require_once 'conexion.php';

    $message = '';

    session_start();

    if (!empty($_POST['name']) && !empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password'])) {
        $sql = "INSERT INTO users (name,username,email,password) VALUES (:name,:username,:email,:password); ";
        $stmt = $connection->prepare($sql);
        $stmt->bindParam(':name', $_POST['name']);
        $stmt->bindParam(':username', $_POST['username']);
        $stmt->bindParam(':email', $_POST['email']);
        $stmt->bindParam(':password', $_POST['password']);

        if ($stmt->execute()) {
            $message = "Inserted Student";
        } else {
            $message = "Error! Try again!";
        }
    }   

?>


<html>

    <head>
        <title> User </title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta charset=”utf-8″>
    </head>

    <header class="header">
        <div class="headertitle"> ESKOLAPP </div>
        <a class="headerlink" href="login_user.php"><button class="subbutton">Login</button></a>
        <a class="headerlink" href="register_user.php"><button class="subbutton">Register</button></a>
        <a class="headerlink" href="index.php"><button class="subbutton">Inicio</button></a>
    </header>

    <body class="body">
        <div id="wrapper">
            <div id="contenedor">
                <div id="contenido">
                    <div class="loginhead" id="loginhead">
                        <div class="lhead">
                            <a class="headerlink2" href="login_user.php" ><button class="subbutton">Student Login</button></a>
                            <a class="headerlink2" href="login_admin.php" ><button class="subbutton">Admin Login</button></a>
                            <a class="headerlink2" href="register_user.php" ><button id="subactive" class="subbutton">Student Register</button></a>
                            <a class="headerlink2" href="register_admin.php" ><button class="subbutton">Admin Register</button></a>
                        </div>
                    </div>
                    <div class="contenido2" id="seccion2">
                        <h1>Insert New Student</h1>
                        <form class="form" action="register_user.php" method="post">
                            <label>Name:</label>
                                <input type="text" name="name" placeholder="Type..."></br> 
                            <label>Username:</label>
                                <input type="text" name="username" placeholder="Type..."></br> 
                            <label>Email:</label>
                                <input type="text" name="email" placeholder="Type..."></br> 
                            <label>Password:</label>
                                <input type="password" name="password" placeholder="Type..."></br>  
                            <div class="enviar">
                                <input class="submit" type="submit" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>

    <footer class="footer">
        <div class="footertext"> © 2022 ESKOLAPP </div>
    </footer>

</html>