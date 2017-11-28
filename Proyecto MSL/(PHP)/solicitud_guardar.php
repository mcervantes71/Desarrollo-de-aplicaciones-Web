<?php
    require_once "conexion.php";
    
    $employee_id = $_POST["employee_id"];
    $start_date = $_POST["start_date"];
    $end_date = $_POST["end_date"];
    $return_date = $_POST["return_date"];
    $number_of_days = $_POST["number_of_days"];
    $type_of_leave = $_POST["type_of_leave"];
    
    if($conexion->connect_error)
    {
        die("Error".$conexion->connect_error);
    }
    else
    {
        $comando = "INSERT INTO Leave_requests
                       (employee_id,
                        start_date,
                        end_date,
                        return_date,
                        number_of_days,
                        type_of_leave,
                        status)
                    VALUES
                        ($employee_id,
                        '".$start_date."',
                        '".$end_date."',
                        '".$return_date."',
                         $number_of_days,
                        '".$type_of_leave."',
                        '0')";

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