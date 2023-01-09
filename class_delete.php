<?php

    require_once 'conexion.php';

    session_start();
    
    $id_class = $_GET['id_class'];
    $delete = "DELETE FROM class WHERE id_class = '$id_class' ";
    $del = $connection->query($delete);

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

    <body  class="body">
        <div id="wrapper">
            <div id="contenedor">
                <div class="contenido2">
                    <div class="caja2"> Deleted Class</div>
                    <a class="indexlink" href="class_table.php" ><button class="subbutton">Show All Classes</button></a>
                </div>
            </div>
        </div>
    </body>

    <footer class="footer">
        <div class="footertext"> © 2022 ESKOLAPP </div>
    </footer>

</html>
