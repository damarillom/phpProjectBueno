
<?php include("head.php")?>
<?php
session_start();
/*$servername="localhost";
$username="admin";
$password="1234";
$database="test1";

$con = new mysqli($servername,$username,$password,$database);*/
$con = new Conectar();
$con = $con->getConexion();

session_start();
if ( isset($_SESSION['login user'])){
    $sql="DELETE FROM users WHERE email = '" . $_SESSION['login user'] . "';";
    echo $sql;
    $result = $con->query($sql);
    //coSnsultw
}


?>
<?php include("footer.php")?>