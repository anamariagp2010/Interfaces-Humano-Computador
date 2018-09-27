<?php
	

	require_once './conexion_bd.php';
	
	// capturar información del formulario de busqueda
	if(isset($_GET['search'])){
		$obj = $_GET['search'];
		$nuevo = new observerClass();
		$nuevo->getUser($mysqli,$obj);
	}

	class observerClass{

		function getUser($mysqli,$obj){

			$queryR = $mysqli -> query ("SELECT nombre, apellido FROM usuario WHERE id_usuario =".$obj."");

			if($queryR != NULL){

				$valores = mysqli_fetch_array($queryR);

				if(isset($_GET['search'])){
					if(count($valores) > 0){
						echo "Hola <b>".$valores['nombre']."</b> ya te encuentras registrado";
					}else{
						echo "No estas registrado, por favor registrate antes de realizar una suscripción";
					}
				}
			}

			
		}

	}

	function insertUser($mysqli, $obj){}

	function suscribeUser($mysqli, $obj){}
?>