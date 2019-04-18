<?php
	$no_control = $_POST['no_control'];
	$nombre = $_POST['nombre'];
	$paterno = $_POST['paterno'];
	$materno = $_POST['materno'];
	$correo = $_POST['correo'];
	$contrasena = sha1(rand());

	require_once("user-register-mail.php");

	require_once("conexion.php");

	if (!$conexion)
	{
		die("Error: " . mysqli_connect_error());
	}
	else
	{
		echo "Conexi&oacute;n exitosa<br /><br /> ";

		$query = "SELECT *
		          FROM alumnos
				  WHERE no_control =$no_control
				  AND registro ='0'";

		$result = mysqli_query($conexion, $query);

		if (mysqli_num_rows($result) == 1)
		{
			$query = "UPDATE alumnos
			          SET nombre = '$nombre',
					      paterno = '$paterno',
						  materno = '$materno',
						  correo = '$correo',
						  contrasena = '$contrasena'
					  WHERE no_control = ".$no_control;

			if(mysqli_query($conexion, $query))
			{
				echo "Registro guardado<br /><br /> ";

				mail($correo, $subject, $message, $headers);
			}
			else
			{
				echo "Error: ".mysqli_error($conexion);
			}
		}
		else
		{
			echo "0 Registros";
		}

		mysqli_close($conexion);
	}
?>
