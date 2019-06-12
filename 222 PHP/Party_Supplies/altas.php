<?php
    require_once 'conexion.php';

    $nombre = $_POST["nombre"];
    $precio = $_POST["precio"];
    $cantidad = $_POST["cantidad"];

    $query = "INSERT INTO Candies (nombre,
                                   precio,
                                   cantidad)
              VALUES('{$nombre}',
                      {$precio},
                      {$cantidad})";

    if($conexion->query($query) === TRUE)
        echo "Registro Guardado";
    else
        echo "Error: " . $conexion->error;
?>
