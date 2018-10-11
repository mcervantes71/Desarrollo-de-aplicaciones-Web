<?php
    $alumno = $_POST['a'];
    $unidad = $_POST['u'];
    $trabajo = $_POST['t'];


echo $alumno.$unidad.$trabajo."---";

    function subir_fichero($directorio_destino, $nombre_fichero)
    {
        $tmp_name = $_FILES[$nombre_fichero]['tmp_name'];

        if (is_dir($directorio_destino) && is_uploaded_file($tmp_name))
        {
            $img_file = $_FILES[$nombre_fichero]['name'];
            $img_type = $_FILES[$nombre_fichero]['type'];
            echo "...1";

            if (((strpos($img_type, "gif") || strpos($img_type, "jpeg") || strpos($img_type, "jpg")) || strpos($img_type, "png")))
            {
                echo "...2";
                if (move_uploaded_file($tmp_name, $directorio_destino . '/' . $img_file))
                {
                    return true;
                }
            }
        }
        return false;
    }

    if(!empty($_POST['File1']))
    {
        if (subir_fichero($alumno, $_POST['File1']))
             echo 'Archivo recibido correctamente';
    }


?>
