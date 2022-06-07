<?php

session_start();
include_once('conexion.php');

if (isset($_GET['id'])) {
	$database = new Conexion();
	$db = $database->open();
	try {
		$sql = "DELETE FROM usuarios WHERE id = '" . $_GET['id'] . "'";
		// declaración if-else en la ejecución de nuestra consulta
		$_SESSION['message'] = ($db->exec($sql)) ? 'Usuario eliminado correctamente' : 'Ocurrió un error. No se pudo eliminar el Usuario';
	} catch (PDOException $e) {
		$_SESSION['message'] = $e->getMessage();
	}

	//cerrar conexión
	$database->close();
} else {
	$_SESSION['message'] = 'Seleccione usuario a eliminar';
}

header('location: tabla.php');
