<?php
require_once __DIR__ . '/../conexion/conexion.php';
/**
 * @var mysqli $mysqli
 */
try {
    if ($_SERVER["REQUEST_METHOD"] === 'POST') {
        // Obtenemos los datos enviados desde el formulario
        $nombre = trim($_POST['nombre'] ?? '');
        $telefono = trim($_POST['telefono'] ?? '');
        $direccion = trim($_POST['direccion'] ?? '');
        $ciudad = trim($_POST['ciudad'] ?? '');
        $descripcion = trim($_POST['descripcion'] ?? '');
        $email = trim($_POST['email'] ?? '');
        $password = trim($_POST['contrasena'] ?? '');

        // Consulta para insertar una nueva veterinaria
        $query = "INSERT INTO veterinarias (nombre, telefono, direccion,  ciudad, descripcion, email, contraseña) VALUES (?, ?, ?, ?, ?, ?, ?);";
        // Preparamos la consulta para la ejecucion
        $stmt = $mysqli->prepare($query);
        if (!$stmt) {
            throw new Exception('Error al preparar la consulta: ' . mysqli_error($mysqli));
        }
        // Vinculamos las variables a la consulta 
        $stmt->bind_param('sssssss', $nombre, $telefono, $direccion, $ciudad, $descripcion, $email, $password);
        // Ejecutamos la consulta
        if (!$stmt->execute()) {
            throw new Exception('Error al ejecutar la consulta: ' . $stmt->error);
        } 
        echo "<script>
             alert('Se registro la veterinaria exitosamente');
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
