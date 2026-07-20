<?php
session_start();
require_once __DIR__ . '/../conexion/conexion.php'; // 2
/**
 * @var mysqli $mysqli
 */
try {
    // Verifica que el formulario haya sido enviado mediante POST
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $emailUsuario = trim($_POST['email'] ?? '');
        $password = trim($_POST['password'] ?? '');
        if ($emailUsuario === '' || $password === '') {
            throw new Exception("Debe ingresar el correo y la contraseña.");
        }
        // Consultas para validar el usuario en cada tipo de cuenta
        $queries = [
            "usuarios_normales" => "SELECT tipo_usuario FROM usuarios_normales WHERE email = ? AND contraseña = ?",
            "refugios" => "SELECT tipo_usuario FROM refugios WHERE email = ? AND contraseña = ?",
            "tiendas" => "SELECT tipo_usuario FROM tiendas WHERE email = ? AND contraseña = ?",
            "paseadores" => "SELECT tipo_usuario FROM paseadores WHERE email = ? AND contraseña = ?",
            "veterinarias" => "SELECT tipo_usuario FROM veterinarias WHERE email = ? AND contraseña = ?"
        ];
        // Rutas de redirección según el tipo de usuario
        $redirecciones = [
            'normal' => '/index.php',
            'refugio' => '/views/home/refugio.php',
            'tienda' => '/views/home/tienda.php',
            'paseador' => '/views/home/paseador.php',
            'veterinaria' => '/views/home/veterinaria.php',
        ];
        $encontrado = false;
        foreach ($queries as $tabla => $sql) {
            $stmt = $mysqli->prepare($sql);
            if (!$stmt) {
                throw new Exception('Error al preparar la consulta: ' . mysqli_error($mysqli));
            }
            $stmt->bind_param("ss", $emailUsuario, $password);
            $stmt->execute();
            $resultado = $stmt->get_result();
            $fila = $resultado->fetch_assoc();
            if ($fila) {
                $tipo = $fila['tipo_usuario'];
                $_SESSION['usuario'] = $emailUsuario;
                $_SESSION['tipo_usuario'] = $tipo;
                if (isset($redirecciones[$tipo])) {
                    $ruta = $redirecciones[$tipo];
                    header("Location: $ruta");
                    exit;
                }
                $encontrado = true;
            }
            if ($encontrado) break;
        }
        if (!$encontrado) {
            $error = 'Usuario o contraseña incorrectos.';
        }
        $mysqli->close();
    }
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}
require_once __DIR__ . '/../views/login/loginVista.php';