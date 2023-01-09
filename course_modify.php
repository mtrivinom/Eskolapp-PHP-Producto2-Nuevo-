<?php

    require_once 'conexion.php';
    error_reporting(E_ERROR | E_PARSE);

    session_start();

    $id_course = $_GET['id_course'] ?? null; 
    $modify = "SELECT * FROM courses WHERE id_course = '$id_course'";
    $mod = $connection->query($modify);
    $atribute = $mod->fetch();

    if(isset($_POST['edit'])){
        $id_course = $_POST['id_course'];
        $name = $_POST['name'];
        $description = $_POST['description'];
        $date_start = $_POST['date_start'];
        $date_end = $_POST['date_end'];
        $active = $_POST['active'];

    $update = "UPDATE courses SET name = '$name', description = '$description', date_start = '$date_start', date_end = '$date_end', active = '$active' WHERE id_course = '$id_course'";
    $up = $connection->query($update);
    }

?>


<html>

    <head>
        <title> Courses </title>
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
                <h1>Modify Course</h1>
                <form class="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                        <input type="hidden" name="id_course" value="<?php echo $atribute['id_course']; ?>" >
                    <label>Name:</label>
                        <input type="text"  name="name" value="<?php echo $atribute['name']; ?>" placeholder="Name" required></br>
                    <label>Description:</label>
                        <input type="text"  name="description" value="<?php echo $atribute['description']; ?>" placeholder="Description" required></br>
                    <label>Start Date:</label>
                        <input type="text"  name="date_start" value="<?php echo $atribute['date_start']; ?>" placeholder="Start Date" required></br>
                    <label>End Date:</label>
                        <input type="text"  name="date_end" value="<?php echo $atribute['date_end']; ?>" placeholder="End Date" required></br>
                    <label>Active:</label>
                        <input type="text"  name="active" value="<?php echo $atribute['active']; ?>" placeholder="Active" required></br>
                    <div class="enviar">
                        <br><input class="submit" type="submit" name="edit" value="Submit">
                    </div>
                </form>
                <a href="course_table.php" ><button class="subbutton">Show All Courses</button></a>
            </div>
        </div>
    </body>

    <footer class="footer">
        <div class="footertext"> © 2022 ESKOLAPP </div>
    </footer>

</html>
