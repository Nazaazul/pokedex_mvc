<?php include 'header.php'; ?>

<h1 style="color: #333; border-bottom: 2px solid #d32f2f; padding-bottom: 10px;">Mis Pokémon</h1>

<?php if (isset($_SESSION['usuario_rol']) && $_SESSION['usuario_rol'] === 'admin'): ?>
    <div style="margin-bottom: 20px;">
        <a href="index.php?seccion=nuevo" class="btn btn-success">Crear Pokémon</a>
    </div>
<?php endif; ?>

<form action="index.php" method="GET" style="margin-bottom: 20px; display: flex; gap: 10px; align-items: center;">
    <input type="hidden" name="seccion" value="listar">
    <input type="text" name="busqueda" placeholder="Buscar por nombre o tipo..." required style="padding: 8px; width: 250px; border: 1px solid #ccc; border-radius: 4px;">
    <button type="submit">Buscar</button>
    <a href="index.php?seccion=listar" class="btn-limpiar">Limpiar</a>
</form>

<table>
    <thead>
        <tr>
            <th>Imagen</th>
            <th>Número</th>
            <th>Nombre</th>
            <th>Tipo</th>
            <?php if (isset($_SESSION['usuario_rol']) && $_SESSION['usuario_rol'] === 'admin'): ?>
                <th>Acciones</th>
            <?php endif; ?>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($pokemones as $p): ?>
            <tr>
                <td style="text-align: center;">
                    <?php if(!empty($p['pokemon_imagen'])): ?>
                        <img src="imagenes/<?php echo $p['pokemon_imagen']; ?>" width="60" style="border-radius: 5px; box-shadow: 0 2px 4px rgba(0,0,0,0.2);" alt="Foto">
                    <?php else: ?>
                        <span style="color: #999; font-size: 0.9em;">Sin foto</span>
                    <?php endif; ?>
                </td>
                <td><?php echo $p['numero']; ?></td>
                <td><a class='link-underline link-underline-opacity-0 text-reset' href="index.php?seccion=detalle&id=<?php echo $p['id']; ?>"><strong><?php echo $p['nombre']; ?></strong></a></td>
                <td>
                    <?php echo "<img src='imagenes/" .  $p['tipo1_imagen'] . "' style='width:25px;'>"; ?>
                    <?php if(!empty($p['tipo2_imagen'])): ?>
                    <img src="imagenes/<?php echo $p['tipo2_imagen']; ?>" style="width:25px;">
                    <?php endif; ?>
                </td>
                <?php if (isset($_SESSION['usuario_rol']) && $_SESSION['usuario_rol'] === 'admin'): ?>
                    <td>
                        <a class='link-underline link-underline-opacity-0 text-reset' href="index.php?seccion=modificar&id=<?php echo $p['id']; ?>"> <i class='bi bi-pencil'> </i> </a>
                        <a class="link-underline link-underline-opacity-0 text-reset" href="index.php?seccion=borrar&id=<?php echo $p['id']; ?>"> <i class='bi bi-trash'> </i>  </a>
                    </td>
                <?php endif; ?>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php include 'footer.php'; ?>