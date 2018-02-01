<?php include("../head.php")?>
<?php
require_once '../db/Conectar.php';
/*$servername="localhost";
$username="admin";
$password="1234";
$database="test1";

$con = new mysqli($servername,$username,$password,$database);*/
$con = new Conectar();
$con = $con->getConexion();

$sql="SELECT * FROM users WHERE email='" . $_POST["user"] . "' AND password=md5(" . $_POST["pass"] . ")";
$result = $con->query($sql);


$insert='INSERT INTO users (email,nombre,password) VALUES ("' . $_POST["user"] . '","' . $_POST["name"] . '",md5("' . $_POST["pass"] .'"))';
if ($con->query($insert) === TRUE)
    require("menu.php");
else
    echo "Error " . $con->error;


?>
<?php include("../footer.php")?>