<!DOCTYPE html>
<html>
    <head>
        <title>Nueva Solicitud</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
        <div class="container">
            <h1>Nueva Solicitud</h1>
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
                                FROM Leave_requests
                                WHERE leave_request_id = $id";

                    $resultado = $conexion->query($comando);

                    if($resultado->num_rows == 1)
                    {
                        while($rows = $resultado->fetch_assoc())
                        {

                            echo "<form action='solicitud_modificar.php' method='POST'>
                                    <div class='form-group'>
                                        <label for='leave_request_id'>Id Solicitud</label>
                                        <input type='hidden' class='form-control' name='original_id' value='".$rows["leave_request_id"]."' />
                                        <input type='number' class='form-control' name='leave_request_id' value='".$rows["leave_request_id"]."' readonly />
                                    </div>
                                    <div class='form-group'>
                                        <label for='employee_id'>Id Empleado</label>
                                        <input type='number' class='form-control' name='employee_id' value='".$rows["employee_id"]."' />
                                    </div>
                                    <div class='form-group'>
                                        <label for='start_date'>Fecha del primer d&iacute;a</label>
                                        <input type='date' class='form-control' name='start_date' value='".$rows["start_date"]."' placeholder='AAAA-MM-DD' />
                                    </div>
                                    <div class='form-group'>
                                        <label for='end_date'>Fecha del &uacute;ltimo d&iacute;a</label>
                                        <input type='date' class='form-control' name='end_date' value='".$rows["end_date"]."' placeholder='AAAA-MM-DD' />
                                    </div>
                                    <div class='form-group'>
                                        <label for='return_date'>Fecha de regreso</label>
                                        <input type='date' class='form-control' name='return_date' value='".$rows["return_date"]."' placeholder='AAAA-MM-DD' />
                                    </div>
                                    <div class='form-group'>
                                        <label for='number_of_days'>N&uacute;mero de d&iacute;as</label>
                                        <select class='form-control' name='number_of_days'>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                    <div class='form-group'>
                                        <label for='type_of_leave'>Tipo de ausencia</label>
                                        <select class='form-control' name='type_of_leave'>
                                            <option>Vacaciones</option>
                                            <option>Enfermedad</option>
                                        </select>
                                    </div>
                                    <button type='submit' class='btn btn-primary'>Guardar</button>
                                    <button type='submit' class='btn btn-danger' formaction='permisos.php' formmethod='POST'>Cancelar</button>
                                </form>";
                        }
                    }
                    else
                    {
                        echo "Error: ".$conexion->error;
                    }
                    
                    $conexion = null;
                }
            ?>
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        </div>
    </body>
</html>