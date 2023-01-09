<?php

    require_once 'conexion.php';

    session_start();

    $consulta = "SELECT * FROM teachers";
    $guardar = $connection->query($consulta);

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
                <h1>TEACHERS</h1>
                <a href="teacher_insert.php" ><button class="subbutton">Insert New Teacher</button></a>
                <table  class="table">
                    <thead>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Surname</th>
                        <th>Telephone</th>
                        <th>NIF</th>
                        <th>Email</th>
                        <th>Modify</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>
                        <?php while($row = $guardar->fetch(PDO::FETCH_ASSOC)){?>
                            <tr>
                                <td><?php echo $row['id_teacher']; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['surname']; ?></td>
                                <td><?php echo $row['telephone']; ?></td>
                                <td><?php echo $row['nif']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><a href="teacher_modify.php?id_teacher=<?php echo $row['id_teacher'];?>">Modify</a></td>
                                <td><a href="teacher_delete.php?id_teacher=<?php echo $row['id_teacher'];?>">Delete</a></td>
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