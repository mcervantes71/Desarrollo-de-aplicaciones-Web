<?php
    $host = "localhost";
	$user_name = "root";
	$password = "P4ssw0rd55";
	$db_name = "UTCJ";

	$conexion = mysqli_connect($host, $user_name, $password, $db_name);

    if(!$conexion)
        die("Error: " . mysqli_connect_error());
?>
