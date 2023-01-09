<?php

    require_once 'conexion.php';

    $message = '';

    session_start();

    if (!empty($_POST['name']) && !empty($_POST['id_teacher']) && !empty($_POST['id_course']) && !empty($_POST['id_schedule']) && !empty($_POST['color'])) {
        $sql = "INSERT INTO class (name,id_teacher,id_course,id_schedule,color) VALUES (:name,:id_teacher,:id_course,:id_schedule,:color); ";
        $stmt = $connection->prepare($sql);
        $stmt->bindParam(':name', $_POST['name']);
        $stmt->bindParam(':id_teacher', $_POST['id_teacher']);
        $stmt->bindParam(':id_course', $_POST['id_course']);
        $stmt->bindParam(':id_schedule', $_POST['id_schedule']);
        $stmt->bindParam(':color', $_POST['color']);

        if ($stmt->execute()) {
            $message = "Inserted Class";
        } else {
            $message = "Error! Try again!";
        }
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
                <h1>Insert New Class</h1>
                <form class="form" action="class_insert.php" method="post">
                    <label>Name:</label>
                        <input type="text" name="name" placeholder="Type..."></br> 
                    <label>Teacher:</label>
                        <input type="text" name="id_teacher" placeholder="Type..."></br> 
                    <label>Course:</label>
                        <input type="text" name="id_course" placeholder="Type..."></br> 
                    <label>Schedule:</label>
                        <input type="text" name="id_schedule" placeholder="Type..."></br> 
                    <label>Color:</label>
                        <input type="text" name="color" placeholder="Type..."></br> 
                    <div class="enviar">
                        <input class="submit" type="submit" value="Submit">
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