<?php
	$no_control = $_POST['no_control'];
	$contrasena = sha1($_POST['contrasena']);

	require_once("conexion.php");

	echo "Conexi&oacute;n exitosa<br /><br /> ";

	$query = "UPDATE alumnos
	          SET contrasena = '{$contrasena}',
			      registro = '".date("M")."'
			  WHERE no_control={$no_control}";

	if($conexion->query($query) === TRUE)
	{
		echo "Registro Actualizado";
	}
	else
	{
		echo "Error: " . $conexion->error;
	}

	$conexion = null;
?>
