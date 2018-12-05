<?php
    require_once "conexion.php";

    $id = $_POST["id"];
    $list = $_POST["list"];
    $name = $_POST["name"];
    $price = $_POST["price"];
    $desc = $_POST["desc"];
    $who = $_POST["who"];

    if($who == "")
        $apartado = 0;
    else
        $apartado = 1;

    $query = "UPDATE Regalos
              SET nombre = '".$name."',
                  descripcion = '".$desc."',
                  precio = '".$price."',
                  lista = '".$list."',
                  quien = '".$who."',
                  apartado = $apartado
              WHERE id_regalo = $id";

    if(mysqli_query($conexion, $query))
    {
        echo "Registro Modificado";
        header("Location:lista.php");
    }
    else
    {
        echo "$query<br/><br/>";
        echo "Error: ".mysqli_error($conexion);
    }

    mysqli_close($conexion);
?>
