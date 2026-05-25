<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['usuario_rol']) || $_SESSION['usuario_rol'] !== 'admin') {
    header("Location: index.php?seccion=listar&mensaje=error_no_admin");
    exit();
}

require_once 'model/PokemonModel.php';

class BorrarPokemonController {
    private $model;

    public function __construct() {
        
        $this->model = new PokemonModel();
    }

public function mostrarConfirmacionDeBorrar($id){
        $pokemon = $this->model->obtenerPorId($id);
        require_once 'view/borrarPokemon.php';
    }
public function borrarPokemon($id){
     $resultado = $this->model->borrarPokemon($id);

    
        header("Location: index.php?seccion=listar&mensaje=ok_borrar");
    
    exit;
}
}
?>