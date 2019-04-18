<?php
    $server = "mysql.hostinger.mx";
    $user = "u752252448_admin";
    $password = "dificil123";
    $dbname = "u752252448_preg";

    $conexion = new mysqli($server, $user, $password, $dbname);

    if($conexion->connect_error)
        die("Error: ".$conexion->connect_error);
?>
