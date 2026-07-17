<?php
session_start();
include_once("../conexion/conexion.php");
/**
 * @var mysqli $mysqli
 */

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = trim($_POST['email']);
    $password = trim($_POST['password']);

    $querys = [
        "SELECT tipo_usuario FROM usuarios_normales WHERE email = ? AND contraseña = ?",
        "SELECT tipo_usuario FROM refugios WHERE email = ? AND contraseña = ?",
        "SELECT tipo_usuario FROM tiendas WHERE email = ? AND contraseña = ?",
        "SELECT tipo_usuario FROM paseadores WHERE email = ? AND contraseña = ?",
        "SELECT tipo_usuario FROM veterinarias WHERE email = ? AND contraseña = ?"
    ];

    $redirecciones = [
        'normal' => '/AnimApp/index.php',
        'refugio' => '/AnimApp/views/home/refugio.php',
        'tienda' => '/AnimApp/views/home/tienda.php',
        'paseador' => '/AnimApp/views/home/paseador.php',
        'veterinaria' => '/AnimApp/views/home/veterinaria.php',
    ];

    $encontrado = false;

    foreach ($querys as $sql) {
        $stmt = mysqli_prepare($mysqli, $sql);
        if (!$stmt) die("Error en prepare: " . mysqli_error($mysqli));

        mysqli_stmt_bind_param($stmt, "ss", $usuario, $password);
        mysqli_stmt_execute($stmt);
        $resultado = mysqli_stmt_get_result($stmt);

        if ($fila = mysqli_fetch_assoc($resultado)) {
            $tipo = $fila['tipo_usuario'];
            $_SESSION['usuario'] = $usuario;
            $_SESSION['tipo_usuario'] = $tipo;

            if (isset($redirecciones[$tipo])) {
                header("Location: " . $redirecciones[$tipo]);
                exit;
            }
            $encontrado = true;
        }

        mysqli_stmt_close($stmt);
        if ($encontrado) break;
    }

    if (!$encontrado) {
        $error = "Usuario o contraseña incorrectos.";
    }

    mysqli_close($mysqli);
}

include("../views/login/loginVista.php");
