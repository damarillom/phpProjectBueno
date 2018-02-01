<?php
$servername="localhost";
$username="admin";
$password="1234";
$database="test1";
require_once '../db/Conectar.php';

$con=new Conectar();
function getProductos() {
    try {
        global $con;
        
        $conn = $con->getConexion();//new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $sql="SELECT * FROM productos";
        
     //   echo $stmt->queryString;
        $resultado = $conn->query($sql);
        echo "<table><tr><td>NOMBRE</td><td>DESCRIPCION</td><td>PRECIO</td><td></td></tr>";
        $counter = 1;
        while ($fila = $resultado->fetch_assoc()) {
            
            /*echo "<tr><td>" . $fila["name"] . "</td><td>" . $fila["descripcion"] . "</td><td>" . $fila["precio"] . "</td><td><button onclick='insertCarrito(" . $fila["id"] . ")'>Añadir</button></td></tr>";*/
            echo "<tr><td>" . $fila["name"] . "</td><td>" . $fila["descripcion"] . "</td><td>" . $fila["precio"] . "</td><td><button onclick='añadirCesta(" . $fila["id"] . ")'>Añadir</button></td></tr>";
            /*echo "<tr><td>" . $fila["name"] . "</td><td>" . $fila["descripcion"] . "</td><td>" . $fila["precio"] . "</td><td><a href='producto" . $counter . ".php'>Añadir</a></td></tr>";*/
            $counter++;
        }
        echo "</table>";
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn->close();
}

?>
<script type="text/javascript">
    /*function insertCarrito(id) {*/
      /*  alert('hola');*/
		<?php 
		/*
    		try {
    		    global $con;
    		    
    		    $conn = $con->getConexion();   
    		    $sql="INSERT INTO cesta (product_id, cantidad, user_id) VALUES ("?> id <?php ", 1, 4)";
    		    $resultado = $conn->query($sql);
    		    
    		} catch(PDOException $e) {
    		    echo "Error: " . $e->getMessage();
    		}
    		$conn->close();*/
		?>
    /*}*/
</script>