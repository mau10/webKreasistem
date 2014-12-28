<?php
	//conexion de la base de datos de Kreasistem
	//Mauricio Estrella
	//Enero 2015

	//Variables de conexion
	$vgservidor = "localhost";
	$vgusuario = "kreasist_admin";
	$vgclave = "Krea2013$";
	$vgbasedatos = "kreasist_krea";

	$conexion = mysql_connect($vgservidor,$vgusuario,$vgclave);
	// si falla da error
	if(!$conexion){
		echo "no conecta";
		die('Error al conectar a la BD: '.mysql_error());
	}	
	mysql_select_db($vgbasedatos,$conexion); 
?>