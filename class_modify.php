<?php

    require_once 'conexion.php';
    error_reporting(E_ERROR | E_PARSE);

    session_start();

    $id_class = $_GET['id_class'] ?? null; 
    $modify = "SELECT * FROM class WHERE id_class = '$id_class'";
    $mod = $connection->query($modify);
    $atribute = $mod->fetch();

    if(isset($_POST['edit'])){
        $id_class = $_POST['id_class'];
        $name = $_POST['name'];
        $id_teacher = $_POST['id_teacher'];
        $id_course = $_POST['id_course'];
        $id_schedule = $_POST['id_schedule'];
        $color = $_POST['color'];

    $update = "UPDATE class SET name = '$name', id_teacher = '$id_teacher', id_course = '$id_course', id_schedule = '$id_schedule', color = '$color' WHERE id_class = '$id_class'";
    $up = $connection->query($update);
    }

?>


<html>

    <head>
        <title> Classes </title>
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
                <h1>Modify Class</h1>
                <form class="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                        <input type="hidden" name="id_class" value="<?php echo $atribute['id_class']; ?>" >
                    <label>Name:</label>
                        <input type="text"  name="name" value="<?php echo $atribute['name']; ?>" placeholder="Name" required></br>
                    <label>Teacher:</label>
                        <input type="text"  name="id_teacher" value="<?php echo $atribute['id_teacher']; ?>" placeholder="Teacher" required></br>
                    <label>Course:</label>
                        <input type="text"  name="id_course" value="<?php echo $atribute['id_course']; ?>" placeholder="Course" required></br>
                    <label>Schedule:</label>
                        <input type="text"  name="id_schedule" value="<?php echo $atribute['id_schedule']; ?>" placeholder="Schedule" required></br>
                    <label>Color:</label>
                        <input type="text"  name="color" value="<?php echo $atribute['color']; ?>" placeholder="Color" required></br>
                    <div class="enviar">
                        <br><input class="submit" type="submit" name="edit" value="Submit">
                    </div>
                </form>
                <a href="class_table.php" ><button class="subbutton">Show All Classes</button></a>
            </div>
        </div>
    </body>

    <footer class="footer">
        <div class="footertext"> © 2022 ESKOLAPP </div>
    </footer>

</html>
