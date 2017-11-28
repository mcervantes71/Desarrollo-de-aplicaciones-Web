<?php
    require_once "conexion.php";
    
    $id = $_GET["id"];
    
    if($conexion->connect_error)
    {
        die("Error".$conexion->connect_error);
    }
    else
    {
        $comando = "DELETE FROM Employees
                    WHERE employee_id = $id";

        if($conexion->query($comando))
        {
            header("Location:index.php");
        }
        else
        {
            echo "Error: ".$conexion->error."<br /><a href='index.php'>Regresar</a>";
        }

        $conexion = null;
    }
?>