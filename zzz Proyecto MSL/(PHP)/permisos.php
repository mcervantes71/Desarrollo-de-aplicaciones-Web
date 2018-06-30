<!DOCTYPE html>
<html>
    <head>
        <title>Permisos</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
    </head>
    <body>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Empleados</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="permisos.php">Permisos</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <h1>Permisos</h1>

            <form action="formulario_solicitud.html">
                <button type="submit" class="btn btn-primary">Nuevo</button>
            </form>
            <?php
                require_once "conexion.php";

                if($conexion->connect_error)
                {
                    die("Error".$conexion->connect_error);
                }
                else
                {
                    $comando = "SELECT R.leave_request_id,
                                       E.first_name,
                                       E.last_name,
                                       R.number_of_days,
                                       R.type_of_leave,
                                       R.status
                                FROM Employees AS E
                                INNER JOIN Leave_requests AS R
                                ON E.employee_id = R.employee_id;";

                    $resultado = $conexion->query($comando);

                    if($resultado->num_rows > 0)
                    {

                        echo "<table class='table'>
                            <thead>
                                <tr>
                                    <th scope='col'>Id</th>
                                    <th scope='col'>Nombre</th>
                                    <th scope='col'>Apellido</th>
                                    <th scope='col'>#D&iacute;as</th>
                                    <th scope='col'><center>Tipo</center></th>
                                    <th scope='col'><center>Status</center></th>
                                    <th scope='col'></th>
                                    <th scope='col'></th>
                                </tr>
                            </thead>
                            <tbody>";
                        while($rows = $resultado->fetch_assoc())
                        {
                            $fila = "<tr>
                                        <td scope='row'>".$rows["leave_request_id"]."</td>
                                        <td>".$rows["first_name"]."</td>
                                        <td>".$rows["last_name"]."</td>
                                        <td><center>".$rows["number_of_days"]."</center></td>
                                        <td>".$rows["type_of_leave"]."</td>";

                            switch($rows["status"])
                            {
                                case 0:
                                    $rows["status"] = "Enviada";
                                    $fila = $fila . "<td><a href='formulario_comentario.php?id=".$rows["leave_request_id"]."' alt='Aprobar/Denegar' title='Aprobar/Denegar'>".$rows["status"]."</a></td>
                                                     <td><a href='formulario_solicitud_modificar.php?id=".$rows["leave_request_id"]."' alt='Modificar Solicitud' title='Modificar Solicitud'>Modificar</a></td>
                                                     <td><a href='solicitud_borrar.php?id=".$rows["leave_request_id"]."' alt='Borrar Solicitud' title='Borrar Solicitud'>Borrar</a></td>
                                                 </tr>";
                                    break;
                                case 1:
                                    $rows["status"] = "Aprobada";
                                    $fila = $fila . "<td><a href='solicitud_validar.php?id=".$rows["leave_request_id"]."' alt='Validar' title='Validar'>".$rows["status"]."</a></td>
                                                     <td></td>
                                                     <td></td>
                                                 </tr>";
                                    break;
                                case 2:
                                    $rows["status"] = "Denegada (Sup)";
                                    $fila = $fila . "<td>".$rows["status"]."</td>
                                                        <td><a href='formulario_solicitud_modificar.php?id=".$rows["leave_request_id"]."' alt='Modificar Solicitud' title='Modificar Solicitud'>Modificar</a></td>
                                                        <td></td>
                                                    </tr>";
                                    break;
                                case 3:
                                    $rows["status"] = "Denegada (RH)";
                                    $fila = $fila . "<td>".$rows["status"]."</td>
                                                        <td><a href='formulario_solicitud_modificar.php?id=".$rows["leave_request_id"]."' alt='Modificar Solicitud' title='Modificar Solicitud'>Modificar</a></td>
                                                        <td></td>
                                                    </tr>";
                                    break;
                                case 4:
                                    $rows["status"] = "Validada";
                                    $fila = $fila . "<td><strong>".$rows["status"]."</strong></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>";
                                    break;
                            }

                            echo $fila;
                        }
                        echo "</tbody></table>";
                    }
                    else
                    {
                        echo "0 Registros";
                    }

                    $conexion = null;
                }
            ?>
            <script src="js/jquery.min.js"></script>
            <script src="js/popper.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
        </div>
    </body>
</html>
