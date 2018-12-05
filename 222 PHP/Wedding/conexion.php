<?php
    $server = "localhost";
    $user = "Admin";
    $password = "123456";
    $dbname = "Wedding";

    $conexion = mysqli_connect($server, $user, $password, $dbname);

    if(!$conexion) die("Error: ".mysqli_connect_error());
?>
