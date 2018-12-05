<?php
    require_once "conexion.php";

    $list = $_GET["list"];
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
        <div class="container">

            <h1 class="m-5 text-center border-bottom border-primary">Apartar Regalo</h1>

            <form action="apartar1.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $id; ?>" >
                <div class="row">
                    <div class="form-group col-lg-6 col-xs-12">
                        <label for="name">Nombre:</label>
                        <input id="name" name="name" class="form-control" type="text" value="<?php echo $row["nombre"]; ?>" maxlength="20" readonly>
                    </div>

                    <div class="form-group col-lg-6 col-xs-12">
                        <label for="who">Qui&eacute;n aparta el regalo ??</label>
                        <input id="who" name="who" class="form-control" type="text" maxlength="20">
                    </div>
                </div>
                <div class="row">
                    <button class="btn btn-danger m-2" formaction="index.php">Cancelar</button>
                    <input class="btn btn-primary m-2" type="submit" value="Apartar">

                </div>
            </form>
        </div>

        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
