<?php
    require_once "conexion.php";

    $list = $_POST["list"];
    $name = $_POST["name"];
    $price = $_POST["price"];
    $desc = $_POST["desc"];

    $query = "INSERT INTO Regalos(nombre,
                                 descripcion,
                                 precio,
                                 lista)
                         VALUES('$name',
                                '$desc',
                                '$price',
                                '$list')";

    if(mysqli_query($conexion, $query))
    {
        echo "Registro Guardado";
        header("Location:lista.php");
    }
    else
    {
        echo "$query<br/><br/>";
        echo "Error: ".mysqli_error($conexion);
    }

    mysqli_close($conexion);
?>
