<?php
	$no_control = $_POST['no_control'];
	$contrasena = sha1($_POST['contrasena']);

	require_once("conexion.php");

	if (!$conexion)
	{
		die("Error: " . mysqli_connect_error());
	}
	else
	{
		echo "Conexi&oacute;n exitosa<br /><br /> ";

		$query = "UPDATE alumnos
		          SET contrasena = '$contrasena',
				      registro = '".date("M")."'
				  WHERE no_control=".$no_control;

		if(mysqli_query($conexion, $query))
		{
			echo "Registro Actualizado";
		}
		else
		{
			echo "Error: ".mysqli_error($conexion);
		}

		mysqli_close($conexion);
	}
?>
