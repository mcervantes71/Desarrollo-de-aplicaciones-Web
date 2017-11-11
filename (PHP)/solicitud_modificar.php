<?php
    require_once "conexion.php";
    
    $original_id = $_POST["original_id"];
    $leave_request_id = $_POST["leave_request_id"];
    $employee_id = $_POST["employee_id"];
    $start_date = $_POST["start_date"];
    $end_date = $_POST["end_date"];
    $return_date = $_POST["return_date"];
    $number_of_days = $_POST["number_of_days"];
    $type_of_leave = $_POST["type_of_leave"];
    
    if($conexion->connet_error)
    {
        die("Error".$conexion->connect_error);
    }
    else
    {
        $comando = "UPDATE Leave_requests SET leave_request_id = $leave_request_id, employee_id = $employee_id, start_date = '".$start_date."', end_date = '".$end_date."', return_date = '".$return_date."', number_of_days = $number_of_days, type_of_leave = '".$type_of_leave."', status='0' WHERE leave_request_id = $original_id";

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