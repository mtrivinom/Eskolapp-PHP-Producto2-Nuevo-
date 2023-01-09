<?php

    require_once 'conexion.php';

    session_start();

    $consulta = "SELECT * FROM class";
    $guardar = $connection->query($consulta);

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
                <h1>CLASSES</h1>
                <a href="class_insert.php" ><button class="subbutton">Insert New Class</button></a>
                <table  class="table">
                    <thead>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Teacher</th>
                        <th>Course</th>
                        <th>Schedule</th>
                        <th>Color</th>
                        <th>Modify</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>
                        <?php while($row = $guardar->fetch(PDO::FETCH_ASSOC)){?>
                            <tr>
                                <td><?php echo $row['id_class']; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['id_teacher']; ?></td>
                                <td><?php echo $row['id_course']; ?></td>
                                <td><?php echo $row['id_schedule']; ?></td>
                                <td><?php echo $row['color']; ?></td>
                                <td><a href="class_modify.php?id_class=<?php echo $row['id_class'];?>">Modify</a></td>
                                <td><a href="class_delete.php?id_class=<?php echo $row['id_class'];?>">Delete</a></td>
                            </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
    </body>

    <footer class="footer">
        <div class="footertext"> © 2022 ESKOLAPP </div>
    </footer>

</html>