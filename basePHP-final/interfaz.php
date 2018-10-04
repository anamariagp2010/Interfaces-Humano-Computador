<?php 
	include("conexion_bd.php");
	include("backend_revista.php");
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<link rel="stylesheet" type = "text/css" href = "estilos.css">
	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
	<title>TodoRevistas Tienda Online</title>
</head>
<body>
	<div class= "container_fluid">
		<div class="row">

			<div class="col-md-3" style="background-color:#DB3434">
				<img src="blanco.png" class="crop">
		
				<img src="logo.png" class = "imgLogo">
				
			</div>
			<div class="col-md-2" style="background-color:#DB3434">
					<br></br>
					<a href="#">Inicio</a>
			</div>
				
			<div class="col-md-2" style="background-color:#DB3434">
			    <br></br>
				<a href="#">Temáticas</a>
			</div>
			<div class="col-md-2" style="background-color:#DB3434">
				<br></br>
				<a href="#">Contacto</a>
			</div>
			<div class="col-md-1" style="background-color:#DB3434">
				<img src="icon_ubicacion_b.png" class="imgSocial">
			</div>
			<div class="col-md-1" style="background-color:#DB3434">
				<img src="face.png" class="imgSocial">
			</div>
			<div class="col-md-1" style="background-color:#DB3434">
				<img src="in.png" class="imgSocial">
			</div>
			
		</div>
		<div class="row">
			<div class="col-md-6" style="background-color:white" >
				<div class="divLetrero">
					<h1 class="letrero">
				    <br></br>
					<p>Suscríbete a tus
						revistas favoritas
						por tan solo
						$29.000 al mes</p>
				</h1>
				</div>
				<div class="divLetrero">
					<p class="letrero2">Para que no te pierdas ningún detalle de los
							mejores contenidos.</p>
				</div>
			</div>
			<div class="col-md-6" style="background-color:white">
				<img src="social_media.png" class= "imgGrande" >
			</div>
		</div>
		<div class="row">
			<div class="col-md-12" style="background-color:#DB3434" >
			<p class="letreroMid">
				Podrás leer tus revistas desde cualquier lugar, en cualquier dispositivo
			</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-5" style="background-color:white" >
				<br></br>
				<br></br>
				<span> <p class="texto">Conoce si te encuentras registrado
					en nuestro sistema </p></span>
				<form method="GET" onsubmit="searchTupla(); return false;">
					<div class="form-group">
		    			<input type="text" class="form-control buscar" placeholder="Número de Identificación" name="search" id="search">
		    			<p></p>
						<button type="submit" class="button" style="margin-left: 40%">Buscar</button>
					</div>
				</form>
				
				
				<br></br>
				<br></br>
	
				<form method="POST" onsubmit="suscribeUser(); return false;">
					<div class="form-group">
						<p class="texto">Suscribirme a una revista</p>
    					<input type="text" class="form-control identificacion" placeholder="Número de Identificación" id="identificationSus">
    					<p></p>
						<select class="form-control select3" style="width: 70%; margin-left:75px" id="magazine" >
							<option value="#">Seleccionar una revista</option>
							<?php
								while($val = mysqli_fetch_array($queryR)){
									echo '<option value = "'.$val['id_revista'].'">
										'.$val['nombre_revista'].'</option>';
								}
							?>
					    </select>
					    <p></p>
					    <button type="submit" class="button" style="margin-left: 35%">Suscribirme</button>
					</div>
					
				</form>
				<br></br>
				<br></br><br></br>
				<div class="row">
					<div class="col-md-12 crop2">
						
						<br></br>
						<p class="contacto"> TodoRevistas, tienda online©</p>
						<p class="contacto2">Todos los derechos reservados </p>
					</div>
				</div>
			</div>
			<div class="col-md-1" style="background-color:white" ></div>
			<div class="col-md-6" style="background-color:white" >
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-6">
						<img src="bombillo.png"  style="width:100%;">
					</div>
					<div class="col-md-3"></div>
				</div>
				<br></br>
				<span> <p id="res2" class="texto"></p></span>
				<br></br>
				
				<form method="POST" onsubmit="insertUser(); return false;">
					<div class="form-group">

						<p class="texto">Registrate en nuestro sistema</p>
						<p class="texto2">Aplica para usuario que no se encuentran registrados previamente</p>
						<div class="row">
							<div class="col-md-6">
								<input type="text" class="form-control inputReg" placeholder="Número de Identificación" id="identification">
								<p></p>
	    						<input type="text" class="form-control inputReg" placeholder="Apellido" id="lastName">
	    						<p></p>
	    						<input type="text" class="form-control inputReg" placeholder="Edad" id="age">
	    						<p></p>
							</div>
							<div class="col-md-6">
								<input type="text" class="form-control inputReg" placeholder="Nombre"id="firstName">
								<p></p>
								<input type="text" class="form-control inputReg" placeholder="Correo electrónico" id="mail">
								<p></p>
								<select class="form-control select2" id="city" style="width: 90%">
									<option value="#">Seleccionar una ciudad</option>
									<?php
										while($valores = mysqli_fetch_array($query)){
											echo '<option value = "'.$valores['cod_ciudad'].'">
												'.$valores['nombre_ciudad'].'</option>';
										}
									?>
							    </select>
							</div>
						</div>    
					</div>
					<div class="row">
					<div class="col-md-7">
						<p>Al hacer clic en “registrarme” estoy aceptando
							los términos y condiciones, políticas de datos
							y cookies</p>
					</div>
					<div class="col-md-5">
						<button type="submit" class="button" >Registrarse</button>
					</div>
				</div>


				</form>
				
				<br></br>
				<br></br>
				<div class="row">
					<div class="col-md-2">
						<p></p>
						<p >Aliados:</p>
					</div>
					<div class="col-md-2">
						<img src="cromos.png"style="width:100%; ">
					</div>
					<div class="col-md-2">
						<img src="fucsia.png"style="width:100%; ">
					</div>
					<div class="col-md-2">
						<img src="jetset.png"style="width:100%; ">
					</div>
					<div class="col-md-2">
						<img src="dinero.png"style="width:100%; ">
					</div>
					<div class="col-md-2">
						<img src="semana.png"style="width:100%; ">
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="subject.js"></script>
</body>
</html>