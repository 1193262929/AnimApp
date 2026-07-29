<?php
session_start();
require_once __DIR__ . '/../conexion/conexion.php';
require_once __DIR__ . '/../helpers/database.php';
/**
 * @var mysqli $mysqli
 */
try {
    // Verifica que el formulario haya sido enviado mediante POST
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $emailUsuario = trim($_POST['email'] ?? '');
        $password = trim($_POST['password'] ?? '');
        if ($emailUsuario === '' || $password === '') {
            throw new Exception('Debe ingresar el correo y la contraseña.');
        }
        // Consultas para validar el usuario en cada tipo de cuenta
        $queries = [
            "usuarios_normales" => "SELECT id_usuario AS id, tipo_usuario FROM usuarios_normales WHERE email = ? AND contraseña = ?",
            "refugios" => "SELECT id_refugio AS id, tipo_usuario FROM refugios WHERE email = ? AND contraseña = ?",
            "tiendas" => "SELECT id_tienda AS id, tipo_usuario FROM tiendas WHERE email = ? AND contraseña = ?",
            "paseadores" => "SELECT id_paseador AS id, tipo_usuario FROM paseadores WHERE email = ? AND contraseña = ?",
            "veterinarias" => "SELECT id_veterinaria AS id, tipo_usuario FROM veterinarias WHERE email = ? AND contraseña = ?"
        ];
        // Rutas de redirección según el tipo de usuario
        $redirecciones = [
            'normal' => '/index.php',
            'refugio' => '/views/home/refugio.php',
            'tienda' => '/views/home/tienda.php',
            'paseador' => '/views/home/paseador.php',
            'veterinaria' => '/views/home/veterinaria.php',
        ];
        $datosSelect = [$emailUsuario, $password];
        foreach ($queries as $sql) {
            $fila = obtenerRegistro($mysqli, $sql, 'ss', $datosSelect);
            if ($fila) {
                $id = $fila['id'];
                $tipo = $fila['tipo_usuario'];
                $_SESSION['usuario'] = [
                    'id' => $id,
                    'email' => $emailUsuario,
                    'tipo' => $tipo
                ];
                if (isset($redirecciones[$tipo])) {
                    $ruta = $redirecciones[$tipo];
                    // header("Location: $ruta");
                    header("Location: $ruta?login=ok");
                    exit;
                }
            }
        }
        throw new Exception('Correo o contraseña incorrectos');
    }
} catch (Exception $e) {
    header("Location: /views/login/loginVista.php?login=error&mensaje=" . urlencode($e->getMessage()));
    exit;
} finally {
    $mysqli->close();
}
