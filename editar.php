<?php

	session_start();
	include_once('conexion.php');

	if(isset($_POST['edit'])){
		$database = new Conexion();
		$db = $database->open();
		try{
			$id = $_GET['id'];
			$nombre = $_POST['nombre'];
			$apellido = $_POST['apellido'];
			$edad = $_POST['edad'];
			$nivel = $_POST['nivel'];
			$sexo = $_POST['sexo'];
			$turno = $_POST['turno'];

			$sql = "UPDATE usuarios SET	nombre = '$nombre', apellido = '$apellido', edad = '$edad', nivel = '$nivel', sexo = '$sexo', turno = '$turno' WHERE id = '$id'";

			// declaración if-else en la ejecución de nuestra consulta
			$_SESSION['message'] = ( $db->exec($sql) ) ? 'Los datos se actualizaron' : 'Ocurrio un error. No se pudo actualizar';

		}
		catch(PDOException $e){
			$_SESSION['message'] = $e->getMessage();
		}

		//cerrar conexión
		$database->close();
	}
	else{
		$_SESSION['message'] = 'Primero debe llenar el form';
	}

	header('location: tabla.php');
