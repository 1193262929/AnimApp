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
        $stmt = ejecutarConsulta($mysqli, $query,'sssssss', $datosUsuario);
        // // Preparamos la consulta para la ejecucion
        // $stmt = $mysqli->prepare($query);
        // if (!$stmt) {
        //     throw new Exception('Error al preparar la consulta: ' . mysqli_error($mysqli));
        // }
        // // Vinculamos las variables a la consulta 
        // $stmt->bind_param('sssssss', $nombre, $apellido, $email, $direccion, $telefono, $ciudad, $password);
        // // Ejecutamos la consulta 
        // if (!$stmt->execute()) {
        //     throw new Exception('Error al ejecutar la consulta: ' . $stmt->error);
        // }
        echo "<script>
             alert('Registro de usuario exitoso');
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
