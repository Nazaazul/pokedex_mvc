<?php include 'header.php'; ?>

<div class="container mt-4">
    <h2 class="mb-4">Inicio de sesión</h2>

    <?php if (isset($_GET['mensaje']) && $_GET['mensaje'] === 'error_login'): ?>
        <div class="mensaje-error">Usuario o contraseña inválidos.</div>
    <?php elseif (isset($_GET['mensaje']) && $_GET['mensaje'] === 'logout'): ?>
        <div class="mensaje-exito">Sesión cerrada correctamente.</div>
    <?php endif; ?>

    <form action="controller/LoginController.php" method="POST" style="max-width: 420px; margin-top: 20px;">
        <div class="mb-3">
            <label for="email" class="form-label">Correo electrónico</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="pokedex@mail.com" required>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="••••••••" required>
        </div>

        <button type="submit" class="btn btn-primary">Ingresar</button>
        <a href="index.php?seccion=listar" class="btn btn-secondary ms-2">Volver</a>
    </form>
</div>

<?php include 'footer.php'; ?>