<?php include 'header.php'; ?>

<link rel="stylesheet" href="Css/modificarPokemon.css">
<div class="text-center">
    <h2>Confirmar eliminación</h2>

    <p>¿Seguro que querés borrar este Pokémon?</p>
</div>

<div class="container mt-1  justify-content-center">
    
        <div class="text-center">
            <h3><strong><?php echo $pokemon['nombre']; ?></strong></h3>

            <span class="pokemon-number">
            #<?php echo $pokemon['numero']; ?>
            </span><br>

            <img   style="border-radius: 5px; box-shadow: 0 2px 4px rgba(0,0,0,0.2);" 
            src="imagenes/<?php echo $pokemon['pokemon_imagen']; ?>" width="120">
            

            

            <div class="mt-4">
                <p class="class="pokemon-description"><?php echo $pokemon['descripcion']; ?></p>
            </div>

            <button type="button" class="btn btn-success" >
            <a class="link-underline link-underline-opacity-0 text-reset" 
            href="index.php?seccion=listar">Cancelar</a>
            </button>

            <button type="button" class="btn btn-danger">
            <a class="link-underline link-underline-opacity-0 text-reset" 
            href="index.php?seccion=confirmar_borrar&id=<?php echo $pokemon['id']; ?>"> Borrar </a>
            </button>
        </div>

    
</div>
<?php include 'footer.php'; ?>