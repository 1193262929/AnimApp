<?php
require_once __DIR__ . "/../../controller/verificarSesion.php";
$registros = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once __DIR__ . '/../../models/consultarMascotas.php';
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANIMAPP | ADOPCIONES</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.0/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/01_style.css">
    <link rel="stylesheet" href="/assets/css/04_modales.css">
    <link rel="stylesheet" href="/assets/css/05_cards.css">
    <link rel="stylesheet" href="/assets/css/06_filters.css">
</head>

<body class="body-adopciones d-flex flex-column min-vh-100">

    <header>
        <?php require_once __DIR__ . '/../layout/header.php'; ?>
    </header>

    <main class="flex-fill">
        <div class="container-fluid p-4">
            <div class="row">

                <!-- Container de formulario de filtros -->
                <div class="col-lg-2 col-md-3">
                    <?php require __DIR__ . '/../components/panelFiltro.php'; ?>
                </div>

                <!-- Container de imagenes de mascotas publicadas -->
                <div class="col-lg-10 col-md-9">
                    <h2 class="fw-bold text-center text-success mb-4"><i class="fa-solid fa-paw me-2"></i>Mascotas disponibles para adopción</h2>
                    <div class="row g-4">
                        <?php foreach ($registros as $registro): ?>
                            <?php unset($tituloMascota, $badgeMascota); ?>
                            <?php $acciones = '<a href="#" class="btn btn-success w-100">Adoptar</a>'; ?>
                            <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                                <?php include __DIR__ . '/../components/tarjetaMascota.php'; ?>
                            </div>
                        <?php endforeach; ?>
                        <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
                            <?php if (empty($registros)) : ?>
                                <div class="text-center py-5">
                                    <i class="fa-solid fa-paw display-4 text-secondary mb-3"></i>
                                    <h4>No encontramos mascotas.</h4>
                                    <p class="text-muted">
                                        Intenta realizar otra búsqueda.
                                    </p>
                                </div>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <footer>
        <?php require_once __DIR__ . '/../layout/footer.php'; ?>
    </footer>
    <?php require_once __DIR__ . '/../layout/scripts.php'; ?>
</body>

</html>