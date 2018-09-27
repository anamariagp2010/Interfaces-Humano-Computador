function searchTupla(){
	//capturar valores del formulario de busqueda
	var search = document.getElementById('search').value;
	var dataEn = 'search='+search;

	$.ajax({	// para no refrescar la pagina y se actualice
		type: 'GET',
		url:'backend_revista.php',
		data:dataEn,
		success:function(resp){
			$('#res').html(resp)
		}
	});

}

function insertUser(){
	//capturar valores del formulario de registro
	var identification = document.getElementById('identification').value;
	var firstName = document.getElementById('firstName').value;
	var lastName = document.getElementById('lastName').value;
	var age = document.getElementById('age').value;
	var city = document.getElementById('city').value;

	var dataEn = {
		'identification' : identification,
		'firstName' : firstName,
		'lastName' : lastName,
		'age' : age,
		'city' : city
	};

	$.ajax({	// para no refrescar la pagina y se actualice
		type: 'POST',
		url:'backend_revista.php',
		data:dataEn,
		success:function(resp){
			$('#resSus').html(resp)
		}
	});

	console.log("identificacion",dataEn['identification'])
	console.log("firstName",dataEn['firstName'])
	console.log("lastName",dataEn['lastName'])
	console.log("age",dataEn['age'])
	console.log("city",dataEn['city'])

}

function suscribeUser(){
	// Capturar informacion del formulario de suscripcion
	var identificationSus = document.getElementById('identificationSus').value;
	var magazine = document.getElementById('magazine').value;
	var dataEn = {
		'identificationSus' : identificationSus,
		'magazine' : magazine
	};
}