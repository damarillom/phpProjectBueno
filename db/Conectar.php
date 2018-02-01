<?php

class Conectar{
//     private $host, $user, $pass, $db;
    
//     public function __construct() {
//         $config = require_once '../config/config.php';
//         //$config = require_once './config/config.php';
//         $this->host = $config['host'];
//         $this->user = $config['user'];
//         $this->pass = $config['password'];
//         $this->db = $config['db'];
//     }a
    
//     public function getConexion() {
//         $con=new mysqli($this->host,$this->user,$this->pass,$this->db);
//         echo $con->connect_error;
//         return $con;
//     }

    public function __construct() {
        $config = require '../config/config.php';
        $this->username = $config['user'];
        $this->pass = $config['password'];
        $this->db = $config['db'];
        $this->dsn = "mysql:host=localhost;dbname=" . $this->dbname;
    }
    
    public function getConexion() {
        $con = new PDO($this->dsn, $this->username, $this->pass);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $con;
    }
}


?>