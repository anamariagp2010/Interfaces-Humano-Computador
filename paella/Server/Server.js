var cors = require("cors");
var express = require("express");
var bodyParser = require("body-parser");

const { Client } = require("pg");
const dbClient = new Client({
  	connectionString: "postgresql://postgres:admin@localhost:5432/Patterns" //parametros y ruta de conexion a la base de datos
});

// Se configura el puerto.
const PORT = 3000;

// Se inicia la variable app de express.
var app = express();

app.use(bodyParser.json());
app.use(cors());

// Se realiza la conexion a la base de datos.
dbClient.connect((error) => {
	if(error) {
	console.log("Error de conexion: ", error);
	}
	else {
	console.log("Conexion a la base de datos exitosa");
	}
});

// Se especifica la ruta base del servidor.
app.get("/", (request, response) => {
  response.send("Servidor de prueba para la implementación de los patrones acceder por medio de /api");
});

// Acceso a las rutas del api
app.use("/api", require("./routes")(dbClient));


// Se inicia el servidor.
var server = app.listen(PORT, (error) => {
  if (!error) {
    console.log("Se ha iniciado el servidor en el puerto " + PORT);
  }
  else {
    console.log("Error al iniciar el servidor");
  }
});