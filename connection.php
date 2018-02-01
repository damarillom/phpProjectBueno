<?php
/*$servername="localhost";
$username="admin";
$password="1234";
$database="test1";

$con = new mysqli($servername,$username,$password,$database);*/
$con = new Conectar();
$con = $con->getConexion();

if ( $con->connect_error ) 
    die ("Fallo en la conexión" . $con->connect_error);
    //exit hace lo mismo

echo "Conexion extablecida<br/><br/>";

$sql = "SELECT * FROM users";
$result = $con->query($sql);
if ($result->num_rows) {
    while ($fila = $result->fetch_assoc()) {
        echo "email: " . $fila["email"] . "<br/>Nombre: " . $fila["nombre"] . "<br/>Password: " . $fila["password"] . "<br/><br/>";
    }
} else 
    echo "sin resultados";

/*    
$insert='INSERT INTO users (email,nombre,password) VALUES ("g@gmail.com","gabi",md5("123456"))';
if ($con->query($insert) === TRUE)
    echo "OK</br></br>";
else 
    echo "Error " . $con->error;
  */

    

    
$con->close();    
    
    

?>