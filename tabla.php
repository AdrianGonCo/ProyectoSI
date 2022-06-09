<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<title>Registro</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/custom.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/font-awesome.css">
</head>

<body>

	<div class="container">

		<!--Cabecera de color-->
		<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary">
			<a class="navbar-brand" href="index.php">CRUD SISTEMAS DE INFORMACION</a>
		</nav>

		<h1 class="page-header text-center">Registro de Usuarios</h1>

		<div class="row">
			<div class="col-sm-12">
				<a href="#addnew" class="btn btn-primary" data-toggle="modal"><span class="fa fa-plus"></span> Nuevo</a>
				<?php
				session_start();
				if (isset($_SESSION['message'])) {
				?>
					<div class="alert alert-dismissible alert-success" style="margin-top:20px;">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<?php echo $_SESSION['message']; ?>
					</div>
				<?php

					unset($_SESSION['message']);
				}

				//Creacion de tabla
				?>
				<table class="table table-bordered table-striped" style="margin-top:20px;">
					<thead>
						<th>ID</th>
						<th>Nombre</th>
						<th>Primer Apellido</th>
						<th>Edad</th>
						<th>Grado</th>
						<th>Sexo</th>
						<th>Turno</th>
						<th>Accion</th>
					</thead>
					<tbody>

						<?php
						// incluye la conexión
						include_once('conexion.php');

						$database = new Conexion();
						$db = $database->open();
						try {
							$sql = 'SELECT * FROM usuarios';
							foreach ($db->query($sql) as $row) {
						?>
								<tr>
									<td><?php echo $row['id']; ?></td>
									<td><?php echo $row['nombre']; ?></td>
									<td><?php echo $row['apellido']; ?></td>
									<td><?php echo $row['edad']; ?></td>
									<td><?php echo $row['nivel']; ?></td>
									<td><?php echo $row['sexo']; ?></td>
									<td><?php echo $row['turno']; ?></td>
									<td>
										<a href="#edit_<?php echo $row['id']; ?>" class="btn btn-success btn-sm" data-toggle="modal"><span class="fa fa-edit"></span> Editar</a>
										<a href="#delete_<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" data-toggle="modal"><span class="fa fa-trash"></span> Eliminar</a>
									</td>
									<?php include('accion.php'); ?>
								</tr>

						<?php
							}
						} catch (PDOException $e) {
							echo "Hay un problema en: " . $e->getMessage();
						}
						//cerrar conexión
						$database->close();
						?>

					</tbody>
				</table>
			</div>
		</div>
	</div>

	<?php include('formulario.php'); ?>
	<script src="bootstrap/js/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	<script src="bootstrap/js/custom.js"></script>
</body>

</html>