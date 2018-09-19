<?php
	//numero entero, float, string, array, array con clave(mapa), booleano
	$entero = 10;
	$float = 12.34;
	$string = "Clase HCI";
	$mapa = array("key1" => "hola", "key2" => "mundo");
	$array = array("key1", "hola", "key2" ,"mundo");
	$verdadero = true;
	$falso = false;

	
	class strValTest{
		private $miVar = "clase1";
		private $miVar2 = "clase2";
		public function __toString()
		{
			return __CLASS__;
		}

		public function example(){
			return "Esto es una prueba";
		}
	}

	echo "entero ".intval($entero)."<br />";
	echo "float ".intval($float)."<br />";
	echo "string ".intval($string)."<br />";
	echo "boolean verdadero ".intval($verdadero)."<br />";
	echo "boolean falso ".intval($falso)."<br />";
	echo "hex-dec ".intval(0x165)."<br />";

	echo "string float ".strval($float)."<br />";

	$floatString = strval($float);
	echo "floatString ".gettype($floatString)."<br />";
	
	echo "string falso ".strval($falso)."<br />";
	echo "string verdadero ".strval($verdadero)."<br />";
	echo "class string ".strval(new strValTest)."<br />";

	echo "arrayInt ".(int)$array."<br />";	//hace como .empty()
	echo "arrayInt2 ".(int)array()."<br />";
	echo "float verdadero ".(float)$verdadero."<br />";

	var_dump((array) new strValTest());
	// forzar variable a ser un objeto
	echo "<br />";
	$ejemplo = (object)$float;
	var_dump($ejemplo);



?>