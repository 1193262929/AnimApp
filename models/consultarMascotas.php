<?php
require_once __DIR__ . '/../conexion/conexion.php';
require_once __DIR__ . '/../helpers/database.php';
/**
 * @var mysqli $mysqli
 */
try {
    $query = "SELECT * FROM mascotas";
    $registros = obtenerTodosRegistros($mysqli, $query);
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
} finally {
    $mysqli->close();
}
