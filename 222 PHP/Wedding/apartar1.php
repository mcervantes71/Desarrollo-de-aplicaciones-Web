<?php
    require_once "conexion.php";

    $id = $_POST["id"];
    $who = $_POST["who"];

    if($who == "")
        $apartar = 0;
    else
        $apartar = 1;

    $query = "UPDATE Regalos
              SET apartado = $apartar,
                  quien = '".$who."'
              WHERE id_regalo = $id";

    if(mysqli_query($conexion, $query))
    {
        echo "Quedo apartado el regalo";
        echo "<script>window.location.href='index.php'</script>";
    }
    else
    {
        echo "$query<br/><br/>";
        echo "Error: ".mysqli_error($conexion);
    }

    mysqli_close($conexion);
?>
