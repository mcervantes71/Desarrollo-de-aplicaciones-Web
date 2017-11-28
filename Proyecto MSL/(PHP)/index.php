<!DOCTYPE html>
<html>
    <head>
        <title>Empleados</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Empleados</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="permisos.php">Permisos</a>
                    </li>  
                </ul>
            </div>
            <form action="empleado_buscar.php" class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="number" name="id" class="form-control" placeholder="Buscar # Empleado">
                </div>
            </form>
        </nav>
        <div class="container">
            <h1>Empleados</h1>

            <form action="formulario_empleado.html">
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
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        </div>
    </body>
</html>