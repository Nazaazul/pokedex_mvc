<?php


$seccion = isset($_GET['seccion']) ? $_GET['seccion'] : 'listar';

switch ($seccion) {
    case 'listar':
        require_once 'controller/PokemonController.php';
        $controller = new PokemonController();
        $controller->listar();
        break;

    case 'nuevo':
        //  RUTA PARA EL SOCIO 2 (ABM - Cargar Nuevo)
        // Cuando el Socio 2 cree su PokemonController, solo debe borrar este echo y poner su lógica:
        // require_once 'controller/PokemonController.php';
        // $controller = new PokemonController();
        // $controller->mostrarFormulario();
        echo "<h1>Zona en construcción - Espacio del Socio 2 (Cargar Nuevo)</h1>";
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

    default:
        echo "<h1>Error 404 - Ruta no encontrada</h1>";
        break;
}
?>