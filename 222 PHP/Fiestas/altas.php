<?php
    require_once "conexion.php";

    $nombre = $_POST["nombre"];
    $precio = $_POST["precio"];
    $cantidad = $_POST["cantidad"];

    $query = "INSERT INTO Candies
              VALUES('{$nombre}',
                      {$precio},
                      {$cantidad})";

    echo $query;
?>
