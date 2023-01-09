<?php

    require_once 'conexion.php';

    $message = '';

    session_start();

    if (!empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['telephone']) && !empty($_POST['nif']) && !empty($_POST['email'])) {
        $sql = "INSERT INTO teachers (name,surname,telephone,nif,email) VALUES (:name,:surname,:telephone,:nif,:email); ";
        $stmt = $connection->prepare($sql);
        $stmt->bindParam(':name', $_POST['name']);
        $stmt->bindParam(':surname', $_POST['surname']);
        $stmt->bindParam(':telephone', $_POST['telephone']);
        $stmt->bindParam(':nif', $_POST['nif']);
        $stmt->bindParam(':email', $_POST['email']);

        if ($stmt->execute()) {
            $message = "Inserted Teacher";
        } else {
            $message = "Error! Try again!";
        }
    }   

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
                <h1>Insert New Teacher</h1>
                <form class="form" action="teacher_insert.php" method="post">
                    <label>Name:</label>
                        <input type="text" name="name" placeholder="Type..."></br> 
                    <label>Surname:</label>
                        <input type="text" name="surname" placeholder="Type..."></br> 
                    <label>Telephone:</label>
                        <input type="text" name="telephone" placeholder="Type..."></br> 
                    <label>NIF:</label>
                        <input type="text" name="nif" placeholder="Type..."></br> 
                    <label>Email:</label>
                        <input type="text" name="email" placeholder="Type..."></br> 
                    <div class="enviar">
                        <input class="submit" type="submit" value="Submit">
                    </div>
                </form>
                <a href="teacher_table.php" ><button class="subbutton">Show All Teachers</button></a>
            </div>
        </div>
    </body>

    <footer class="footer">
        <div class="footertext"> © 2022 ESKOLAPP </div>
    </footer>

</html>