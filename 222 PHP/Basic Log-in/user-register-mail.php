<?php
    // output: /myproject/index.php
    $currentPath = $_SERVER['PHP_SELF'];

    // output: Array ( [dirname] => /myproject [basename] => index.php [extension] => php [filename] => index )
    $pathInfo = pathinfo($currentPath);

    // output: localhost
    $hostName = $_SERVER['HTTP_HOST'];

    // output: http://
    $protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,5))=='https://'?'https://':'http://';

    // return: http://localhost/myproject/
    $url = $protocol.$hostName.$pathInfo['dirname'];

	$subject = "Verificar correo :D";
	$message = "<html>
					<body>
						<h2>&#161;Bienvenid&#64; {$nombre}&#33;</h2>
						Tus datos han sido registrados. Termina tu registro confirmando tu direcci&oacute;n de correo electr&oacute;nico y creando una nueva contrase&ntilde;a. Para hacerlo sigue el link:
						<br><br>
						<a href='{$url}/password.php?id={$no_control}&hash={$contrasena}'>Finalizar tu registro</a>
						<br><br>
						&#191;El link no funciona&#63; Cont&aacute;ctate con el administrador de la p&aacute;gina.
					</body>
				</html>";
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
?>
