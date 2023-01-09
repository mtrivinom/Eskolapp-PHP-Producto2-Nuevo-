<?php

    require_once 'conexion.php';

    session_start();

    $consulta = "SELECT * FROM courses";
    $guardar = $connection->query($consulta);

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
                <h1>COURSES</h1>
                <a href="course_insert.php" ><button class="subbutton">Insert New Course</button></a>
                <table  class="table">
                    <thead>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Active</th>
                        <th>Modify</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>
                        <?php while($row = $guardar->fetch(PDO::FETCH_ASSOC)){?>
                            <tr>
                                <td><?php echo $row['id_course']; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['description']; ?></td>
                                <td><?php echo $row['date_start']; ?></td>
                                <td><?php echo $row['date_end']; ?></td>
                                <td><?php echo $row['active']; ?></td>
                                <td><a href="course_modify.php?id_course=<?php echo $row['id_course'];?>">Modify</a></td>
                                <td><a href="course_delete.php?id_course=<?php echo $row['id_course'];?>">Delete</a></td>
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