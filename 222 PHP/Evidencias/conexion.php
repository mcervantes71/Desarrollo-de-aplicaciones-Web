<?php
    $server = "localhost";
    $user = "Admin";
    $password = "123456";
    $dbname = "Evidencias";

    $conexion = new mysqli($server, $user, $password, $dbname);

    if($conexion->connect_error)
        die("Error: " . $conexion->connect_error;
?>
