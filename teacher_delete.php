<?php

    require_once 'conexion.php';

    session_start();
    
    $id_teacher = $_GET['id_teacher'];
    $delete = "DELETE FROM teachers WHERE id_teacher = '$id_teacher' ";
    $del = $connection->query($delete);

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

    <body  class="body">
        <div id="wrapper">
            <div id="contenedor">
                <div class="contenido2">
                    <div class="caja2"> Deleted Teacher</div>
                    <a class="indexlink" href="teacher_table.php" ><button class="subbutton">Show All Teachers</button></a>
                </div>
            </div>
        </div>
    </body>

    <footer class="footer">
        <div class="footertext"> © 2022 ESKOLAPP </div>
    </footer>

</html>
