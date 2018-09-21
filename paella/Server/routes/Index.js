/*Se definen las rutas del api*/
module.exports = (dbClient) => {

  // Se importa express
  const express = require("express");

  // Se inicializa el Router de express.
  const routes = express.Router();

  const orders = require("./Orders")(dbClient);

  routes.use("/orders", orders);

  // Retorno del middleware.
  return routes;
}
