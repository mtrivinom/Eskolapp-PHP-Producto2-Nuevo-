<?php

    require_once 'conexion.php';
    error_reporting(E_ERROR | E_PARSE);

    session_start();

    $id_teacher = $_GET['id_teacher'] ?? null; 
    $modify = "SELECT * FROM teachers WHERE id_teacher = '$id_teacher'";
    $mod = $connection->query($modify);
    $atribute = $mod->fetch();

    if(isset($_POST['edit'])){
        $id_teacher = $_POST['id_teacher'];
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $telephone = $_POST['telephone'];
        $nif = $_POST['nif'];
        $email = $_POST['email'];

    $update = "UPDATE teachers SET name = '$name', surname = '$surname', telephone = '$telephone', nif = '$nif', email = '$email' WHERE id_teacher = '$id_teacher'";
    $up = $connection->query($update);
    }

?>


<html>

    <head>
        <title> Teachers </title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta charset=”utf-8″>
    </head>

    <header class="header">
        <div class="headertitle"> ESKOLAPP </div>
        <a class="headerlink" href="panel_admin.php"><button class="subbutton">Admin Panel</button></a>
        <a class="headerlink" href="logout.php"><button class="subbutton">Logout</button></a>
    </header>

    <body class="body">
        <div id="wrapper">
            <div class="contenido2" id="seccion2">
                <h1>Modify Teacher</h1>
                <form class="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                        <input type="hidden" name="id_teacher" value="<?php echo $atribute['id_teacher']; ?>" >
                    <label>Name:</label>
                        <input type="text"  name="name" value="<?php echo $atribute['name']; ?>" placeholder="Name" required></br>
                    <label>Surname:</label>
                        <input type="text"  name="surname" value="<?php echo $atribute['surname']; ?>" placeholder="Surname" required></br>
                    <label>Telephone:</label>
                        <input type="text"  name="telephone" value="<?php echo $atribute['telephone']; ?>" placeholder="Telephone" required></br>
                    <label>NIF:</label>
                        <input type="text"  name="nif" value="<?php echo $atribute['nif']; ?>" placeholder="NIF" required></br>
                    <label>Email:</label>
                        <input type="text"  name="email" value="<?php echo $atribute['email']; ?>" placeholder="Email" required></br>
                    <div class="enviar">
                        <br><input class="submit" type="submit" name="edit" value="Submit">
                    </div>
                </form>
                <a href="teacher_table.php" ><button class="subbutton">Show All Teachers</button></a>
            </div>
        </div>
    </body>

    <footer class="footer">
        <div class="footertext"> © 2022 ESKOLAPP </div>
    </footer>

</html>
