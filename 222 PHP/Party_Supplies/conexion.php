<?php
    $server = "localhost";
    $user_name = "Admin";
    $password = "123456";
    $db_name = "Party_Supplies";

    $conexion = new mysqli($server, $user_name, $password, $db_name);

    if($conexion->connect_error)
        die("Error: " . $conexion->connect_error);
?>
