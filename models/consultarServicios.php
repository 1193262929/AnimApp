<?php
require_once __DIR__ . '/../conexion/conexion.php';
require_once __DIR__ . '/../helpers/database.php';
/**
 * @var mysqli $mysqli
 */
try {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $tabla = '';
        $servicios = $_POST['servicios'] ?? [];
        foreach ($servicios as $servicio) {
            switch ($servicio) {
                case 'tiendas':
                    $tabla = 'tiendas';
                    break;
                case 'veterinarias':
                    $tabla = 'veterinarias';
                    break;
                case 'paseadores':
                    $tabla = 'paseadores';
                    break;
                default:
                    continue;
            }
        }
        $query = "SELECT * FROM $tabla";
        $stmt = $mysqli->prepare($query);
        if (!$stmt) {
            throw new Exception('Error al preparar la consulta: ' . $mysqli->error);
        }
        $stmt->bind_param('s', $tabla);
        if (!$stmt->execute()) {
            throw new Exception('Error al ejecutar la consulta: ' . $stmt->error);
        }
        $resultado = $stmt->get_result();
        $fila = $resultado->fetch_assoc();
        echo $fila;
    }
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
} finally {
    $mysqli->close();
}
