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
</head>

<body class="d-flex flex-column min-vh-100">

    <header>
        <?php require_once __DIR__ . '/../layout/header.php'; ?>
    </header>

    <main class="main flex-fill body-servicios">
        <div class="container py-3">

            <div class="row">
                <div class="col-3">
                    <form class="d-flex flex-column align-items-center gap-2" method="post">

                        <div class="d-flex justify-content-around align-items-center py-1 border rounded">
                            <img src="/assets/images/tiendaAnimales.png" alt="Logo de la tienda" class="img-fluid w-25">
                            <div class="form-check col-6">
                                <input type="radio" name="servicio" value="tiendas" id="tiendas" class="form-check-input" required>
                                <label for="tiendas" class="form-check-label">Tiendas</label>
                            </div>
                        </div>

                        <div class="d-flex justify-content-around align-items-center py-1 border rounded">
                            <img src="/assets/images/veterinario.png" alt="Logo de la veterinaria" class="img-fluid w-25">
                            <div class="form-check col-6">
                                <input type="radio" name="servicio" value="veterinarias" id="veterinarias" class="form-check-input" required>
                                <label for="veterinarias" class="form-check-label">Veterinarias</label>
                            </div>
                        </div>

                        <div class="d-flex justify-content-around align-items-center py-1 border rounded">
                            <img src="/assets/images/paseadorPerro.png" alt="Logo del paseador" class="img-fluid w-25">
                            <div class="form-check col-6">
                                <input type="radio" name="servicio" value="paseadores" id="paseadores" class="form-check-input" required>
                                <label for="paseadores" class="form-check-label">Paseadores</label>
                            </div>
                        </div>

                        <div class="col-10 d-flex justify-content-center">
                            <input type="submit" class="btn btn-dark w-50" value="CONSULTAR">
                        </div>
                    </form>
                </div>

                <div class="col-9">
                    <?php if (!$consultaRealizada) : ?>
                        <h4 class="text-center text-secondary">Selecciona un servicio para consultar...</h4>
                    <?php elseif (empty($registros)): ?>
                        <h4 class="text-center text-secondary">No se encontraron registros.</h4>
                    <?php else: ?>
                        <?php foreach ($registros as $registro): ?>

                            <div class="card mb-3 py-2">
                                <div class="row g-0">
                                    <div class="div-imagen-servicio col-md-4 d-flex justify-content-center">
                                        <img src="/../../assets/ImgMascotas/<?= htmlspecialchars($registro['imagen_url']); ?>" class="img-fluid rounded-star w-50" alt="Imagen del servicio de <?= ucfirst(htmlspecialchars($registro['tipo_usuario'])); ?>">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <div class="row mb-2">
                                                <h5 class="col-md-3 card-title"><?= ucfirst(htmlspecialchars($registro['tipo_usuario'])); ?></h5>
                                                <h4 class="col-9 card-title text-primary"><?= htmlspecialchars($registro['nombre']); ?></h4>
                                            </div>
                                            <div class="row">
                                                <p class="col-6 card-text"><strong>Email:</strong> <?= htmlspecialchars($registro['email']); ?></p>
                                                <p class="col-6 card-text"><strong>Ciudad:</strong> <?= htmlspecialchars($registro['ciudad']); ?></p>
                                            </div>
                                            <div class="row">
                                                <p class="col-6 card-text"><strong>Telefono:</strong> <?= htmlspecialchars($registro['telefono']); ?></p>
                                                <?php if (!empty(htmlspecialchars($registro['direccion']))): ?>
                                                    <p class="col-md-6 card-text"><strong>Direccion:</strong> <?= htmlspecialchars($registro['direccion']); ?></p>
                                                <?php endif; ?>
                                                <?php if (!empty(htmlspecialchars($registro['zona_trabajo']))): ?>
                                                    <p class="col-6 card-text"><strong>Zona de trabajo:</strong> <?= htmlspecialchars($registro['zona_trabajo']); ?></p>
                                                <?php endif; ?>
                                            </div>
                                            <div class="row">
                                                <p class="col-6 card-text"><small class="text-body-secondary"><strong>Descripción:</strong> <?= htmlspecialchars($registro['descripcion']); ?></small></p>
                                            </div>
                                            <div class="row d-flex justify-content-end">
                                                <?php if ($registro['tipo_usuario'] === 'paseador') : ?>
                                                    <button type="button" class="btn btn-success w-25 mx-2">Contactar</button>
                                                <?php else: ?>
                                                    <button type="button" class="btn btn-warning w-25 mx-2">Visitar <?= ucfirst(htmlspecialchars($registro['tipo_usuario'])); ?></button>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <footer>
        <?php require_once __DIR__ . '/../layout/footer.php'; ?>
    </footer>
</body>

</html>