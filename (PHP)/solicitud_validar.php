<?php
    require_once "conexion.php";
    
    $id = $_GET["id"];
    
    if($conexion->connect_error)
    {
        die("Error".$conexion->connect_error);
    }
    else
    {
        $comando = "UPDATE Leave_requests
                    SET status = '4'
                    WHERE leave_request_id = $id";

        if($conexion->query($comando))
        { 
            header("Location:permisos.php");
        }
        else
        {
            echo "Error: ".$conexion->error."<br /><a href='permisos.php'>Regresar</a>";
        }

        $conexion = null;
    }
?>