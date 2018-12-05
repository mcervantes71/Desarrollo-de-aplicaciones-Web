<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>Nuestra Boda</title>

        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="container pb-5">

            <h1 class="m-5 text-center border-bottom border-primary">Lista de Regalos</h1>

            <?php
                require_once "conexion.php";

                $query = "SELECT *
                          FROM Regalos
                          ORDER BY apartado DESC";

                $result = mysqli_query($conexion, $query);

                echo '<a class="btn btn-primary m-2" href="agregar.php">Agregar</a>';

                if(mysqli_num_rows($result) > 0)
                {

                    echo '<table class="table">
                              <tr>
                                  <th>Nombre</th>
                                  <th class="text-center" >Apartado</th>
                                  <th>...</th>
                              </tr>';

                    while($row = mysqli_fetch_assoc($result))
                    {
                        echo "<tr>
                                  <td>".$row["nombre"]."</td>
                                  <td class='text-center'>".$row["apartado"]."</td>
                                  <td>
                                      <a class='m-1' title='Borrar' href='borrar.php?id=".$row["id_regalo"]."'>
                                          <i class='fa fa-trash' aria-hidden='true'></i>
                                      </a>
                                      <a class='m-1' title='Editar' href='modificar.php?id=".$row["id_regalo"]."'>
                                          <i class='fa fa-pencil' aria-hidden='true'></i>
                                      </a>
                                  </td>
                              </tr>";
                    }
                    echo '</table>';
                }
                else
                {
                    echo "<h6 class='text-center'>0 Registros</h6>";
                }
                mysqli_close($conexion);
            ?>
        </div>

        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
