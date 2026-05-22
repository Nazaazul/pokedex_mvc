<?php
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