<?php include("head.php")?>
<?php
/*$servername="localhost";
$username="admin";
$password="1234";
$database="test1";

$con = new mysqli($servername,$username,$password,$database);*/
$con = new Conectar();
$con = $con->getConexion();
if (isset($_POST['user']) && isset($_POST['pass'])) {
        if ( $_POST["user"]=="admin" && $_POST["pass"]="1234") {
            session_start();
            $_SESSION['login user'] = $_POST['user'];
            echo "Sesion iniciada ", $_SESSION['login user'];
        } else {
            echo "credenciales invalidas";
        }
}
?>

<?php 
    if(isset($_SESSION['login user'])) {
        if ($_SESSION['login_user']=="admin") {
            require("admin/menu.php");
        } else {
            require("menu.php");
        }
    }
?>
<?php
/*$sql="SELECT * FROM users WHERE email='" . $_POST["user"] . "' AND password=md5(" . $_POST["pass"] . ")";
$result = $con->query($sql);

if($result->num_rows > 0){
    session_start();
    $_SESSION['login user'] = $_POST['user'];
    echo "Sesion iniciada ", $_SESSION['login user'];
} else {
    echo "Credenciales invalidas";
}*/
?>

<?php include("footer.php")?>