<?php
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $upload = "Ok";
    $image_file_type = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if file already exists
    if (file_exists($target_file))
    {
        echo "Sorry, file already exists.<br />";
        $upload = "Error";
    }

    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 3000000)
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
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    }
    else
    {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
        {
            echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
        }
        else
        {
            echo "Sorry, there was an error uploading your file.";
        }
    }
?>
