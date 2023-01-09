<?php

    require_once 'conexion.php';

    $message = '';

    session_start();

    if (!empty($_POST['name']) && !empty($_POST['description']) && !empty($_POST['date_start']) && !empty($_POST['date_end']) && !empty($_POST['active'])) {
        $sql = "INSERT INTO courses (name,description,date_start,date_end,active) VALUES (:name,:description,:date_start,:date_end,:active); ";
        $stmt = $connection->prepare($sql);
        $stmt->bindParam(':name', $_POST['name']);
        $stmt->bindParam(':description', $_POST['description']);
        $stmt->bindParam(':date_start', $_POST['date_start']);
        $stmt->bindParam(':date_end', $_POST['date_end']);
        $stmt->bindParam(':active', $_POST['active']);

        if ($stmt->execute()) {
            $message = "Inserted Course";
        } else {
            $message = "Error! Try again!";
        }
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
                <h1>Insert New Course</h1>
                <form class="form" action="course_insert.php" method="post">
                    <label>Name:</label>
                        <input type="text" name="name" placeholder="Type..."></br> 
                    <label>Description:</label>
                        <input type="text" name="description" placeholder="Type..."></br> 
                    <label>Start Date:</label>
                        <input type="text" name="date_start" placeholder="Type..."></br> 
                    <label>End Date:</label>
                        <input type="text" name="date_end" placeholder="Type..."></br> 
                    <label>Active:</label>
                        <input type="text" name="active" placeholder="Type..."></br> 
                    <div class="enviar">
                        <input class="submit" type="submit" value="Submit">
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