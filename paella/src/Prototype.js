/*Funcion encargada de recibir el objeto base del
prototipo y clonarlo*/
function ricePrototype(proto){

    this.proto = proto;

    this.clone = function() {

        var arroz = new Rice([]);

        for (var i=0; i<proto.ingredientes.length; i++) {
            arroz.ingredientes.push(proto.ingredientes[i]);
        }

        return arroz; 
    };
}

/*objeto arroz que contiene los ingredientes*/
function Rice(ingredientes){

    this.ingredientes = ingredientes;
}

function produceBase(){

    var proto = new Rice(["arroz", "aceite", "sal", "agua"]); // se contruye el objeto base
    var prototype = new ricePrototype(proto); // instancia la funcion ricePrototype y recibe como parametro el objeto base
    var arroz = prototype.clone(); // se llama la funcion encargada de clonar 
    arroz.ingredientes[0] = "arroz integral";
    return arroz;
}
