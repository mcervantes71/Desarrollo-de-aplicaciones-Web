<!DOCTYPE html>
<html>
    <head>
        <title>Nuevo Empleado</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
    </head>
    <body>
        <div class="container">
            <h1>Modificar Empleado</h1>
            <?php
                require_once "conexion.php";

                $id = $_GET["id"];

                if($conexion->connect_error)
                {
                    die("Error".$conexion->connect_error);
                }
                else
                {
                    $comando = "SELECT *
                                FROM Employees
                                WHERE employee_id = $id";

                    $resultado = $conexion->query($comando);

		    $rows = $resultado->fetch_assoc();

                    echo "<form action='empleado_modificar.php' method='POST'>
                              <div class='form-group'>
                                  <label for='employee_id'>Id Empleado</label>
                                  <input type='hidden' name='original_id' value='".$rows["employee_id"]."' />
                                  <input type='number' class='form-control' name='employee_id' value='".$rows["employee_id"]."' readonly/>
                              </div>
                              <div class='form-group'>
                                  <label for='first_name'>Nombre</label>
                                  <input type='text' class='form-control' name='first_name' value='".$rows["first_name"]."' onkeyup='validar_texto(this.value)' />
                              </div>
                              <div class='form-group'>
                                  <label for='last_name'>Apellido</label>
                                  <input type='text' class='form-control' name='last_name' value='".$rows["last_name"]."' onkeyup='validar_texto(this.value)' />
                              </div>
                              <div class='form-group'>
                                  <label for='email'>Correo</label>
                                  <input type='email' class='form-control' name='email' value='".$rows["email"]."' />
                              </div>
                              <div class='form-group'>
                                  <label for='manager'>Supervisor</label>
                                  <input type='text' class='form-control' name='manager' value='".$rows["manager"]."' onkeyup='validar_texto(this.value)' />
                              </div>
                              <button type='submit' class='btn btn-primary'>Guardar</button>
                              <button type='submit' class='btn btn-danger' formaction='index.php' formmethod='POST'>Cancelar</button>
                          </form>";

                    $conexion = null;
                }
            ?>
            <script src="js/jquery.min.js"></script>
            <script src="js/popper.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/script.js"></script>
        </div>
    </body>
</html>
