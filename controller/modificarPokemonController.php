<?php

require_once(__DIR__ . "/../model/PokemonModel.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $pokemonModel = new PokemonModel();

    $id = $_POST['id'];

    // Obtener pokemon actual
    $pokemonActual = $pokemonModel->obtenerPorId($id);

    // Si viene vacío, mantener valor actual
    $nombre = !empty($_POST['nombrePokemon'])
        ? $_POST['nombrePokemon']
        : $pokemonActual['nombre'];

    $numero = !empty($_POST['numero'])
        ? $_POST['numero']
        : $pokemonActual['numero'];

    $tipo1 = !empty($_POST['tipo1'])
        ? $_POST['tipo1']
        : $pokemonActual['id_tipo1'];

    $tipo2 = ($_POST['tipo2'] !== "")
        ? $_POST['tipo2']
        : $pokemonActual['id_tipo2'];

    $descripcion = !empty($_POST['descripcion'])
        ? $_POST['descripcion']
        : $pokemonActual['descripcion'];

    // Imagen
    $nombreArchivo = $pokemonActual['pokemon_imagen'];

    if(isset($_FILES['imagen']) && $_FILES['imagen']['error'] == 0){

        $nombreArchivo = $_FILES['imagen']['name'];

        $rutaTemporal = $_FILES['imagen']['tmp_name'];

        $rutaDestino = "../imagenes/" . $nombreArchivo;

        move_uploaded_file($rutaTemporal, $rutaDestino);
    }

    $resultado = $pokemonModel->modificarPokemon(
        $id,
        $nombre,
        $numero,
        $tipo1,
        $tipo2,
        $descripcion,
        $nombreArchivo
    );

    if($resultado){

        header("Location: ../index.php?seccion=listar&mensaje=ok");

    }else{

        header("Location: ../index.php?seccion=listar&mensaje=error");
    }

    exit();
}

class modificarPokemonController {
    private $model;

    public function __construct() {
        
        $this->model = new PokemonModel();
    }

    public function mostrarFormDeModificarPokemon($id){
        $pokemon = $this->model->obtenerPorId($id);
        require_once 'view/modificarPokemon.php';
    }
}
?>