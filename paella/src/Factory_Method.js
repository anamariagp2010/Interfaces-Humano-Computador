/*Esta clase define los elementos que contiene un producto de la factoria, 
lo que para este caso permite determinar los ingredientes segun el tipo de paella*/

/*Invoca la funcion que define los ingredientes segun el tipo de paella*/
function paellaFactoryMethod(){
    this.crearPaella = function(type){
        if(type == "Mariscos"){
            return paellaMariscos();
        }else if(type == "Vegetariana"){
            return paellaVegetariana();
        }else if(type == "Carne y Pollo"){
            return paellaCarnePollo();
        }
    }
}


/*Se construye el producto final a partir de los ingredientes definidos*/
function paellaProduct(){

    this.product = function(ingredientes){
        this.ingredientes = ingredientes;
    }
}

/*Se construye una funcion propia para crear una paella segun el tipo*/
var paellaGetProduct = new paellaProduct();

function paellaMariscos(){	
    var ingredientesMariscos = ["calamares", "mejillones", "tomate", "camarones"];
    return new paellaGetProduct.product(ingredientesMariscos);
}

function paellaVegetariana(){

    var ingredientesVegetariana = ["tomate", "albaca", "berenjena"];
    return new paellaGetProduct.product(ingredientesVegetariana);
}

function paellaCarnePollo(){

    var ingredientesPollo = ["pernil de pollo", "carne de res desemechada"];
    return new paellaGetProduct.product(ingredientesPollo);
}

/******* Construir las funciones para las paellas que faltan ******/

/*Funcion obtiene le tipo de la paella desde la fabrica*/
function generatePaella(typePaella){
	var factory = new paellaFactoryMethod();
    var paella = factory.crearPaella(typePaella);
    console.log(paella);
    return paella;
}

