<?php 
    require_once '../pdo/productosPDO.php';
    /*if (isset($_SESSION['carro']))
    {
        echo "holsa sesion";
        $_SESSION['carro']=$carro;
    }else{
        echo "hola";
    }*/
    /*$carro=$_POST['carro'];
    $_SESSION['']=$carro;*/
    getProductos();
    
    require '../pdo/carroPDO.php';
    
   
?>