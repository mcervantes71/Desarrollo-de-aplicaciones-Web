<?php
    require_once "conexion.php";

    $leave_request_id = $_POST["leave_request_id"];
    $comment = $_POST["comment"];
    $status = $_POST["status"];

    if($conexion->error)
    {
        die("Error: ".$conexion->error);
    }
    else
    {
        $comando = "INSERT INTO Refusal_comments(leave_request_id, comment) VALUES($leave_request_id, '".$comment."')";

        if($conexion->query($comando))
        {
            $comando = "UPDATE Leave_requests SET status='".$status."' WHERE leave_request_id = $leave_request_id";

            if($conexion->query($comando))
            {
                header("Location:permisos.php");
            }
            else
            {
                echo "Error: ".$conexion->error;
            }
        }
        else
        {
            echo "Error: ".$conexion->error;
        }

        $conexion = null;
    }
?>