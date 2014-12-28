<?php
	session_start();
	//conexion a la base de datos
	require 'conex.php';
	require 'lib/seguridad.php';

	//obtener variables
	$vusuario = strtoupper($_POST['vusuario']);
	$vcontrasena = strtoupper($_POST['vcontrasena']);

	//consulta
	$consulta = "SELECT * FROM tusuario WHERE usrcodigo = '$vusuario';";
	//ejecutar consulta
	$resultado = mysql_query($consulta,$conexion);
	//repasar resultados
	while ($fila = mysql_fetch_array($resultado)){
		$vusrcodigobd = $fila['usrcodigo'];
		$vusrclavebd = $fila['usrclave'];
		$vusrpermisobd = $fila['usrpermiso'];
		$vusrnombrebd = $fila['usrnombre'];
		if ($vcontrasena == $vusrclavebd) {
			//si es positivo, asigna
			$_SESSION['usuario'] = $vusuario;
			$_SESSION['contrasena'] = $vcontrasena;
			$_SESSION['usrpermiso'] = $vusrpermisobd;
			$_SESSION['usrnombre'] = $vusrnombrebd;
			// si es usuario 2 va a ingreso de reportes
			// si es usuario 3 va a consulta de reportes aprobados
			if ($vusrpermisobd == 2) {
				echo'
					<html>
						<head>
							<meta http-equiv="REFRESH" content="0;url=principal.php">
						</head>
					</html>
				';
			}elseif ($vusrpermisobd == 3) {
				echo'
					<html>
						<head>
							<meta http-equiv="REFRESH" content="0;url=consulta.php">
						</head>
					</html>
				';
			}elseif ($vusrpermisobd == 1) {
				echo'
					<html>
						<head>
							<meta http-equiv="REFRESH" content="0;url=usradm.php">
						</head>
					</html>
				';
			}

		}else{
			echo "Usuario no existe o Clave mal ingresada....";
		}
	}
	// cerrar datos
	mysql_close($conexion);
?>