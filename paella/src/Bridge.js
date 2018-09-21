
var productos= [];
function executeBridge(seleccion){
	this.seleccion = seleccion;
	productos.push(seleccion.value);
	console.log("Productos añadidos al carrito: ");
	for(var i = 0; i<productos.length ; i++){
		console.log(productos[i]);
	}
	getValueType(seleccion.value);
}
