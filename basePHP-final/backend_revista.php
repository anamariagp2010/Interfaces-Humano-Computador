<?php
	//EXPOSICION:
	// heuristicas de usabilidad, patrones, Interfaz tal cual

	require_once './conexion_bd.php';
	
	
	$observer = new observerClass();

	// capturar información del formulario de busqueda
	if(isset($_GET['search']) && !empty($_GET['search'])){	//Valida si lo que recibe es nulo o no
		$obj = $_GET['search'];
		return $observer->getUser($mysqli,$obj);
	}

	//POST envia todo en un cuerpo y las claves no son visibles
	// TODOS LOS CAMPOS DEBEN TENER VALORES
	if(isset($_POST) && !empty($_POST)){
			$obj = (object) $_POST;	//POST lo recibe como array, es el dataE
			$array = (array)$obj;
			
			if(sizeof($array) == 2){
				$observer->suscribeUser($mysqli,$obj);
			}
			else{
				$observer->insertUser($mysqli,$obj);
			}
		
			//hacer el insert
	}

	class observerClass{

		function getUser($mysqli,$obj){

			$queryR = $mysqli -> query ("SELECT nombre, apellido FROM usuario WHERE id_usuario =".$obj."");

				$valores = mysqli_fetch_array($queryR);

					if(count($valores) > 0){
						echo "Hola <b>".$valores['nombre']."</b> ya te encuentras registrado";
					}else{
						echo "No te encuentras registrado, no puedes realizar
							la suscripción, completa el formulario de registro para
							continuar ";
					}
					
		}

		function insertUser($mysqli, $obj){

			$qry = "INSERT INTO usuario (id_usuario,nombre,apellido,edad,cod_ciudad,mail) VALUES (".$obj->identification.",'".$obj->firstName."','".$obj->lastName."',".$obj->age.",".$obj->city.",'".$obj->mail."')";

			$valores = $mysqli -> query($qry);

			echo "Su registro ha sido exitoso";

		}

		function suscribeUser($mysqli, $obj){
			$queryR = $mysqli -> query ("SELECT nombre, apellido FROM usuario WHERE id_usuario =".$obj->identificationSus."");

				$valores = mysqli_fetch_array($queryR);

					if(count($valores) > 0){
						// Si esta Registrado

						$qry = "INSERT INTO suscriptores (id_usuario,id_revista) VALUES (".$obj->identificationSus.",'".$obj->magazine."')";

						$valores = $mysqli -> query($qry);
						echo "Su suscripción ha sido exitosa";

					}
					else{
						echo "No estas registrado, por favor registrate antes de realizar una suscripción";
					}
			

		}

	}

	
?>