<?php



if(isset($_GET['mensaje'])){

    if($_GET['mensaje'] == "ok" || $_GET['mensaje'] == "ok_borrar"){

        echo "<p class='mensaje-exito'>Se realizo el cambio con exito</p>";

    }elseif($_GET['mensaje'] == "error"){

        echo "<p class='mensaje-error'>Ocurrio un error</p>";
    }
}

$seccion = isset($_GET['seccion']) ? $_GET['seccion'] : 'listar';

switch ($seccion) {
    case 'listar':
        require_once 'controller/PokemonController.php';
        $controller = new PokemonController();
        $controller->listar();
        break;

    case 'nuevo':
        require_once 'controller/CrearPokemonController.php';
        $controller = new CrearPokemonController();
        $controller->mostrarForm();
        break;

    case 'procesar_alta':
        //  RUTA PARA EL SOCIO 2 (Procesar el formulario de guardado)
        echo "<h1>Zona en construcción - Espacio del Socio 2 (Guardar en BD)</h1>";
        break;

    case 'login':
        //  RUTA PARA EL SOCIO 3 (Seguridad - Login)
        // Cuando el Socio 3 cree su LoginController, pondrá su lógica acá:
        echo "<h1>Zona en construcción - Espacio del Socio 3 (Formulario Login)</h1>";
        break;
    case 'borrar':
        require_once 'controller/BorrarPokemonController.php';
        $controller = new BorrarPokemonController();
        $controller->mostrarConfirmacionDeBorrar($_GET['id']);
    break;
    case 'modificar':
        echo "<h1>Modificar</h1>";
    break;
    case 'confirmar_borrar':
        require_once 'controller/BorrarPokemonController.php';
        $controller = new BorrarPokemonController();
        $controller->borrarPokemon($_GET['id']);
    break;
    default:
        echo "<h1>Error 404 - Ruta no encontrada</h1>";
        break;
}
?>