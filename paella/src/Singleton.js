/*Se construye el objeto singleton que sera instanciado 
una unica vez, y podra ser utilizado en todos los platos 
de paella generados*/

var singleton = (function (){

	var instance;

	function productOnly(ingredients){ // Se el objeto que estara presente en todos los productos resultantes

		var objectSalad = {
			salad: ingredients,
		}

		return objectSalad;
	}

	function createSalad(){

		var saladIngredients = ["lechuga", "tomate", "piña", "jamon", "crema de leche", "mango"];
		return new productOnly(saladIngredients);
	}

	function instanceSingle(){
		instance = createSalad();
		return instance;
	}

	return instanceSingle(); // se retorna la funcion que se encarga de crear el objeto de tipo ensalada con sus respectivos ingredientes

})();

function executeSingleton(){

	var saladGenerate = singleton;
	return saladGenerate;
}