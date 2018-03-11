<?php
	$no_control = $_POST['usuario'];
	$contrasena = sha1($_POST['contrasena']);
	
	require_once("conexion.php");
	
	if (!$conexion)
	{
		die("Error: " . mysqli_connect_error());
	}
	else
	{
		echo "Conexi&oacute;n exitosa<br /><br /> ";
		
		$query = "SELECT * FROM alumnos WHERE no_control =$no_control && contrasena = '$contrasena'";

		$result = mysqli_query($conexion, $query);

		if (mysqli_num_rows($result) == 1)
		{
			while($row = mysqli_fetch_assoc($result))
			{
				echo "No Control: " . $row["no_control"]. "<br>Nombre: " . $row["nombre"]. "<br>Apellido: " . $row["paterno"]." ". $row["materno"]. "<br />";
			}
		}
		else
		{
			echo "0 Registros";
		}
		
		mysqli_close($conexion);
	}
?>