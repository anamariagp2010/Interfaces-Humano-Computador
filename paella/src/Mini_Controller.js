/*Esta funcion permite obtener el valor del select de html(onchange)*/

var tipos = []
function getValueType (paellaType){
	this.paellaType = paellaType;
	tipos.push(paellaType);
}


var dinero;
function getValueCoin(cash){
	dinero = cash.value;
}


function getValuePrice(paellaprice){
	this.paellaprice = paellaprice;

	var valor = paellaprice.value
	var iva = (valor*19)/100
	var original = valor-iva;
	console.log("Precio Original (pesos): ",original)
	console.log("Precio IVA: ",iva)
	

	if (dinero =="dolar"){
		var ans =calculatePaellaPrice(original)
		console.log("Precio en dolares: ",ans)
	}
	else if(dinero =="euro"){
		var ans =calculatePaellaPrice2(original)
		console.log("Precio en euros: ",ans)
	}	
	
}


// ARREGLO COMO "BASE DE DATOS"
let menuItems = ["Mariscos", "Vegetariana", "Carne y Pollo"];

var carrito = [];


function buildPaella(){
	var productos = [];
	var factory;
	var paellaProduct;
	for(var i = 0; i< tipos.length; i++){
		factory = executeFactory(tipos[i]);
		paellaProduct = generatePaella(factory.type);
		var paellaObject = {
			paellaType: tipos[i],
			paella: paellaProduct
		}
		productos.push(paellaProduct);
	}

	carrito = new buildShoppingCar('paella', productos);
	console.log(carrito);

	var arroz = new produceBase();
	console.log(arroz);

	var singleton = new executeSingleton();
	console.log(singleton);
	
	var decorator = new executeDecorator(menuItems);
	console.log(decorator);
	
}