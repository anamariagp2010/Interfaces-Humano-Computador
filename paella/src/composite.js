
function shoppingCar(typePaella){ 
    this.typePaella = typePaella;
    this.arrayElements = [];
}

shoppingCar.prototype = {

    add: function(products){
        this.arrayElements.push(products);
    },

    remove: function (products){
        this.arrayElements.splice(0, this.arrayElements.length); // sobre escribir
        this.arrayElements.push(products);
    }
}


function buildShoppingCar(type, product){
    var arrayCar = [];
    var car = new shoppingCar(type);
    for (var i = 0; i<product.length; i++) {
        car.add(product[i]);
        arrayCar.push(car);
    }

    return arrayCar;
}
