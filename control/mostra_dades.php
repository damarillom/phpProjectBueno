<?php
require_once '../db/Conectar.php';
session_start();
/*$servername="localhost";
$username="admin";
$password="1234";
$database="test1";

$con = new mysqli($servername,$username,$password,$database);*/
$con = new Conectar();
$con = $con->getConexion();

if ( isset($_SESSION['login user'])){
    $sql="SELECT * FROM users WHERE email='" . $_SESSION['login user']."'";
    //$sqlPass='SELECT password FROM users WHERE email=' . $_SESSION['login user'];
    //echo $_SESSION['login user'] . '<br>';
    $result = $con->query($sql);
    if ($result->num_rows > 0) {
        while ($fila = $result->fetch_assoc()) {
            echo "email: " . $fila["email"] . "<br/>Nombre: " . $fila["nombre"] . "<br/>Password: " . $fila["password"] . "<br/><br/>";
        }
    }
} 
?>