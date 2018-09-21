function CalculatePriceDolar(){

	this.newCalculate = function(originalPrice){
		var dolar = 3070.65
		var conversion = originalPrice/dolar
		return conversion
	}
}

function CalculatePriceEuro(){

	this.newCalculate = function(originalPrice){
	var euro = 3561.16
	var conversion = originalPrice/euro
	return conversion
	}
}


function calculatePaellaPrice(price){
	var calculate = new CalculatePriceDolar();
	return calculate.newCalculate(price)
}

function calculatePaellaPrice2(price){
	var calculate = new  CalculatePriceEuro;
	return calculate.newCalculate(price)
}