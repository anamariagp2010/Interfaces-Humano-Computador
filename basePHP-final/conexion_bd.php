<?php
	$mysqli = new mysqli('localhost','root','','mi_revista'); //siempre comilla simple
	// 3er campo es para contrasena Root es como el nombre de usuario

	// se coloca 	WHERE cali  para obtener la inf. solo de cali
	//hacer query 2 con la revista y ese se va a llamar en la interfaz
	// flecha ejecuta la sentencia
	$mysqli->set_charset("utf8"); //para problemas con tildes
	$query = $mysqli->query ("SELECT * FROM ciudad"); //trae informacion de todas las ciudades
	$queryR = $mysqli->query ("SELECT * FROM revista");

	/*
	Primero se registra, luego sus.
	*/

?>