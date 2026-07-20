<?php
require_once __DIR__ . '/../conexion/conexion.php';
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
        // Consulta para registrar un nuevo paseador
        $query = "INSERT INTO paseadores (nombre, telefono, ciudad, zona_trabajo, descripcion, email, contraseña) VALUES (?, ?, ?, ?, ?, ?, ?);";
        // Preparamos la consulta para la ejecucion
        $stmt = $mysqli->prepare($query);
        if (!$stmt) {
            throw new Exception('Error al preparar la consulta: ' . mysqli_error($mysqli));
        }
        // Vinculamos las variables a la consulta 
        $stmt->bind_param('sssssss', $nombre, $telefono, $ciudad, $zonaTrabajo, $descripcion, $email, $password);
        // Ejecutamos la consulta preparada
        if (!$stmt->execute()) {
            throw new Exception('Error al ejecutar la consulta: ' . $stmt->error);
        }
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
