<?php
require_once __DIR__ . '/../conexion/conexion.php';
/**
 * @var mysqli $mysqli
 */
try {
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $nombre = trim($_POST['nombre'] ?? '');
        $telefono = trim($_POST['telefono'] ?? '');
        $direccion = trim($_POST['direccion'] ?? '');
        $ciudad = trim($_POST['ciudad'] ?? '');
        $descripcion = trim($_POST['descripcion'] ?? '');
        $email = trim($_POST['email'] ?? '');
        $password = trim($_POST['contrasena'] ?? '');
        // Consulta para registrar un nuevo refugio
        $query = "INSERT INTO refugios (nombre, telefono, direccion,  ciudad, descripcion, email, contraseña) VALUES (?, ?, ?, ?, ?, ?, ?);";
        // Preparamos la consulta para la ejecucion
        $stmt = $mysqli->prepare($query);
        if (!$stmt) {
            throw new Exception('Error al preparar la consulta: ' . mysqli_error($mysqli));
        }
        // Vinculamos las variables a la consulta 
        $stmt->bind_param('sssssss', $nombre, $telefono, $direccion, $ciudad, $descripcion, $email, $password);
        // Ejecutamos la consulta preparada
        if (!$stmt->execute()) {
            throw new Exception('Error al ejecutar la consulta: ' . $stmt->error);
        }
        echo "<script>
             alert('Se registro el refugio correctamente');
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
