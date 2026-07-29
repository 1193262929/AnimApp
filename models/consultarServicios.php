<?php
require_once __DIR__ . '/../conexion/conexion.php';
require_once __DIR__ . '/../helpers/database.php';
/**
 * @var mysqli $mysqli
 */
try {
    $tablasPermitidas = [
        'tiendas',
        'paseadores',
        'veterinarias'
    ];
    $servicio = $_POST['servicio'] ?? ''; // Agregar trim()
    if (!in_array($servicio, $tablasPermitidas, true)) { // explicacion de este condicional
        throw new Exception('Servicio invalido');
    }
    $query = "SELECT * FROM $servicio";
    $registros = obtenerTodosRegistros($mysqli, $query);
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
} finally {
    $mysqli->close();
}
