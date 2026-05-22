<?php

require_once 'Conexion.php';

class TipoModel {

    private $conexion;

    public function __construct() {
        
        $bd = new Conexion();
        $this->conexion = $bd->getConexion();
    }

    public function obtenerTipos() {

        $sql = "SELECT id as id_tipo,
        descripcion as nombre_tipo, 
        imagen as imagen_tipo FROM tipo";

        $query = $this->conexion->prepare($sql);
        $query->execute();

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}