<?php

require_once(__DIR__ . "/../model/PokemonModel.php");

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['usuario_rol']) || $_SESSION['usuario_rol'] !== 'admin') {
    header("Location: ../index.php?seccion=listar&mensaje=error_no_admin");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = $_POST['nombrePokemon'];
    $numero = $_POST['numero'];
    $tipo1 = $_POST['tipo1'];

    //Esto es para que el usuario pueda no elegir tipo 2 (que me agarre el null sin romper todo)
    $tipo2 = (!empty($_POST['tipo2']) && $_POST['tipo2'] !== "null")
    ? $_POST['tipo2']
    : null;

    $nombreArchivo = null;

    if(isset($_FILES['imagen']) && $_FILES['imagen']['error'] == 0){

        $nombreArchivo = $_FILES['imagen']['name'];
        

        $rutaTemporal = $_FILES['imagen']['tmp_name'];

        $rutaDestino = "../imagenes/" . $nombreArchivo;

        move_uploaded_file($rutaTemporal, $rutaDestino);
    }

    
    //Llamar al modelo para guardarlo en la base de datos
    

    $pokemonModel = new PokemonModel();

    $resultado = $pokemonModel->crearPokemon(
        $nombre,
        $numero,
        $tipo1,
        $tipo2,
        $nombreArchivo
    );
    //redirect + Mensaje de exito
    if($resultado){

        header("Location: ../index.php?mensaje=ok");

    }else{

        header("Location: ../index.php?mensaje=error");
    }

    exit();
    
    }

class CrearPokemonController {
    private $model;

    public function __construct() {
        
        $this->model = new PokemonModel();
    }

    

    public function mostrarForm() {
        
        
        require_once 'view/crearPokemon.php';
    }

}
?>