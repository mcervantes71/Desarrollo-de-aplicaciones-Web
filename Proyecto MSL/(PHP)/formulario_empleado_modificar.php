<!DOCTYPE html>
<html>
    <head>
        <title>Nuevo Empleado</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css" />
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
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	    <script src="script.js"></script>
        </div>
    </body>
</html>