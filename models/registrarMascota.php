<?php
session_start();
require_once __DIR__ . '/../conexion/conexion.php';
require_once __DIR__ . '/../helpers/database.php';
require_once __DIR__ . '/../helpers/upload.php';
require_once __DIR__ . '/../helpers/errores.php';
/**
 * @var mysqli $mysqli
 */
$tipo = $_SESSION['usuario']['tipo'];
$id = $_SESSION['usuario']['id'];
$idUsuario = $tipo === 'normal' ? (int)$id : null;
$idRefugio = $tipo === 'refugio' ? (int)$id : null;
try {
    if ($_SERVER["REQUEST_METHOD"] === 'POST') {
        $nombre = trim($_POST['nombre'] ?? '');
        $especie = trim($_POST['especie'] ?? '');
        $raza = trim($_POST['raza'] ?? '');
        $edad = (int)trim($_POST['edad'] ?? '');
        $descripcion = trim($_POST['descripcion'] ?? '');
        $genero = trim($_POST['genero'] ?? '');
        $estado = trim($_POST['estado'] ?? '');
        $imagenUrl = procesarImagen($_FILES);
        $query = "INSERT INTO mascotas(nombre, especie, raza, edad, genero, descripcion, imagen_url, estado, id_usuario, id_refugio) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
        $datosMascotas = [$nombre, $especie, $raza, $edad, $genero, $descripcion, $imagenUrl, $estado, $idUsuario, $idRefugio];
        $stmt = ejecutarConsulta($mysqli, $query, 'sssissssii', $datosMascotas);
        header('Location: ../?registro=okMascota');
        exit;
    }
} catch (Exception $e) {
    $mensaje = obtenerMensajeErrorDB($e->getCode());
    header('Location: ../?registro=error&mensaje=' . urlencode($mensaje));
    exit;
} finally {
    if (isset($stmt)) {
        $stmt->close();
    }
    $mysqli->close();
}
