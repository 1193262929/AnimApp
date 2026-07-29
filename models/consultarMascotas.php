<?php
require_once __DIR__ . '/../conexion/conexion.php';
require_once __DIR__ . '/../helpers/database.php';
/**
 * @var mysqli $mysqli
 */
$filtro = strtolower(trim($_POST['filtro'] ?? null)); 
try {
    $query = "SELECT * FROM mascotas WHERE especie = '$filtro'";
    $registros = obtenerTodosRegistros($mysqli, $query);
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
} finally {
    $mysqli->close();
}
