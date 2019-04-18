<?php
	//-----------
	// URL  ?id=91645&hash=7c4a8d09ca3762af61e59520943dc26494f8941b
	//-----------

	$no_control = $_GET['id'];
	$contrasena = $_GET['hash'];

	require_once("conexion.php");

	if (!$conexion)
	{
		die("Error: " . mysqli_connect_error());
	}
	else
	{
		$query = "SELECT *
		          FROM alumnos
				  WHERE no_control =$no_control
				  AND contrasena = '$contrasena';";

		$result = mysqli_query($conexion, $query);

		if (mysqli_num_rows($result) == 1)
		{
		?>
			<!DOCTYPE html>
			<html>
			  <head>
				<meta charset = "UTF-8">
				 <title>Contrase&ntilde;a</title>
				 <link rel = "shortcut icon" href = "http://v2.iconizer.net/files/Nuvola/orig/package_edutainment.png" />
				 <link rel = "icon" type = "image/ico" href = "http://v2.iconizer.net/files/Nuvola/orig/package_edutainment.png" />
				 <link rel = "stylesheet" href = "css/style.css">
			  </head>
			  <body>
				<div class = "login-page">
					<div class = "form">
						<form name = "password-form" class = "login-form" method = "post" action = "user-password.php" onsubmit = "return validacion_login()">
							<input type="hidden" name="no_control" value="<?php echo $no_control; ?>">
							<input type = "password" name = "contrasena" tabindex = "1" maxlength = "15" placeholder = "Contrase&ntilde;a" />
							<input type = "password" name = "contrasena1" tabindex = "2" maxlength = "15" placeholder = "Verificar" />
							<button tabindex = "3" >Guardar</button>
						</form>
					</div>
				</div>
				<script>
					function validacion_login()
					{
						var con1 = document.forms["password-form"]["contrasena"].value;
						var con2 = document.forms["password-form"]["contrasena1"].value;

						if(con1 == null || con1.length == 0 || /^\s+$/.test(con1))
						{
							alert("Error Contrase\xF1a");
							return false;
						}
						else if(con2 == null || con2.length == 0 || /^\s+$/.test(con2))
						{
							alert("Error Verificar");
							return false;
						}
						else if(con1 != con2)
						{
							alert("La contrase\xF1a y la confirmaci&oacute;n no coinciden");
							return false;
						}
					}
				</script>
			  </body>
			</html>
		<?php
		}
		else
		{
			echo "<script type='text/javascript'>alert('Error: Datos incorrectos.');
				  location.href = '/utcj/';
				  </script>";
		}

		mysqli_close($conexion);
	}
?>
