<?php
require_once __DIR__ . '/../../controller/verificarSesion.php';
$registros = [];
$consultaRealizada = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $consultaRealizada = true;
    require_once __DIR__ . '/../../models/consultarServicios.php';
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANIMAPP | SERVICIOS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.0/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/01_style.css">
    <link rel="stylesheet" href="/assets/css/03_registros.css">
    <link rel="stylesheet" href="/assets/css/04_modales.css">
    <link rel="stylesheet" href="/assets/css/05_cards.css">
    <link rel="stylesheet" href="/assets/css/07_botones.css">
</head>

<body class="d-flex flex-column min-vh-100">

    <header>
        <?php require_once __DIR__ . '/../layout/header.php'; ?>
    </header>
    <main class="main flex-fill body-servicios">

        <!--===================================================================== 
            CONTENIDO PRINCIPAL
        =========================================================================-->
        <div class="container py-4">
            <div class="row">
                <div class="col-lg-3 col-md-4 mb-3">
                <!-- =========================================
                    PANEL DE FILTROS
                ========================================= -->
                    <div class="text-center py-1">
                        <i class="fa-solid fa-magnifying-glass fa-3x text-success mb-3"></i>
                        <h4 class="fw-bold"> Busca un servicio</h4>
                        <p class="text-muted">Selecciona una categoría para comenzar la búsqueda.</p>
                    </div>

                    <div class="card shadow-sm border-0">
                        <div class="card-body">
                            <form class="d-grid gap-3" method="post">
                                <label class="opcion-servicio d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <img class="icono-servicio me-3" src="/assets/images/tiendaAnimales.png" alt="Tienda">
                                        <div>
                                            <strong>Tiendas</strong>
                                            <div class="small text-muted">
                                                Productos para mascotas
                                            </div>
                                        </div>
                                    </div>
                                    <input class="form-check-input" type="radio" name="servicio" value="tiendas" required>
                                </label>

                                <label class="opcion-servicio d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <img class="icono-servicio me-3" src="/assets/images/veterinario.png" alt="Veterinaria">
                                        <div>
                                            <strong>Veterinarias</strong>
                                            <div class="small text-muted">
                                                Salud y bienestar
                                            </div>
                                        </div>
                                    </div>
                                    <input class="form-check-input" type="radio" name="servicio" value="veterinarias" required>
                                </label>

                                <label class="opcion-servicio d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <img class="icono-servicio me-3" src="/assets/images/paseadorPerro.png" alt="paseadores">
                                        <div>
                                            <strong>Paseadores</strong>
                                            <div class="small text-muted">
                                                Paseos y ejercicio
                                            </div>
                                        </div>
                                    </div>
                                    <input class="form-check-input" type="radio" name="servicio" value="paseadores" required>
                                </label>

                                <div class="col-10 d-flex justify-content-center">
                                    <input type="submit" class="btn btn-animapp btn-animapp-success w-100 mt-2" value="CONSULTAR">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-9 col-md-8">
                    <!-- =========================================
                        RESULTADOS DE LA CONSULTA
                    ========================================= -->
                    <div class="mb-4">
                        <h2 class="fw-bold text-success"><i class="fa-solid fa-store me-2"></i>Servicios disponibles</h2>
                        <p class="text-muted mb-0">Encuentra tiendas, veterinarias y paseadores cerca de ti.</p>
                    </div>

                    <?php if (!$consultaRealizada) : ?>
                        <!-- Mensaje inicial -->
                        <div class="text-center py-5">
                            <i class="fa-solid fa-magnifying-glass fa-3x text-success mb-3"></i>
                            <h4 class="fw-bold">Busca un servicio</h4>
                            <p class="text-muted">Selecciona una categoría para comenzar.</p>
                        </div>

                    <?php elseif (empty($registros)): ?>
                        <!-- Sin resultados -->
                        <div class="text-center py-5">
                            <i class="fa-solid fa-circle-info fa-3x text-secondary mb-3"></i>
                            <h4>No encontramos resultados.</h4>
                            <p class="text-muted">Intenta realizar otra búsqueda.</p>
                        </div>
                    <?php else: ?>
                        <!-- Tarjetas -->
                        <div class="contenedor-servicios">
                            <?php foreach ($registros as $registro): ?>
                                <?php
                                $acciones = '';
                                if ($registro['tipo_usuario'] === 'paseador') {
                                    $acciones = '
                                    <a href="#" class="btn btn-animapp btn-animapp-success">
                                        <i class="fa-solid fa-comments me-2"></i>
                                        Contactar
                                    </a>';
                                } else {
                                    $acciones = '
                                    <a href="#" class="btn btn-animapp btn-animapp-warning">
                                        <i class="fa-solid fa-store me-2"></i>
                                        Visitar ' . ucfirst(htmlspecialchars($registro['tipo_usuario'])) . '
                                    </a>';
                                }
                                ?>
                                <div class="mb-3">
                                    <?php include __DIR__ . '/../components/tarjetaServicio.php'; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
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