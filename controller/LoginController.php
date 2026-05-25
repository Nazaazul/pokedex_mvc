<?php
require_once __DIR__ . '/../model/UsuarioModel.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    $usuarioModel = new UsuarioModel();
    $usuario = $usuarioModel->validarCredenciales($email, $password);

    if ($usuario) {
        $_SESSION['usuario_id'] = $usuario['id'];
        $_SESSION['usuario_nombre'] = $usuario['nombre'];
        $_SESSION['usuario_email'] = $usuario['email'];
        $_SESSION['usuario_rol'] = $usuario['rol'];

        header('Location: ../index.php?seccion=listar&mensaje=ok');
        exit();
    }

    header('Location: ../index.php?seccion=login&mensaje=error_login');
    exit();
}

class LoginController {
    public function mostrarForm() {
        require_once 'view/login.php';
    }

    public function logout() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        session_unset();
        session_destroy();

        header('Location: index.php?seccion=login&mensaje=logout');
        exit();
    }
}
?>