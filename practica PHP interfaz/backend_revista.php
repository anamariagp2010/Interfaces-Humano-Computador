<?php
	
	//EXPOSICION:
	// heuristicas de usabilidad, patrones, Interfaz tal cual

	require_once './conexion_bd.php';
	
	$observer = new observerClass();

	// capturar información del formulario de busqueda
	if(isset($_GET['search'])){	//Valida si lo que recibe es nulo o no
		$obj = $_GET['search'];
		$observer->getUser($mysqli,$obj);
	}

	//POST envia todo en un cuerpo y las claves no son visibles
	// TODOS LOS CAMPOS DEBEN TENER VALORES
	if(isset($_POST) && !empty($_POST)){

			$obj = (object) $_POST;	//POST lo recibe como array, es el dataEn
			$observer->insertUser($mysqli,$obj);
			
			//hacer el insert
	}

	class observerClass{

		function getUser($mysqli,$obj){

			$queryR = $mysqli -> query ("SELECT nombre, apellido FROM usuario WHERE id_usuario =".$obj."");

				$valores = mysqli_fetch_array($queryR);

					if(count($valores) > 0){
						echo "Hola <b>".$valores['nombre']."</b> ya te encuentras registrado";
					}else{
						echo "No estas registrado, por favor registrate antes de realizar una suscripción";
					}
					
		}

		function insertUser($mysqli, $obj){

			$qry = "INSERT INTO usuario (id_usuario,nombre,apellido,edad,cod_ciudad) VALUES (".$obj->identification.",'".$obj->firstName."','".$obj->lastName."',".$obj->age.",".$obj->city.")";

			$valores = $mysqli -> query($qry);

		}

		function suscribeUser($mysqli, $obj){}

	}

	
?>