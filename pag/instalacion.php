<?php
	//BASE DE DATOS PARA USUARIOS KREASISTEM
	echo "CONECTA A LA BD";

	//conexion a la base de datos
	require 'conex.php';

//*************************************************
	/*
	// CREAR BASE DE DATOS

		if (mysql_query("CREATE DATABASE kreasist_krea",$conexion)) {
			echo "Se ha creado la base de datos KREA";
		}
		else{
			echo "No se ha podido crear la base de datos KREA por el siguiente error: ".mysql_error();
		}
	*/	

//*************************************************
	//TABLA TUSUARIO
	$sql = "DROP TABLE tusuario";
	mysql_query($sql,$conexion);
	$sql = "CREATE TABLE tusuario
	(
		usrcodigo varchar(25) NOT NULL, PRIMARY KEY(usrcodigo),
		usrnombre varchar(50) NOT NULL,
		usrclave varchar(25) NOT NULL,
		usrempresa varchar(30),
		usrpermiso int
	)";
	$creatabla=mysql_query($sql,$conexion);
	if(!$creatabla){
		echo "Error al crear la tabla";
	}else{
		echo "La tabla se creo correctamente";
	}
	// insert registros
	mysql_query("INSERT INTO tusuario (usrcodigo,usrnombre, usrclave, usrempresa,usrpermiso)
		VALUES ('MESTRELLA','Mauricio Estrella','MESTRELLA2015$','KREASISTEM',1)");
	mysql_query("INSERT INTO tusuario (usrcodigo,usrnombre, usrclave, usrempresa,usrpermiso)
		VALUES ('FNUNEZ','Francisco Nuñez','FNUNEZ2015$','COLVIDA',2)");
	mysql_query("INSERT INTO tusuario (usrcodigo,usrnombre, usrclave, usrempresa,usrpermiso)
		VALUES ('AHERNANDEZ','Alexandra Hernandez','AHERNANDEZ2015$','COLVIDA',2)");
	mysql_query("INSERT INTO tusuario (usrcodigo,usrnombre, usrclave, usrempresa,usrpermiso)
		VALUES ('FGARZON','Fernanda Garzón','FGARZON2015$','COLVIDA',2)");
	mysql_query("INSERT INTO tusuario (usrcodigo,usrnombre, usrclave, usrempresa,usrpermiso)
		VALUES ('GTIPAN','Geovanna Tipán','GTIPAN2015$','COLVIDA',2)");
	mysql_query("INSERT INTO tusuario (usrcodigo,usrnombre, usrclave, usrempresa,usrpermiso)
		VALUES ('BPLAZAS','Bertha Plazas','BPLAZAS2015$','FICAL',2)");
	mysql_query("INSERT INTO tusuario (usrcodigo,usrnombre, usrclave, usrempresa,usrpermiso)
		VALUES ('IVILLACIS','Irene Villacis','IVILLACISS2015$','FICAL',2)");
	mysql_query("INSERT INTO tusuario (usrcodigo,usrnombre, usrclave, usrempresa,usrpermiso)
		VALUES ('GESPINOSA','Gabriela Espinosa','GESPINOSA2015$','FICAL',2)");
	mysql_query("INSERT INTO tusuario (usrcodigo,usrnombre, usrclave, usrempresa,usrpermiso)
		VALUES ('GMANTILLA','Glenda Mantilla','GMANTILLA2015$','INVMETALS',2)");
	mysql_query("INSERT INTO tusuario (usrcodigo,usrnombre, usrclave, usrempresa,usrpermiso)
		VALUES ('JUNAPANTA','Julissa Unapanta','JUNAPANTA2015$','INVMETALS',2)");
	mysql_query("INSERT INTO tusuario (usrcodigo,usrnombre, usrclave, usrempresa,usrpermiso)
		VALUES ('PMERIZALDE','Paola Merizalde','PMERIZALDE2015$','INVMETALS',2)");
	mysql_query("INSERT INTO tusuario (usrcodigo,usrnombre, usrclave, usrempresa,usrpermiso)
		VALUES ('JALVAREZ','Jacqueline Alvarez','JALVAREZ2015$','MARKAPASOS',2)");
	mysql_query("INSERT INTO tusuario (usrcodigo,usrnombre, usrclave, usrempresa,usrpermiso)
		VALUES ('JRUIZ','Jakeline Ruiz','JRUIZ2015$','ACTIVA',2)");
	mysql_query("INSERT INTO tusuario (usrcodigo,usrnombre, usrclave, usrempresa,usrpermiso)
		VALUES ('JMEJIA','Jorge Mejía','JMEJIA2015$','ACOT',2)");
	mysql_query("INSERT INTO tusuario (usrcodigo,usrnombre, usrclave, usrempresa,usrpermiso)
		VALUES ('ISALGADO','Isabel Salgado','ISALGADO2015$','CLINICA INGLATERRA',2)");
 	mysql_query("INSERT INTO tusuario (usrcodigo,usrnombre, usrclave, usrempresa,usrpermiso)
		VALUES ('RLESCANO','Ruth Lescano','RLESCANO2015$','HARDCOM',2)");
	mysql_query("INSERT INTO tusuario (usrcodigo,usrnombre, usrclave, usrempresa,usrpermiso)
		VALUES ('SMOROCHO','Sara Morocho','SMOROCHO2015$','SEGUME',2)");
	mysql_query("INSERT INTO tusuario (usrcodigo,usrnombre, usrclave, usrempresa,usrpermiso)
		VALUES ('JSANTAMARIA','Julia Santamaría','JSANTAMARIA2015$','DAUFIN',2)");
	mysql_query("INSERT INTO tusuario (usrcodigo,usrnombre, usrclave, usrempresa,usrpermiso)
		VALUES ('CMERINO','Carla Merino','CMERINO2015$','DAUFIN',2)");
	echo "SI INSERTA EN LA TABLA";

//*************************************************
	//TABLA DE LOGS
	$sql = "DROP TABLE tlogs";
	mysql_query($sql,$conexion);
	$sql = "CREATE TABLE tlogs
	(
		utc Int,
		ano Int,
		mes Int,
		dia Int,
		hora Int,
		minuto Int,
		segundo Int,
		ip Char(50),
		navegador Char(100),
		usrcodigo varchar(25),
		usrclave varchar(25)
	)";
	mysql_query($sql,$conexion);
	// insert registros
	mysql_query("INSERT INTO tlogs 
		VALUES (000000000,2014,12,29,23,38,00,'127.0.0.1','chrome','MESTRELLA','MESTRELLA2015$')");

//*************************************************
	//TABLA DE REQUERIMIENTOS
	$sql = "DROP TABLE trequerimiento";
	mysql_query($sql,$conexion);
	$sql = "CREATE TABLE trequerimiento
	(
		reqnumero Int NOT NULL, PRIMARY KEY(reqnumero),
		usrcodigo varchar(25),
		reqfecha Date,
		reqdetalle varchar(200),
		reqestado varchar(20),
		reqtipo varchar(20),
		reqarchivo mediumblob,
		resfecha Date,
		resdetalle varchar(200),
		reqcomentario varchar(200)
	)";
	mysql_query($sql,$conexion);
	// insert registros
	mysql_query("INSERT INTO trequerimiento (reqnumero,usrcodigo,reqfecha,reqdetalle,reqestado)
		VALUES (20150001,'MESTRELLA',NOW(),'Hacer un sistema de requerimientos en web para Kreasistem','SOLICITADO')");

//*************************************************
	//TABLA DE EMPRESAS
	$sql = "DROP TABLE tempresa";
	mysql_query($sql,$conexion);
	$sql = "CREATE TABLE tempresa
	(
		empcodigo Int NOT NULL AUTO_INCREMENT, PRIMARY KEY(empcodigo),
		empnombre varchar(30),
		empdetalle varchar(100)
	)";
	mysql_query($sql,$conexion);
	// insert registros
	mysql_query("INSERT INTO tempresa (empnombre,empdetalle)
		VALUES ('COLVIDA','COLVIDA S.A.')");
	mysql_query("INSERT INTO tempresa (empnombre,empdetalle)
		VALUES ('DAUFIN','DAUFIN S.A.')");
	mysql_query("INSERT INTO tempresa (empnombre,empdetalle)
		VALUES ('KREASISTEM','KREASISTEM CIA. LTDA.')");
	mysql_query("INSERT INTO tempresa (empnombre,empdetalle)
		VALUES ('MARKAPASOS','MARKAPASOS CIA. LTDA.')");
	mysql_query("INSERT INTO tempresa (empnombre,empdetalle)
		VALUES ('FICAL','FUNDACION INTERCOPERATION PARA AMERICA LATINA')");
	mysql_query("INSERT INTO tempresa (empnombre,empdetalle)
		VALUES ('HARDCOM','HARDCOM S.A.')");
	mysql_query("INSERT INTO tempresa (empnombre,empdetalle)
		VALUES ('SEGUME','SEGUME CIA. LTDA.')");
	mysql_query("INSERT INTO tempresa (empnombre,empdetalle)
		VALUES ('ACTIVA','GRUPO ACTIVA CIA. LTDA.')");
	mysql_query("INSERT INTO tempresa (empnombre,empdetalle)
		VALUES ('INVMETALS','INVMETALS ECUADOR S.A.')");
	mysql_query("INSERT INTO tempresa (empnombre,empdetalle)
		VALUES ('ACOT','ACOT')");
	mysql_query("INSERT INTO tempresa (empnombre,empdetalle)
		VALUES ('CLINICA INGLATERRA','CLINICA INGLATERRA S.A.')");

	//Cerrar conexion
	mysql_close($conexion);
	
?>
