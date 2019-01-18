<?php
    require_once "conexion.php";

    $id = $_GET["id"];

    $query = "SELECT *
              FROM Regalos
              WHERE id_regalo = $id";

    $result = mysqli_query($conexion, $query);

    $row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>Nuestra Boda</title>

        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
        <div class="container pb-5">

            <h1 class="m-5 text-center border-bottom border-primary">Modificar Regalo</h1>

            <form action="modificar1.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <input name="id" type="hidden" value="<?php echo $id; ?>">
                    <div class="form-group col-lg-6 col-xs-12">
                        <label for="list">Lista</label>
                        <select id="list" name="list" class="form-control">
                            <?php
                                for($i = 1; $i <= 3; $i++)
                                    if($row["lista"] == $i)
                                        echo "<option value='".$i."' selected>".$i."</option>";
                                    else
                                        echo "<option value='".$i."'>".$i."</option>";
                            ?>
                        </select>
                    </div>

                    <div class="form-group col-lg-6 col-xs-12">
                        <label for="picture">Imagen:</label>
                        <input id="picture" name="picture" class="form-control-file" type="file">
                        <small id="pictureHelp" class="form-text text-muted" >Max. 3 MB</small>
                    </div>

                    <div class="form-group col-lg-6 col-xs-12">
                        <label for="name">Nombre:</label>
                        <input id="name" name="name" class="form-control" type="text" value="<?php echo $row["nombre"]; ?>" placeholder="Ingresar Nombre" maxlength="20">
                    </div>

                    <div class="form-group col-lg-6 col-xs-12">
                        <label for="price">Precio:</label>
                        <input id="price" name="price" class="form-control" type="number" value="<?php echo $row["precio"]; ?>" placeholder="Ingresar Precio" maxlength="5">
                    </div>

                    <div class="form-group col-lg-6 col-xs-12">
                        <label for="desc">Descripci&oacute;n:</label>
                        <textarea id="desc" name="desc" class="form-control" rows="3" ><?php echo $row["descripcion"]; ?></textarea>
                    </div>

                    <div class="form-group col-lg-6 col-xs-12">
                        <label for="who">Qui&eacute;n aparta el regalo ??:</label>
                        <input id="who" name="who" class="form-control" type="text" value="<?php echo $row["quien"]; ?>" placeholder="Ingresar Nombre" maxlength="20">
                    </div>
                </div>
                <div class="row">
                    <button class="btn btn-danger m-2" formaction="lista.php">Cancelar</button>
                    <input class="btn btn-primary m-2" type="submit" value="Guardar">

                </div>
            </form>
        </div>

        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
