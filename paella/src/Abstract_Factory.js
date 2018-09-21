/*Por medio de esta clase es posible generar muchas paellas, pero la fabrica
desconoce los productos que contiene el producto. Esta clase solo se encarga 
de definir que tipos de productos se van a crear*/
 
/*Define el tipo de paella a construir*/
function paella(type){ 

	this.type = type;
	this.defineType = function(){
		return this.type;
	}
}

/*Se crea la fabrica de paellas y se crean las paellas a partir del tipo*/
function paellaFactory(){
	this.createPaella = function(type){
		return new paella(type); 
	}
}

/*Esta funcion puede ser llamada desde cualquier otra clase de javascript
siempre y cuando este definida en el front-end (html)*/
function executeFactory(type){

	var callFactory = new paellaFactory();
	var paellaProduct = callFactory.createPaella(type);
	console.log(paellaProduct);
	return paellaProduct;
}