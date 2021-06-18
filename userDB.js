const db = require("mysql");
const connection = db.createConnection({
  host: "localhost",
  user: "root",
  password: "",
  database: "registration",
});
connection.connect((error) => {
  if (error) throw error;
  console.log("Connected");
});
