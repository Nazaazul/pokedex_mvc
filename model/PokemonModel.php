<?php
require_once 'Conexion.php';

class PokemonModel {
    private $conexion;

    public function __construct() {
        
        $bd = new Conexion();
        $this->conexion = $bd->getConexion();
    }

 public function getAll($busqueda = "") {
        if ($busqueda != "") {
            // Buscamos si coincide con el nombre O con el tipo
            $sql = "SELECT * FROM pokemon WHERE nombre LIKE ? OR tipo LIKE ?";
            $stmt = $this->conexion->prepare($sql);
            $termino = "%" . $busqueda . "%";
            
            // Pasamos el mismo término dos veces (uno para cada signo de pregunta)
            $stmt->execute([$termino, $termino]);
        } else {
            $sql = "SELECT * FROM pokemon";
            $stmt = $this->conexion->prepare($sql);
            $stmt->execute();
        }
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>