<?php
	include("conexion_bd.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Panel de revistas</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<h1>Bienvenidos a la página más importante de revistas de colombia</h1>
	<h3>Suscríbete a la que más te guste por $29.000 el mes</h3>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<form method="post" action="src/backend_revista.php">
					<div class="form-group">
						<p>Ingresa tus datos aquí si aún no estás registrado en el sistema</p>
						<label for="exampleFormControlInput1">Identificación</label>
    					<input type="text" class="form-control" id="exampleFormControlInput1">
						<label for="exampleFormControlInput1">Nombre</label>
    					<input type="text" class="form-control" id="exampleFormControlInput1">
    					<label for="exampleFormControlInput1">Apellido</label>
    					<input type="text" class="form-control" id="exampleFormControlInput1">
    					<label for="exampleFormControlSelect1">Ciudad</label>
						<select class="form-control" id="exampleFormControlSelect1">

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

				<div class="form-group">
						<p>Validar que ya estás registrado</p>
						<label for="exampleFormControlInput1">Identificación</label>
    					<input type="text" class="form-control" id="exampleFormControlInput1">
						<label for="exampleFormControlInput1">Buscar</label>
    					<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="numero de Identificación">
					    <button type="button" class="btn btn-success" style="margin-top: 10px">Buscar</button>
					</div>
					<div class="form-group">
						<p>Suscribete aquí</p>
						<label for="exampleFormControlInput1">Identificación</label>
    					<input type="text" class="form-control" id="exampleFormControlInput1">
    					<label for="exampleFormControlInput1">Revistas</label>
						<select class="form-control" id="exampleFormControlSelect1">
					      <?php
								while($valores = mysqli_fetch_array($queryR)){
									echo '<option value = "'.$valores['id_revista'].'">
										'.$valores['nombre_revista'].'</option>';
								}
							?>

					    </select>
					    <div></div>
					    <button type="button" class="btn btn-success" style="margin-top: 10px">Suscribirse</button>
					</div>
			</div>
		</div>
	</div>
</body>
</html>
//


	
