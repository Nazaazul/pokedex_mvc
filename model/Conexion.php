<?php
class Conexion {
    private $host = "127.0.0.1"; 
    private $db_name = "pokedex"; 
    private $username = "root"; 
    private $password = ""; 
    private $conexion;

    public function getConexion() {
        $this->conexion = null;
         $dsn = "mysql:host=" . $this->host . ";port=3307;dbname=" . $this->db_name . ";charset=utf8";
        
        try {
            $this->conexion = new PDO($dsn, $this->username, $this->password);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $exception) {
            echo "❌ Error de conexión: " . $exception->getMessage();
            exit; 
        }
        return $this->conexion;
    }
}
?>