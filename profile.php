<html>

	<head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <title> ESKOLAPP </title>
        <meta charset=”utf-8″>
	</head>

    <header class="header">
        <div class="headertitle"> ESKOLAPP </div>
        <a class="headerlink" href="panel_user.php"><button class="subbutton">User Panel</button></a>
        <a class="headerlink" href="logout.php"><button class="subbutton">Logout</button></a>
    </header>

    <body  class="body">
        <div id="wrapper">
            <div class="contenido2" id="seccion2">
                <h1>Modify Profile</h1>
                <form class="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <label>Name:</label>
                        <input type="text"  name="name"></br>
                    <label>Username:</label>
                        <input type="text"  name="username"></br>
                    <label>Email:</label>
                        <input type="text"  name="email"></br>
                    <label>Password:</label>
                        <input type="password" name="password"></br>
                    <div class="enviar">
                        <input class="submit" type="submit" name="edit" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </body>

    <footer class="footer">
        <div class="footertext"> © 2022 ESKOLAPP </div>
    </footer>

</html>