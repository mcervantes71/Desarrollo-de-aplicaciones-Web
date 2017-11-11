<?php
    require_once "conexion.php";
    
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
        $comando = "INSERT INTO Employees
                       (first_name,
                        last_name,
                        email,
                        manager,
                        available_annual_leaves,
                        available_sick_leaves)
                    VALUES
                       ('".$first_name."',
                        '".$last_name."',
                        '".$email."',
                        '".$manager."',
                           3,
                           3)";

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