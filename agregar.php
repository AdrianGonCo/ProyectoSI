<?php

	session_start();
	include_once('conexion.php');

	if(isset($_POST['add'])){
		$database = new Conexion();
		$db = $database->open();
		try{
			// hacer uso de una declaración preparada para evitar la inyección de sql
			$stmt = $db->prepare("INSERT INTO usuarios (nombre, apellido, edad, nivel, sexo, turno) VALUES (:nombre, :apellido, :edad, :nivel, :sexo, :turno)");
			// declaración if-else en la ejecución de nuestra declaración preparada
			$_SESSION['message'] = ($stmt->execute(array(
				':nombre' => $_POST['nombre'] ,
				':apellido' => $_POST['apellido'] ,
				':edad' => $_POST['edad'],
				':nivel' => $_POST['nivel'],
				':sexo' => $_POST['sexo'],
				':turno' => $_POST['turno']))) ? 'Registro exitoso' : 'Something went wrong. Cannot add member';
		}
		catch(PDOException $e){
			$_SESSION['message'] = $e->getMessage();
		}
		//cerrar conexión
		$database->close();
	}

	else{
		$_SESSION['message'] = 'Fill up add form first';
	}

	header('location: tabla.php');

?>
