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

    if(basename($_FILES["picture"]["name"]) == "")
    {
        $query = "UPDATE Regalos
                  SET nombre = '".$name."',
                      descripcion = '".$desc."',
                      precio = '".$price."',
                      lista = '".$list."',
                      quien = '".$who."',
                      apartado = $apartado
                  WHERE id_regalo = $id";
    }
    else
    {
        $target_dir = "pictures/";
        $target_picture = $target_dir . basename($_FILES["picture"]["name"]);
        $upload = "Ok";
        $picture_file_type = strtolower(pathinfo($target_picture,PATHINFO_EXTENSION));

        // Check if file already exists
        if (file_exists($target_picture))
        {
            echo "Lo sentimos, el archivo ya existe.<br />";
            $upload = "Error";
        }

        // Check file size
        if ($_FILES["picture"]["size"] > 3000000)
        {
            echo "Lo sentimos, tu archivo es demasiado grande.<br />";
            $upload = "Error";
        }

        // Allow certain file formats
        if($picture_file_type != "jpg" && $picture_file_type != "png" && $picture_file_type != "jpeg" && $picture_file_type != "gif" )
        {
            echo "Lo sentimos, solo se permiten archivos JPG, JPEG, PNG y GIF.<br />";
            $upload = "Error";
        }

        // Check if $upload is set to Error by an error
        if ($upload == "Error")
        {
            die("Lo sentimos, tu archivo no fue subido.");

        }
        else     // if everything is ok, try to upload file
        {
            if (move_uploaded_file($_FILES["picture"]["tmp_name"], $target_picture))
            {
                $query = "UPDATE Regalos
                          SET nombre = '".$name."',
                              descripcion = '".$desc."',
                              precio = '".$price."',
                              imagen = '".$target_picture."',
                              lista = '".$list."',
                              quien = '".$who."',
                              apartado = $apartado
                          WHERE id_regalo = $id";
            }
            else
            {
                die("Lo sentimos, hubo un error al subir tu archivo.");
            }
        }
    }

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
