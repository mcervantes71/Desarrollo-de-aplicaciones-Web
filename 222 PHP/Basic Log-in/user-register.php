<?php
	$no_control = $_POST['no_control'];
	$nombre = $_POST['nombre'];
	$paterno = $_POST['paterno'];
	$materno = $_POST['materno'];
	$correo = $_POST['correo'];
	$contrasena = sha1(rand());

	require_once("user-register-mail.php");

	require_once("conexion.php");

	echo "Conexi&oacute;n exitosa<br /><br /> ";

	$query = "SELECT *
	          FROM alumnos
			  WHERE no_control ={$no_control}
			  AND registro ='0'";

	$result = $conexion->query($query);

	if ($result->num_rows == 1)
	{
		$query = "UPDATE alumnos
		          SET nombre = '{$nombre}',
				      paterno = '{$paterno}',
					  materno = '{$materno}',
					  correo = '{$correo}',
					  contrasena = '{$contrasena}'
				  WHERE no_control = {$no_control}";

		if($conexion->query($query) === TRUE)
		{
			echo "Registro guardado<br /><br /> ";

			mail($correo, $subject, $message, $headers);
		}
		else
		{
			echo "Error: " . $conexion->error;
		}
	}
	else
	{
		echo "0 Registros";
	}

	$conexion = null;
?>
