<?php
require_once 'model/PokemonModel.php';
class DetallePokemonController {
    private $model;

    public function __construct() {
        
        $this->model = new PokemonModel();
    }

    

    public function mostrarDetallePokemon($id) {
        
         $pokemon = $this->model->obtenerPorId($id);
        require_once 'view/detallePokemon.php';
    }

}
?>