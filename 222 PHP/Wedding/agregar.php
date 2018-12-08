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
        <div class="container pb-5">

            <h1 class="m-5 text-center border-bottom border-primary">Agregar Regalo</h1>

            <form class="needs-validation" action="agregar1.php" method="POST" novalidate>
                <div class="row">
                    <div class="form-group col-lg-6 col-xs-12">
                        <label for="list">Lista</label>
                        <select id="list" name="list" class="form-control" required>
                            <option value=""></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                        <div class="invalid-feedback">
                            Falta especificar la lista a la que pertenece el regalo.
                        </div>
                    </div>

                    <div class="form-group col-lg-6 col-xs-12">
                        <label for="file">Imagen:</label>
                        <input id="file" name="file" class="form-control-file" type="file" required>
                        <small id="fileHelp" class="form-text text-muted" >Max 3MB</small>
                        <div class="invalid-feedback">
                            Falta especificar la imagen del regalo.
                        </div>
                    </div>

                    <div class="form-group col-lg-6 col-xs-12">
                        <label for="name">Nombre:</label>
                        <input id="name" name="name" class="form-control" type="text" placeholder="Ingresar Nombre" maxlength="20" required>
                        <div class="invalid-feedback">
                            Falta especificar el nombre del regalo.
                        </div>
                    </div>

                    <div class="form-group col-lg-6 col-xs-12">
                        <label for="price">Precio:</label>
                        <input id="price" name="price" class="form-control" type="number" placeholder="Ingresar Precio" maxlength="5" required>
                        <div class="invalid-feedback">
                            Falta especificar el precio del regalo.
                        </div>
                    </div>

                    <div class="form-group col-lg-6 col-xs-12">
                        <label for="desc">Descripci&oacute;n:</label>
                        <textarea id="desc" name="desc" class="form-control" rows="3" required></textarea>
                        <div class="invalid-feedback">
                            Es recomendado incluir una descripci&oacute;n del regalo.
                        </div>
                    </div>
                </div>
                <div class="row">
                    <a class="btn btn-danger m-2" href="lista.php">Cancelar</a>
                    <input class="btn btn-primary m-2" type="submit" value="Guardar">

                </div>
            </form>
        </div>

        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>
