<?php
include_once __DIR__ . '/../../controller/verificarSesion.php';
$login = $_GET['login'] ?? null;
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Refugio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css-1/style.css">
    <link rel="stylesheet" href="../../assets/css-1/refugio.css">
    <link rel="stylesheet" href="../../assets/css/04_modales.css">
</head>

<body>
    <div class="page-wrapper container-refugio">
        <?php require_once __DIR__ . '/../layout/header.php'; ?>

        <main class="row main-refugio pt-5 justify-content-center">
            <div class="col-8 row-refugio justify-content-center rounded">
                <div class="row justify-content-end">
                    <div class="col-1 mt-2">
                        <img class="img-fluid" src="/assets/images/refugio-de-animales.png" alt="">
                    </div>
                </div>

                <div class="row pb-3">
                    <h1 class="col text-center text-white">Refugio</h1>
                </div>

                <p class="col text-white text-center m-5">"Comprometidos con el bienestar animal, brindamos un espacio seguro para registrar mascotas y promover eventos que transforman vidas."</p>
                <div class="row">
                    <div class="col text-center">
                        <!-- <button class="btn btn-outline-success w-50">Publicar Mascotas</button> -->
                        <a class="btn btn-outline-success w-50" href="/views/login/registrarMascota.php">Publicar Mascotas</a>
                    </div>
                    <div class="col text-center">
                        <button class="btn btn-outline-success w-50">Registra Evento</button>
                    </div>
                </div>
            </div>

            <div class="text-end inline-block">
                <a class="btn btn-outline-light m-4 px-5" href="/controller/logout.php">Cerrar sesión</a>
            </div>
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <?php require_once __DIR__ . '/../layout/modales.php'; ?>
    <script src="/assets/js/modales.js"></script>
    <?php if ($login === 'ok'): ?>
        <script>
            mostrarModalLogin();
        </script>
    <?php endif; ?>
</body>

</html>