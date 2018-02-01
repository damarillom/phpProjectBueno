<?php
$servername="localhost";
$username="admin";
$password="1234";
$database="test1";
require_once '../db/Conectar.php';

$con=new Conectar();
function añadirCesta($productoid) {
    try {
        global $con;
        
        $conn = $con->getConexion();
        
        $sql="INSERT INTO cesta (product_id, cantidad, user_id) VALUES (" . $productoid . ", 1, 4)";
        
        //   echo $stmt->queryString;
        $resultado = $conn->query($sql);
        
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn->close();
}

?>