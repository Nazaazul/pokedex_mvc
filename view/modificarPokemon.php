<?php include 'header.php';
require_once 'model/TipoModel.php';

$tipoModel = new TipoModel();
$tipos = $tipoModel->obtenerTipos();
?>

<div class="container mt-5 d-flex justify-content-center">

    <div class="card shadow-lg border-0 rounded-4 p-4 pokemon-form-container">

        <div class="text-center mb-4">
            <h2 class="fw-bold text-danger">Modificar Pokémon</h2>

            <img 
                src="imagenes/<?php echo $pokemon['pokemon_imagen']; ?>" 
                width="140"
                class="pokemon-img mt-3"
            >
        </div>

        <form 
            action="controller/modificarPokemonController.php" 
            method="POST" 
            enctype="multipart/form-data"
        >

            <input type="hidden" name="id" value="<?php echo $pokemon['id']; ?>">

            <!-- Nombre -->
            <div class="mb-3">
                <label class="form-label fw-semibold">
                    Nombre del Pokémon
                </label>

                <input 
                    type="text"
                    name="nombrePokemon"
                    class="form-control"
                    value="<?php echo $pokemon['nombre']; ?>"
                >
            </div>

            <!-- Número -->
            <div class="mb-3">
                <label class="form-label fw-semibold">
                    Número en la Pokédex
                </label>

                <input 
                    type="number"
                    name="numero"
                    class="form-control"
                    value="<?php echo $pokemon['numero']; ?>"
                >
            </div>

            <!-- Tipo 1 -->
            <div class="mb-3">
                <label class="form-label fw-semibold">
                    Tipo 1
                </label>

                <select name="tipo1" id="tipo1" class="form-select">

                    <?php foreach($tipos as $tipo): ?>

                        
                        <option
                        value="<?= $tipo['id_tipo'] ?>">
                        <?= $tipo['nombre_tipo'] ?>
                        </option>

                    <?php endforeach; ?>

                </select>
            </div>

            <!-- Tipo 2 -->
            <div class="mb-3">
                <label class="form-label fw-semibold">
                    Tipo 2
                </label>

                <select name="tipo2" id="tipo2" class="form-select">

                    <option value="">Sin tipo 2</option>

                    <?php foreach($tipos as $tipo): ?>

                        <option value="<?= $tipo['id_tipo'] ?>">
                        <?= $tipo['nombre_tipo'] ?>
                        </option>

                    <?php endforeach; ?>

                </select>
            </div>

            <!-- Descripción -->
            <div class="mb-3">
                <label class="form-label fw-semibold">
                    Descripción
                </label>

                <textarea 
                    name="descripcion" 
                    id="descripcion"
                    rows="4"
                    class="form-control"
                ><?php echo $pokemon['descripcion']; ?></textarea>
            </div>

            <!-- Imagen -->
            <div class="mb-4">
                <label class="form-label fw-semibold">
                    Nueva Imagen
                </label>

                <input 
                    type="file" 
                    name="imagen"
                    class="form-control"
                >
            </div>

            <!-- Botones -->
            <div class="d-flex justify-content-between">

                <a 
                    href="index.php?seccion=listar"
                    class="btn btn-outline-secondary px-4"
                >
                    Cancelar
                </a>

                <button 
                    type="submit" 
                    class="btn btn-danger px-4 fw-semibold"
                >
                    Modificar
                </button>

            </div>

        </form>

    </div>

</div>

<style>

.pokemon-form-container{
    width: 100%;
    max-width: 600px;
    background-color: #ffffff;
}

.pokemon-img{
    border-radius: 12px;
    padding: 10px;
    background-color: #f8f9fa;
    box-shadow: 0 4px 10px rgba(0,0,0,0.15);
    transition: transform 0.2s ease;
}

.pokemon-img:hover{
    transform: scale(1.05);
}

.form-control,
.form-select{
    border-radius: 10px;
    padding: 10px;
}

textarea.form-control{
    resize: none;
}

.btn{
    border-radius: 10px;
}

</style>

<?php include 'footer.php'; ?>