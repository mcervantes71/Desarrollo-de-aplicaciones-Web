<!DOCTYPE html>
<html>
    <head>
        <title>Empleados</title>
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
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Empleados</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="permisos.php">Permisos</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0" action="empleado_buscar.php">
                    <input class="form-control mr-sm-2" type="number" name="id" placeholder="Buscar # Empleado">
                </form>
            </div>
        </nav>
        <div class="container">
            <h1>Empleados</h1>

            <form action="formulario_empleado.html">
                <button type="submit" class="btn btn-primary">Nuevo</button>-
            </form>
            <?php
                require_once "conexion.php";

                if($conexion->connect_error)
                {
                    die("Error".$conexion->connect_error);
                }
                else
                {
                    $comando = "SELECT *
                                FROM Employees";

                    $resultado = $conexion->query($comando);

                    if($resultado->num_rows > 0)
                    {

                        echo "<table class='table'>
                            <thead>
                                <tr>
                                    <th scope='col'>Id</th>
                                    <th scope='col'>Nombre</th>
                                    <th scope='col'>Apellido</th>
                                    <th scope='col'>Correo</th>
                                    <th scope='col'></th>
                                    <th scope='col'></th>
                                </tr>
                            </thead>
                            <tbody>";
                        while($rows = $resultado->fetch_assoc())
                        {
                            echo "<tr>
                                    <td scope='row'>".$rows["employee_id"]."</td>
                                    <td>".$rows["first_name"]."</td>
                                    <td>".$rows["last_name"]."</td>
                                    <td>".$rows["email"]."</td>
                                    <td><a href='formulario_empleado_modificar.php?id=".$rows["employee_id"]."' alt='Modificar Empleado' title='Modificar Empleado'>Modificar</a></td>
                                    <td><a href='empleado_borrar.php?id=".$rows["employee_id"]."' alt='Borrar Empleado' title='Borrar Empleado'>Borrar</a></td>
                                </tr>";
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
