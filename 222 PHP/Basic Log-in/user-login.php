<?php
	$no_control = $_POST['usuario'];
	$contrasena = sha1($_POST['contrasena']);

	require_once("conexion.php");

	echo "Conexi&oacute;n exitosa<br /><br /> ";

	$query = "SELECT *
	          FROM alumnos
			  WHERE no_control ={$no_control}
			  AND contrasena = '{$contrasena}'";

	$result = $conexion->query($query);

	if ($result->num_rows == 1)
	{
		while($row = $result->fetch_assoc())
		{
			echo "No Control: " . $row["no_control"]. "<br>Nombre: " . $row["nombre"]. "<br>Apellido: " . $row["paterno"]." ". $row["materno"]. "<br />";
		}
	}
	else
	{
		echo "0 Registros";
	}

	$conexion = null;
?>
