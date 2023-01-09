<?php

    require_once 'conexion.php';

    session_start();
    
    $id_course = $_GET['id_course'];
    $delete = "DELETE FROM courses WHERE id_course = '$id_course' ";
    $del = $connection->query($delete);

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

    <body  class="body">
        <div id="wrapper">
            <div id="contenedor">
                <div class="contenido2">
                    <div class="caja2"> Deleted Course</div>
                    <a class="indexlink" href="course_table.php" ><button class="subbutton">Show All Courses</button></a>
                </div>
            </div>
        </div>
    </body>

    <footer class="footer">
        <div class="footertext"> © 2022 ESKOLAPP </div>
    </footer>

</html>
