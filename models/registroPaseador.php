<?php
require_once __DIR__ . '/../conexion/conexion.php';
require_once __DIR__ . '/../helpers/database.php';
/**
 * @var mysqli $mysqli
 */
try {
    if ($_SERVER["REQUEST_METHOD"] === 'POST') {
        $nombre = trim($_POST['nombre'] ?? '');
        $telefono = trim($_POST['telefono'] ?? '');
        $ciudad = trim($_POST['ciudad'] ?? '');
        $zonaTrabajo = trim($_POST['zonaTrabajo'] ?? '');
        $descripcion = trim($_POST['descripcion'] ?? '');
        $email = trim($_POST['email'] ?? '');
        $password = trim($_POST['contrasena'] ?? '');
        $query = "INSERT INTO paseadores (nombre, telefono, ciudad, zona_trabajo, descripcion, email, contraseña) VALUES (?, ?, ?, ?, ?, ?, ?);";
        $datosUsuario = [$nombre, $telefono, $ciudad, $zonaTrabajo, $descripcion, $email, $password];
        $stmt = ejecutarConsulta($mysqli, $query, 'sssssss', $datosUsuario);
        echo "<script>
                alert('Se registro el paseador exitosamente');
                window.location.href = '/'; 
            </script>";
    }
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
} finally {
    if (isset($stmt)) {
        $stmt->close();
    }
    $mysqli->close();
}