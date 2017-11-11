<?php
    require_once "conexion.php";
    
    $original_id = $_POST["original_id"];
    $employee_id = $_POST["employee_id"];
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $manager = $_POST["manager"];
    
    if($conexion->connet_error)
    {
        die("Error".$conexion->connect_error);
    }
    else
    {
        $comando = "UPDATE Employees
                    SET employee_id = $employee_id,
                        first_name = '".$first_name."',
                        last_name = '".$last_name."',
                        email = '".$email."',
                        manager = '".$manager."'
                    WHERE employee_id = $original_id";

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