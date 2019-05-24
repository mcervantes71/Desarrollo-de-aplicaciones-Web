<?php
    $host = "localhost";
    $user_name = "root";
    $password = "P4ssw0rd55";
    $db_name = "Party_Supplies";

    $conexion = new mysqli($host, $user_name, $password, $db_name);

    if($conexion->connect_error)
        die("Error: " . $conexion->connect_error);

?>
