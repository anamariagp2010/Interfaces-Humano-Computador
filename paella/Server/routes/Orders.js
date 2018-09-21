module.exports = (dbClient) => {
	const express = require("express");
  	const orders = express.Router();

	// Endpoint para guardar las peticiones de pedidos de paella
	orders.post("/post/", (request, response) => {

		/*se estructuran valores del json*/
		var values = [
			request.body.firstname,
			request.body.orderShop,
			request.body.price
		];

		/*construcción de query para insertar los datos*/
		var sql = 'INSERT INTO "pedidos" ' +
		      '(' +
		        'firstname, ' +
		        'orderShop, ' +
		        'price ) ' +
		      'VALUES ($1, $2, $3) ';

		dbClient.query(sql, values, (error) => {
			var responseData = {};
			if(error) {
				console.log(error);
			}
			else {
				responseData = {
				  message: "Pedido creado",
				  status: 200
				}
			}
			response.json(responseData);
		});
	});

	return orders;
}