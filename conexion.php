<?php

	$username = 'root';
	$password = '';
	$database = 'wordpress8';
    $connection = null;

	try {
		$connection = new PDO('mysql:host=localhost;dbname=wordpress8;',$username,$password);
	} catch (PDOException $e) {
		die('Fallo en la Conexión con la Base de Datos - '.$e->getMessage());
	}

?>
