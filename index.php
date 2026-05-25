<?php

session_start();

if(isset($_GET['mensaje'])){

    if($_GET['mensaje'] == "ok" || $_GET['mensaje'] == "ok_borrar"){

        echo "<p class='mensaje-exito'>Se realizó con exito</p>";

    }elseif($_GET['mensaje'] == "error"){

        echo "<p class='mensaje-error'>Ocurrio un error</p>";
    }
}

$seccion = isset($_GET['seccion']) ? $_GET['seccion'] : (isset($_SESSION['usuario_id']) ? 'listar' : 'login');

switch ($seccion) {
    case 'listar':
        if (!isset($_SESSION['usuario_id'])) {
            header('Location: index.php?seccion=login');
            exit();
        }
        require_once 'controller/PokemonController.php';
        $controller = new PokemonController();
        $controller->listar();
        break;

    case 'nuevo':
        if(!isset($_SESSION['usuario_rol']) || $_SESSION['usuario_rol'] !== 'admin'){
            header('Location: index.php?seccion=listar&mensaje=error_no_admin');
            exit();
        }
        require_once 'controller/CrearPokemonController.php';
        $controller = new CrearPokemonController();
        $controller->mostrarForm();
        break;

    case 'procesar_modificacion':
        require_once 'controller/modificarPokemonController.php';
        $controller = new modificarPokemonController();
        //$controller->borrarPokemon($_GET['id']);
        break;

    case 'login':
        if (isset($_SESSION['usuario_id'])) {
            header('Location: index.php?seccion=listar');
            exit();
        }
        require_once 'controller/LoginController.php';
        $controller = new LoginController();
        $controller->mostrarForm();
        break;

    case 'logout':
        require_once 'controller/LoginController.php';
        $controller = new LoginController();
        $controller->logout();
        break;

    case 'borrar':
        if(!isset($_SESSION['usuario_rol']) || $_SESSION['usuario_rol'] !== 'admin'){
            header('Location: index.php?seccion=listar&mensaje=error_no_admin');
            exit();
        }
        require_once 'controller/BorrarPokemonController.php';
        $controller = new BorrarPokemonController();
        $controller->mostrarConfirmacionDeBorrar($_GET['id']);
    break;
    case 'modificar':
        if(!isset($_SESSION['usuario_rol']) || $_SESSION['usuario_rol'] !== 'admin'){
            header('Location: index.php?seccion=listar&mensaje=error_no_admin');
            exit();
        }
        require_once 'controller/modificarPokemonController.php';
        $controller = new ModificarPokemonController();
        $controller->mostrarFormDeModificarPokemon($_GET['id']);
    break;
    case 'confirmar_borrar':
        if(!isset($_SESSION['usuario_rol']) || $_SESSION['usuario_rol'] !== 'admin'){
            header('Location: index.php?seccion=listar&mensaje=error_no_admin');
            exit();
        }
        require_once 'controller/BorrarPokemonController.php';
        $controller = new BorrarPokemonController();
        $controller->borrarPokemon($_GET['id']);
    break;
    case 'detalle':
        require_once 'controller/DetallePokemonController.php';
        $controller = new DetallePokemonController();
        $controller->mostrarDetallePokemon($_GET['id']);
        break;
    default:
        echo "<h1>Error 404 - Ruta no encontrada</h1>";
        break;
}
?>