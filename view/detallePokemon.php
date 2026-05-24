<?php include 'header.php'; ?>
<link rel="stylesheet" href="Css/DetallePokemon.css">

<div class="container mt-5 d-flex justify-content-center">
    <div class="card pokemon-card shadow-lg border-0 rounded-4 p-4">

        <div class="text-center">
            <span class="pokemon-number">
                #<?php echo $pokemon['numero']; ?>
            </span>

            <h1 class="pokemon-title">
                <?php echo $pokemon['nombre']; ?>
            </h1>

            <img 
                class="pokemon-img mt-3"
                src="imagenes/<?php echo $pokemon['pokemon_imagen']; ?>"
                alt="<?php echo $pokemon['nombre']; ?>"
            >
        </div>

        <div class="mt-4">
            <p class="pokemon-description">
                <?php echo $pokemon['descripcion']; ?>
            </p>
        </div>

        <div class="types-container">

            <div class="type-badge">
                <img src="imagenes/<?php echo $pokemon['tipo1_imagen']; ?>">
                <span><?php echo $pokemon['tipo1_nombre']; ?></span>
            </div>

            <?php if(!empty($pokemon['tipo2_imagen'])): ?>
                <div class="type-badge">
                    <img src="imagenes/<?php echo $pokemon['tipo2_imagen']; ?>">
                    <span><?php echo $pokemon['tipo2_nombre']; ?></span>
                </div>
            <?php endif; ?>

        </div>

    </div>
</div>




<?php include 'footer.php'; ?>