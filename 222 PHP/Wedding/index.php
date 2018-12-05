<?php
    require_once "conexion.php";

    $list = $_POST["list"];

    if($list == 0)
    {
        $query = "SELECT *
                  FROM Regalos
                  WHERE apartado = 0";
    }
    else
    {
        $query = "SELECT *
                  FROM Regalos
                  WHERE apartado = 0
                  AND lista = $list";
    }

    $result = mysqli_query($conexion, $query);
?>
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

        <nav class="navbar navbar-light fixed-top bg-light mb-3">
            <div class="container">
                <a class="navbar-brand">H&M</a>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item text-muted">
                        <i class="fa fa-gift" aria-hidden="true"></i>
                        Mesa de Regalos
                    </li>
                </ul>
                <form class="form-inline ml-auto" action="index.php" method="POST">
                    <select name="list" onchange="this.form.submit()">
                        <?php
                            for($i = 0; $i <= 3; $i++)
                                if($list == $i)
                                    echo "<option value='$i' selected>$i</option>";
                                else
                                    echo "<option value='$i'>$i</option>";
                        ?>
                    </select>
               </form>
            </div>
        </nav>

        <div class="container pb-5">
            <div class="row mt-5 pt-5">
                <?php
                    if(mysqli_num_rows($result) > 0)
                    {
                        while($row = mysqli_fetch_assoc($result))
                        {
                            echo "<div class='card col-xl-3 col-lg-4 col-md-6 col-sm-12 pt-3 bg-light border border-primary'>
                                      <img class='card-img-top' src='https://source.unsplash.com/random/300x200' alt=''>
                                      <div class='card-body'>
                                          <h4 class='card-title'>".$row["nombre"]."</h4>
                                          <p class='card-text'>".$row["descripcion"]."</p>
                                          <a class='btn btn-info btn-block text-white' href='apartar.php?list=".$list."&id=".$row["id_regalo"]."'>
                                              <i class='fa fa-hand-o-right' aria-hidden='true'></i>
                                              Apartar
                                          </a>
                                      </div>
                                  </div>";
                        }
                    }
                    else
                    {
                        echo "<h6 class='text-center'>0 Registros</h6>";
                    }
                ?>
            </div>
        </div>

        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
