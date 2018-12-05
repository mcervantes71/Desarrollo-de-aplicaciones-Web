<?php
    require_once "conexion.php";

    $id = $_GET["id"];

    $query = "DELETE FROM Regalos
              WHERE id_regalo = $id";

    if(mysqli_query($conexion, $query))
    {
        echo "Registro Borrado";
        header("Location:lista.php");
    }
    else
    {
        echo "Error: ".mysqli_error($conexion);
    }
    mysqli_close($conexion);
?>
