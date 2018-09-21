function productPaella(name){
	this.name = name;
}

function decoratorNameProduct(product,name, descripcion){
	this.product = product;
	this.name = name;
	this.descripcion = descripcion;

	var allName = this.product.name + " " + descripcion;
	return allName;
}

function executeDecorator(item){
	var itemDecorate = []
	for(var i = 0; i<item.length; i++){
		var productName = new productPaella(item[i]);
		var decorated = new decoratorNameProduct(productName,productName.name,"La mejor Paella de la universidad");
		itemDecorate.push(decorated);
	}
	return itemDecorate;
}