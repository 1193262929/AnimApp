<?php
include_once __DIR__ . "/../../controller/verificarSesion.php";
$login = $_GET['login'];
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paseador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.0/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/04_modales.css">
</head>

<body>
    <div class="page-wrapper">

        <?php require_once __DIR__ . '/../layout/header.php'; ?>

        <main>
            <div class="container py-5">
                <h1 class="text-center">Paseador</h1>
            </div>
        </main>

        <div class="container text-end mb-4">
            <a class="btn btn-dark ms-3" href="/controller/logout.php">Cerrar sesión</a>
        </div>
    </div>
    <?php require_once __DIR__ . '/../layout/modales.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/modales.js"></script>
    <?php if ($login === 'ok'): ?>
        <script>
            mostrarModalLogin();
        </script>
    <?php endif; ?>
</body>

</html>