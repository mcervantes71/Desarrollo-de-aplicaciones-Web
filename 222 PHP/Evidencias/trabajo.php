<?php
    $alumno = $_GET['alumno'];
    $unidad = $_GET['u'];
    $trabajo = $_GET['t'];


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


    if($unidad == 1 && $trabajo == 1) $nom_trabajo = "Conceptos b&aacute;sicos";
    else if($unidad == 1 && $trabajo == 2) $nom_trabajo = "Diagramas de flujo";
    else if($unidad == 1 && $trabajo == 3) $nom_trabajo = "Suma dos n&uacute;meros RAPTOR";
    else if($unidad == 2 && $trabajo == 1) $nom_trabajo = "IDE";
    else if($unidad == 2 && $trabajo == 2) $nom_trabajo = "Tipos de datos, variables y constantes";
    else if($unidad == 2 && $trabajo == 3) $nom_trabajo = "Operadores";
    else if($unidad == 2 && $trabajo == 4) $nom_trabajo = "Jerarqu&iacute;a de operadores";
    else if($unidad == 2 && $trabajo == 5) $nom_trabajo = "Ejercicios con operadores (A y R)";
    else if($unidad == 2 && $trabajo == 6) $nom_trabajo = "Ejercicios con operadores (A, R, y L)";
    else if($unidad == 3 && $trabajo == 1) $nom_trabajo = "Estructuras de control";
    else if($unidad == 3 && $trabajo == 2) $nom_trabajo = "Cuadro comparativo";
    else if($unidad == 3 && $trabajo == 3) $nom_trabajo = "Ejercicios del examen";
    else if($unidad == 3 && $trabajo == 4) $nom_trabajo = "Operaciones b&aacute;sicas";
    else if($unidad == 3 && $trabajo == 5) $nom_trabajo = "Promociones";
    else if($unidad == 3 && $trabajo == 6) $nom_trabajo = "si/no";
    else if($unidad == 3 && $trabajo == 7) $nom_trabajo = "Calificaciones a letras";
    else if($unidad == 3 && $trabajo == 8) $nom_trabajo = "N&uacute;mero, vocal o consonante";
    else if($unidad == 3 && $trabajo == 9) $nom_trabajo = "Calcular RT";
    else if($unidad == 3 && $trabajo == 10) $nom_trabajo = "Tablas de Mult";
    else if($unidad == 3 && $trabajo == 11) $nom_trabajo = "Factor-Limite";
    else if($unidad == 3 && $trabajo == 12) $nom_trabajo = "Tablas de Mult con Do-While";
    else if($unidad == 3 && $trabajo == 13) $nom_trabajo = "Factor-Limite con While";
    else if($unidad == 3 && $trabajo == 14) $nom_trabajo = "IMC";
    else if($unidad == 3 && $trabajo == 15) $nom_trabajo = "Sueldo";


$pagina = '<!DOCTYPE html>
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
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th>Unidad '.$unidad.' - '.$nom_trabajo.'</th>
                            </tr>
                        </thead>
                    </table>
                    <form action="guardar.php" method="POST" enctype="multipart/form-data" onsubmit="return validate()">
                        <div class="form-group">
                            <input name="a" class="form-control" type="hidden" value="'.$alumno.'">
                        </div>
                        <div class="form-group">
                            <input name="u" class="form-control" type="hidden" value="'.$unidad.'">
                        </div>
                        <div class="form-group">
                            <input name="t" class="form-control" type="hidden" value="'.$trabajo.'">
                        </div>
                        <div class="form-group">
                            <label for="file1">Evidencia:</label>
                            <input id="file1" name="file1" class="form-control-file" type="file">
                        </div>';
if($unidad == 3)
    $pagina .= '<div class="form-group">
                            <label for="file2">C&oacute;digo Fuente:</label>
                            <input id="file2" name="file2" class="form-control-file" type="file">
                        </div>';


$pagina .= '<input class="btn btn-primary" type="submit" value="Enviar">
                    </form>
                </div>
            </div>
        </div>

        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script>
            function validate(){
                var file1 = document.getElementById("file1");

                if(file1.value == "")
                {
                    alert("No se ha seleccionado el archivo 1");
                    return false;
                }';

if($unidad == 3)
    $pagina .= 'var file2 = document.getElementById("file2");

                if(file2.value == "")
                {
                    alert("No se ha seleccionado el archivo 2");
                    return false;
                }';

$pagina .= 'return true;
            }
        </script>
    </body>
</html>';

echo $pagina;
?>
