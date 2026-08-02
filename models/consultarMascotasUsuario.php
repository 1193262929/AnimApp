<?php
require_once __DIR__ . '/../controller/verificarSesion.php';
require_once __DIR__ . '/../conexion/conexion.php';
require_once __DIR__ . '/../helpers/database.php';

header('Content-Type: application/json'); // Le dice al navegador que el tiop de repuesta va a ser un JSON

try {
    $idUser = $_SESSION['usuario']['id'];
    $query = "SELECT * FROM mascotas WHERE id_usuario = ?";
    $registros = obtenerTodosRegistros($mysqli, $query, 'i', [$idUser]);
    echo json_encode($registros); // Convierte el arreglo que devuelve la consulta y la convierte en un JSON
} catch (Exception $e) {
    http_response_code(500); // Indica que ocurrio un error en el servidor
    echo json_encode([
        'error' => $e->getMessage()
    ]);
} finally {
    $mysqli->close();
}






