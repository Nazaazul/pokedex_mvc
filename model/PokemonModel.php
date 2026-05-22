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
            $sql = "SELECT 
            pokemon.id,
            pokemon.nombre,
            pokemon.numero,
            pokemon.descripcion,
            pokemon.imagen AS pokemon_imagen,

            tipo1.imagen AS tipo1_imagen,
            tipo2.imagen AS tipo2_imagen,
            tipo1.descripcion AS tipo1_nombre,
            tipo2.descripcion AS tipo2_nombre
            FROM pokemon 
            LEFT JOIN tipo AS tipo1 ON pokemon.id_tipo1 = tipo1.id 
            LEFT JOIN tipo AS tipo2 ON pokemon.id_tipo2 = tipo2.id
            WHERE nombre LIKE ?
            OR tipo1.descripcion LIKE ?
            OR tipo2.descripcion LIKE ?";
            $stmt = $this->conexion->prepare($sql);
            $termino = "%" . $busqueda . "%";
            
            // Pasamos el mismo término dos veces (uno para cada signo de pregunta)
            $stmt->execute([$termino, $termino, $termino]);
        } else {
            $sql = "SELECT
            pokemon.id,
            pokemon.nombre,
            pokemon.numero,
            pokemon.descripcion,
            pokemon.imagen AS pokemon_imagen,

            tipo1.imagen AS tipo1_imagen,
            tipo2.imagen AS tipo2_imagen,
            tipo1.descripcion AS tipo1_nombre,
            tipo2.descripcion AS tipo2_nombre
            FROM pokemon 
            LEFT JOIN tipo AS tipo1 ON pokemon.id_tipo1 = tipo1.id 
            LEFT JOIN tipo AS tipo2 ON pokemon.id_tipo2 = tipo2.id";
            $stmt = $this->conexion->prepare($sql);
            $stmt->execute();
        }
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function crearPokemon($nombre, $numero, $tipo1, $tipo2, $imagen){

    $sql = "INSERT INTO pokemon
            (nombre, numero, id_tipo1, id_tipo2, imagen)
            VALUES
            (:nombre, :numero, :tipo1, :tipo2, :imagen)";

    $query = $this->conexion->prepare($sql);

    $query->bindParam(":nombre", $nombre);
    $query->bindParam(":numero", $numero);  
    $query->bindParam(":tipo1", $tipo1);

    // Manejar NULL que recibio del Controller
    if($tipo2 === null){
    $query->bindValue(":tipo2", null, PDO::PARAM_NULL);
    }else{
    $query->bindValue(":tipo2", $tipo2, PDO::PARAM_INT);
    }

    
    $query->bindParam(":imagen", $imagen);

    return $query->execute();
}
}
?>