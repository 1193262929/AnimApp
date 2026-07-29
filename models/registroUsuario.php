<?php
require_once __DIR__ . '/../conexion/conexion.php';
require_once __DIR__ . '/../helpers/database.php';
/**
 * @var mysqli $mysqli
 */
try {
    if ($_SERVER["REQUEST_METHOD"] === 'POST') {
        $nombre = trim($_POST['nombre'] ?? '');
        $apellido = trim($_POST['apellido'] ?? '');
        $telefono = trim($_POST['telefono'] ?? '');
        $direccion = trim($_POST['direccion'] ?? '');
        $ciudad = trim($_POST['ciudad'] ?? '');
        $email = trim($_POST['email'] ?? '');
        $password = trim($_POST['contrasena'] ?? '');
        $query = "INSERT INTO usuarios_normales (nombre, apellido, email, direccion, telefono, ciudad, contraseña) VALUES (?, ?, ?, ?, ?, ?, ?);";
        $datosUsuario = [$nombre, $apellido, $email, $direccion, $telefono, $ciudad, $password];
        $stmt = ejecutarConsulta($mysqli, $query, 'sssssss', $datosUsuario);
        header('Location: ../?registro=ok&tipoUsuario=normal');
        exit;
    }
} catch (Exception $e) {
    header('Location: ../?registro=error&mensaje=' . urlencode($e->getMessage()));
    exit;
} finally {
    if (isset($stmt)) {
        $stmt->close();
    }
    $mysqli->close();
}
