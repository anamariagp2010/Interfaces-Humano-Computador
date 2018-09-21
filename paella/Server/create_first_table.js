const pg = require("pg");

const table = new pg.Pool({
	user: 'postgres',
	host: 'localhost',
	database: 'Patterns',
	password: 'admin',
	port: '5432'});
	table.query("CREATE TABLE pedidos(id SERIAL PRIMARY KEY, firstname VARCHAR(40) NOT NULL, orderShop VARCHAR(50) NOT NULL, price INT NOT NULL)", (err, res) => {
	console.log(err, res);
	table.end();
});