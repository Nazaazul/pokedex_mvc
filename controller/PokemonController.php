<?php
require_once 'model/PokemonModel.php';

class PokemonController {
    private $model;

    public function __construct() {
        
        $this->model = new PokemonModel();
    }

    public function listar() {
        
        $busqueda = isset($_GET['busqueda']) ? $_GET['busqueda'] : "";
        
       
        $pokemones = $this->model->getAll($busqueda);
        
        
        require_once 'view/listar.php';
    }
}
?>