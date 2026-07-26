<?php
require_once __DIR__ . '/../conexion/conexion.php';
require_once __DIR__ . '/../helpers/database.php';
require_once __DIR__ . '/../helpers/upload.php';
/**
 * @var mysqli $mysqli
 */
try {
    if ($_SERVER["REQUEST_METHOD"] === 'POST') {
        $nombre = trim($_POST['nombre'] ?? '');
        $telefono = trim($_POST['telefono'] ?? '');
        $direccion = trim($_POST['direccion'] ?? '');
        $ciudad = trim($_POST['ciudad'] ?? '');
        $descripcion = trim($_POST['descripcion'] ?? '');
        $email = trim($_POST['email'] ?? '');
        $password = trim($_POST['contrasena'] ?? '');
        $imagenUrl = procesarImagen($_FILES);
        $query = "INSERT INTO tiendas (nombre, telefono, direccion,  ciudad, descripcion,imagen_url, email, contraseña) VALUES (?, ?, ?, ?, ?, ?, ?, ?);";
        $datosUsuario = [$nombre, $telefono, $direccion, $ciudad, $descripcion, $imagenUrl, $email, $password];
        $stmt = ejecutarConsulta($mysqli, $query, 'ssssssss', $datosUsuario);
        echo "<script>
             alert('Se registro su tienda exitosamente');
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
