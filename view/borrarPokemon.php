<?php include 'header.php'; ?>
<h2>Confirmar eliminación</h2>

<p>¿Seguro que querés borrar este Pokémon?</p>
<p><strong><?php echo $pokemon['nombre']; ?></strong></p>
<div>



<img   style="border-radius: 5px; box-shadow: 0 2px 4px rgba(0,0,0,0.2);" src="imagenes/<?php echo $pokemon['imagen']; ?>" width="120">
<p>Numero: <?php echo $pokemon['numero']; ?></p>
<p><?php echo $pokemon['descripcion']; ?></p>

</div>

<button type="button" class="btn btn-success" ><a class="link-underline link-underline-opacity-0 text-reset" href="index.php?seccion=listar">Cancelar</a></button>

<button type="button" class="btn btn-danger"><a class="link-underline link-underline-opacity-0 text-reset" href="index.php?seccion=confirmar_borrar&id=<?php echo $pokemon['id']; ?>"> Borrar </a> </button>
<?php include 'footer.php'; ?>