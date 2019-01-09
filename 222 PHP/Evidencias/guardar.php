<?php
    $index = 0;

    foreach($_FILES as $file)
    {
        $target_dir = "pictures/";
        $target_file = $target_dir . basename($file["name"]);
        $upload = "Ok";
        $image_file_type = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Check if file already exists
        if (file_exists($target_file))
        {
            echo "Sorry, file already exists.<br />";
            $upload = "Error";
        }

        // Check file size
        if ($file["size"] > 3000000)
        {
            echo "Sorry, your file is too large.<br />";
            $upload = "Error";
        }

        // Allow certain file formats
        if($image_file_type != "jpg" && $image_file_type != "png" && $image_file_type != "jpeg" && $image_file_type != "gif" )
        {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.<br />";
            $upload = "Error";
        }

        // Check if $upLoadOk is set to 0 by an error
        if ($upload == "Error")
        {
            die("Sorry, your file[$index] was not uploaded.");
            // if everything is ok, try to upload file
        }
        else
        {
            if (move_uploaded_file($file["tmp_name"], $target_file))
            {
                require_once "conexion.php";

                $alumno = $_POST['a'];
                $unidad = $_POST['u'];
                $trabajo = $_POST['t'];

                echo "The file " . basename($file["name"]) . " has been uploaded.";

                $query = "INSERT INTO Evidencias(alumno,
                                                 unidad,
                                                 trabajo,
                                                 imagen)
                                          VALUES($alumno,
                                                 $unidad,
                                                 $trabajo,
                                                '$target_file')";
                if(mysqli_query($conexion, $query))
                {
                    echo "Registro Guardado";
                }
                else
                {
                    echo "<br/><br/>$query<br/><br/>";
                    die("Error: ".mysqli_error($conexion));
                }
            }
            else
            {
                die("Sorry, there was an error uploading your file[$index].");
            }
        }

        $index++;
    }

    echo "<script>window.location.href='index.html'</script>";
?>
