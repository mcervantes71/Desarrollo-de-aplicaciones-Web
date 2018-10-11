<?php
    $alumno = $_GET['alumno'];

    switch($alumno)
    {
        case 1:
            $nombre="ANDRADE ZUBIA EDUARDO";
            break;
        case 2:
            $nombre="ANGUIANO VAZQUEZ HECTOR DEL ANGEL";
            break;
        case 3:
            $nombre="BANDA MATA JOSUE";
            break;
        case 4:
            $nombre="CARRILLO GUERRA JOSE ANGEL";
            break;
        case 5:
            $nombre="CASTRO ORDU&Ntilde;O HECTOR MANUEL";
            break;
        case 6:
            $nombre="CHAVEZ ORTIZ JESZS ALEJANDRO";
            break;
        case 7:
            $nombre="FRAUSTO VILLANUEVA IRVING EDUARDO";
            break;
        case 8:
            $nombre="FRIAS VEGA LEONEL EDUARDO";
            break;
        case 9:
            $nombre="GAMEZ PULIDO MANUEL ALEJANDRO";
            break;
        case 10:
            $nombre="GARCIA CORTIS EDUARDO";
            break;
        case 11:
            $nombre="HERNANDEZ REYES JERSON AARON";
            break;
        case 12:
            $nombre="HERNANDEZ GARCIA JORGE IRVING";
            break;
        case 13:
            $nombre="JIMENEZ UGARTE ALEXIS RAMON";
            break;
        case 14:
            $nombre="LARES RAMIREZ JOSE MANUEL";
            break;
        case 15:
            $nombre="LOZOYA MADRID ISRAEL";
            break;
        case 16:
            $nombre="MARTINEZ VENTURA FRANCISCO ALBERTO";
            break;
        case 17:
            $nombre="MEJIA GUTIERREZ ALONSO NOE";
            break;
        case 18:
            $nombre="MU&Ntilde;OZ RIBOTA RAZL ADRIAN";
            break;
        case 19:
            $nombre="PORTILLO AGUILAR LUIS ANTONIO";
            break;
        case 20:
            $nombre="RENTERIA CARRERA ESAU JEFTE";
            break;
        case 21:
            $nombre="REYES LARA ELVIA SOFIA";
            break;
        case 22:
            $nombre="RODELA CONDE RENATO ALEXIS";
            break;
        case 23:
            $nombre="ROMERO RUIZ CESAR ALONSO";
            break;
        case 24:
            $nombre="TARANGO JIMENEZ RAYMUNDO";
            break;
        case 25:
            $nombre="VALADEZ GAMEZ MIGUEL ANGEL";
            break;
    }




    echo '<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <title>Programaci&oacute;n Estructurada</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="jumbotron">
                        <h1>' . $nombre . '</h1>
                        <p>Programaci&oacute;n Estructurada</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <table class="table table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>Unidad 1</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="trabajo.php?alumno='.$alumno.'&u=1&t=1">Conceptos b&aacute;sicos</a></td>
                            </tr>
                            <tr>
                                <td><a href="trabajo.php?alumno='.$alumno.'&u=1&t=2">Diagramas de flujo</a></td>
                            </tr>
                            <tr>
                                <td><a href="trabajo.php?alumno='.$alumno.'&u=1&t=3">Suma dos n&uacute;meros RAPTOR</a></td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>Unidad 2</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="trabajo.php?alumno='.$alumno.'&u=2&t=1" title="IDE, Identificadores, Palabras reservadas">IDE</a></td>
                            </tr>
                            <tr>
                                <td><a href="trabajo.php?alumno='.$alumno.'&u=2&t=2">Tipos de datos, variables y constantes</a></td>
                            </tr>
                            <tr>
                                <td><a href="trabajo.php?alumno='.$alumno.'&u=2&t=3" title="Operadores Aritmeticos, Relacionales y Logicos">Operadores</a></td>
                            </tr>
                            <tr>
                                <td><a href="trabajo.php?alumno='.$alumno.'&u=2&t=4">Jerarqu&iacute;a de operadores</a></td>
                            </tr>
                            <tr>
                                <td><a href="trabajo.php?alumno='.$alumno.'&u=2&t=5">Ejercicios con operadores (A y R)</a></td>
                            </tr>
                            <tr>
                                <td><a href="trabajo.php?alumno='.$alumno.'&u=2&t=6">Ejercicios con operadores (A, R, y L)</a></td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>Unidad 3</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="trabajo.php?alumno='.$alumno.'&u=3&t=1">Estructuras de control</a></td>
                            </tr>
                            <tr>
                                <td><a href="trabajo.php?alumno='.$alumno.'&u=3&t=2">Cuadro comparativo</a></td>
                            </tr>
                            <tr>
                                <td><a href="trabajo.php?alumno='.$alumno.'&u=3&t=3">Ejercicios del examen</a></td>
                            </tr>
                            <tr>
                                <td><a href="trabajo.php?alumno='.$alumno.'&u=3&t=4">Operaciones b&aacute;sicas</a></td>
                            </tr>
                            <tr>
                                <td><a href="trabajo.php?alumno='.$alumno.'&u=3&t=5">Promociones</a></td>
                            </tr>
                            <tr>
                                <td><a href="trabajo.php?alumno='.$alumno.'&u=3&t=6">si/no</a></td>
                            </tr>
                            <tr>
                                <td><a href="trabajo.php?alumno='.$alumno.'&u=3&t=7">Calificaciones a letras</a></td>
                            </tr>
                            <tr>
                                <td><a href="trabajo.php?alumno='.$alumno.'&u=3&t=8">N&uacute;mero, vocal o consonante</a></td>
                            </tr>
                            <tr>
                                <td><a href="trabajo.php?alumno='.$alumno.'&u=3&t=9">Calcular RT</a></td>
                            </tr>
                            <tr>
                                <td><a href="trabajo.php?alumno='.$alumno.'&u=3&t=10">Tablas de Mult</a></td>
                            </tr>
                            <tr>
                                <td><a href="trabajo.php?alumno='.$alumno.'&u=3&t=11">Factor-Limite</a></td>
                            </tr>
                            <tr>
                                <td><a href="trabajo.php?alumno='.$alumno.'&u=3&t=12">Tablas de Mult con Do-While</a></td>
                            </tr>
                            <tr>
                                <td><a href="trabajo.php?alumno='.$alumno.'&u=3&t=13">Factor-Limite con While</a></td>
                            </tr>
                            <tr>
                                <td><a href="trabajo.php?alumno='.$alumno.'&u=3&t=14">IMC</a></td>
                            </tr>
                            <tr>
                                <td><a href="trabajo.php?alumno='.$alumno.'&u=3&t=15">Sueldo</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>';
?>
