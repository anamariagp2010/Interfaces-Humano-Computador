function searchTupla(){

	//capturar valores del formulario de busqueda
	var search = document.getElementById('search').value;
	var dataEn = 'search='+search;


    if(isNaN(search)){
    	document.getElementById("res2").innerHTML = "ERROR: Por favor ingrese un numero en el campo de identificacion";
    	
     }

     else if(search == ""){
     	document.getElementById("res2").innerHTML ="ERROR: Por favor ingrese su identificacion";
     	
     }
    
    else{
		$.ajax({	// para no refrescar la pagina y se actualice
			type: 'GET',
			url:'backend_revista.php',
			data:dataEn,
			success:function(resp){
				$('#res2').html(resp)
				
			}
		});
	}

}

function insertUser(){
	var identification = document.getElementById('identification').value;
	var firstName = document.getElementById('firstName').value;
	var lastName = document.getElementById('lastName').value;
	var age = document.getElementById('age').value;
	var city = document.getElementById('city').value;
	var mail = document.getElementById('mail').value;

	

	if(isNaN(identification) || isNaN(age)){
    	$('#res2').html("ERROR: Por favor ingrese numeros en identificacion y edad para su registro") 
     }

     else if(identification == "" || firstName=="" || lastName=="" || age=="" || city=="#" || mail==""){
     	$('#res2').html("Por favor llene todos los campos para su registro") 
     }

     else{
	//Funciona como mapa el objeto js, tiene clave y valor
		var dataEn = {
			'identification' : identification,
			'firstName' : firstName,
			'lastName' : lastName,
			'age' : age,
			'city' : city,
			'mail' : mail
		};

		$.ajax({	// para no refrescar la pagina y se actualice
			type: 'POST',
			url:'backend_revista.php',
			data:dataEn,
			success:function(resp){
				$('#res2').html(resp)
			}
		});
	
	}
}

function suscribeUser(){
	// Capturar informacion del formulario de suscripcion
	var identificationSus = document.getElementById('identificationSus').value;
	var magazine = document.getElementById('magazine').value;

	if(isNaN(identificationSus)){
    	$('#res2').html("ERROR: Por favor ingrese un numero en el campo de identificación para su suscripción");
     }

     else if(identificationSus == "" ||magazine == "#"){
     	$('#res2').html("Por favor llene todos los campos para su suscripción") 
     }

     else{

		var dataEn = {
			'identificationSus' : identificationSus,
			'magazine' : magazine
		};


		$.ajax({	// para no refrescar la pagina y se actualice
			type: 'POST',
			url:'backend_revista.php',
			data:dataEn,
			success:function(resp){
				$('#res2').html(resp)
			}
		});

	}
}