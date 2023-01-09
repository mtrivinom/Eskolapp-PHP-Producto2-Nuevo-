<?php

    require  'conexion.php';

    session_start();

    if(!empty($_POST['email']) && !empty($_POST['password'])){
        $cons = $connection->prepare('SELECT username,name,email,password FROM users WHERE email=:email');
        $cons->bindParam(':email', $_POST['email']);
        $cons->execute();
        $results = $cons->fetch(PDO::FETCH_ASSOC);

        if(is_countable($results) && count($results) > 0 && ($_POST['password'] == $results['password'])){
            $_SESSION['username'] = $results['username'];
            header('Location: panel_user.php');
        } else {
            header('Location: login_user.php');
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

    <body  class="body">
        <div id="wrapper">
            <div id="contenedor">
                <div id="contenido">
                    <div class="loginhead" id="loginhead">
                        <div class="lhead">
                            <a class="headerlink2" href="login_user.php" ><button id="subactive" class="subbutton">Student Login</button></a>
                            <a class="headerlink2" href="login_admin.php" ><button class="subbutton">Admin Login</button></a>
                            <a class="headerlink2" href="register_user.php" ><button class="subbutton">Student Register</button></a>
                            <a class="headerlink2" href="register_admin.php" ><button class="subbutton">Admin Register</button></a>
                        </div>
                    </div>
                    <div class="contenido2" id="seccion2">
                        <h1>Student Login</h1>
                        <?php if (!empty($message)): ?>
                            <p><?= $message ?></p>
                        <?php endif; ?>
                        <form class="form" action="login_user.php" method="post">
                            <label>Email:</label>
                                <input type="text" name="email" placeholder="Type..."></br>
                            <label>Password:</label>
                                <input type="password" name="password" placeholder="Introduce tu contraseña">
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
