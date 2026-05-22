<?php 
include 'header.php'; 
require_once 'model/TipoModel.php';

$tipoModel = new TipoModel();
$tipos = $tipoModel->obtenerTipos();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Pokemon</title>

    <link rel="stylesheet" href="css/crearPokemon.css">
</head>

<body>

<div class="form-container">

    <h2>Crear Pokemon</h2>

    <form action="controller/CrearPokemonController.php"
          method="POST"
          enctype="multipart/form-data">

        <label>Nombre del pokemon</label>
        <input type="text"
               name="nombrePokemon"
               placeholder="Ej: Pikachu"
               required>

        <label>Numero en la pokedex</label>
        <input type="number"
               name="numero"
               required>

        <label>Tipo 1</label>
        <select name="tipo1" id="tipo1">

            <?php foreach($tipos as $tipo): ?>

                <option value="<?= $tipo['id_tipo'] ?>">
                    <?= $tipo['nombre_tipo'] ?>
                </option>

            <?php endforeach; ?>

        </select>

        <label>Tipo 2</label>

        <select name="tipo2" id="tipo2">

            <option value="">Sin tipo 2</option>

            <?php foreach($tipos as $tipo): ?>

                <option value="<?= $tipo['id_tipo'] ?>">
                    <?= $tipo['nombre_tipo'] ?>
                </option>

            <?php endforeach; ?>

        </select>

        <label>Imagen</label>
        <input type="file" name="imagen">

        <input type="submit"
               value="Crear Pokemon"
               class="btn-crear">

    </form>

</div>

</body>
</html>

<?php include 'footer.php'; ?>