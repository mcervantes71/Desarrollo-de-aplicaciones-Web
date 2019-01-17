<?php
    require_once "conexion.php";

    $id = $_GET["id"];

    $query = "SELECT * FROM Regalos
              WHERE id_regalo = $id";

    $row = mysqli_fetch_assoc(mysqli_query($conexion, $query));

    if(unlink($row["imagen"]))
    {
        $query = "DELETE FROM Regalos
                  WHERE id_regalo = $id";

        if(mysqli_query($conexion, $query))
        {
            echo "Registro Borrado";
            echo "<script>window.location.href='lista.php'</script>";
        }
        else
        {
            echo "Error: ".mysqli_error($conexion);
        }
    }
    else
    {
        echo "Error: No se pudo borrar la imagen.";
    }
    
    mysqli_close($conexion);
?>
