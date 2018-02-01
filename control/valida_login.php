<?php include("../head.php")?>
<?php
require_once '../db/Conectar.php';
/*$servername="localhost";
$username="admin";
$password="1234";
$database="test1";

$con = new mysqli($servername,$username,$password,$database);*/

$con = new Conectar();
$conn = $con->getConexion();
$sql="SELECT * FROM users WHERE email='" . $_POST["user"] . "' AND password=md5('" . $_POST["pass"] . "');";
$result = $conn->query($sql);
if($result->num_rows > 0){
    session_start();
    $_SESSION['login user'] = $_POST['user'];
    echo "Sesion iniciada ", $_SESSION['login user'];
} else {
    echo "Credenciales invalidas";
}
?>
<?php 
    if(isset($_SESSION['login user'])) {
        require("../menu.php");;
    }
?>
<?php include("../footer.php")?>