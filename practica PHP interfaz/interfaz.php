<?php 
	include("conexion_bd.php");
	include("backend_revista.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Panel de revistas</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
</head>
<body>
	<h1>Bienvenidos a la página más importante de revistas de colombia</h1>
	<h3>Suscríbete a la que más te guste por $29.000 el mes</h3>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<span><label>Estado del suscriptor: </label> <p id="res">Sin estado actual</p></span>
				<form method="GET" onsubmit="searchTupla(); return false;">
					<div class="form-group">
						<p>Validar que ya estás registrado</p>
						<label>Buscar</label>
    					<input type="text" class="form-control" placeholder="numero de Identificación" name="search" id="search">
					    <button type="submit" class="btn btn-success" style="margin-top: 10px">Buscar</button>
					</div>
				</form>
				<form method="POST" onsubmit="insertUser(); return false;">
					<div class="form-group">
						<p>Ingresa tus datos aquí si aún no estás registrado en el sistema</p>
						<label>Identificación</label>
    					<input type="text" class="form-control" id="identification">
						<label>Nombre</label>
    					<input type="text" class="form-control" id="firstName">
    					<label>Apellido</label>
    					<input type="text" class="form-control" id="lastName">
    					<label>Edad</label>
    					<input type="text" class="form-control" id="age">
    					<label>Ciudad</label>
						<select class="form-control" id="city">
							<option value="#">Seleccionar una opción</option>
							<?php
								while($valores = mysqli_fetch_array($query)){
									echo '<option value = "'.$valores['cod_ciudad'].'">
										'.$valores['nombre_ciudad'].'</option>';
								}
							?>
					    </select>
					</div>
					<button type="submit" class="btn btn-success" style="margin-top: 10px">Registrarse</button>
				</form>
				<p id="resSus"></p>
				<form method="POST" onsubmit="suscribeUser(); return false;">
					<div class="form-group">
						<p>Suscribete aquí</p>
						<label>Identificación</label>
    					<input type="text" class="form-control" id="identificationSus">
    					<label>Revistas</label>
						<select class="form-control" id="magazine">
					      	<?php
								while($valores = mysqli_fetch_array($queryR)){
									echo '<option value = "'.$valores['id_revista'].'">
										'.$valores['nombre_revista'].'</option>';
								}
							?>
					    </select>
					    <div></div>
					    <button type="submit" class="btn btn-success" style="margin-top: 10px">Suscribirse</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="subject.js"></script>
</body>
</html>
