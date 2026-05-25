<?php
require_once 'Conexion.php';

class UsuarioModel {
    private $conexion;

    public function __construct() {
        $bd = new Conexion();
        $this->conexion = $bd->getConexion();
    }

    public function obtenerPorEmail($email) {
        $stmt = $this->conexion->prepare("SELECT * FROM usuarios WHERE email = ? LIMIT 1");
        $stmt->execute([$email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function validarCredenciales($email, $password) {
        $usuario = $this->obtenerPorEmail($email);

        if (!$usuario) {
            return false;
        }

        if (password_verify($password, $usuario['password'])) {
            return $usuario;
        }

        return false;
    }
}
?>