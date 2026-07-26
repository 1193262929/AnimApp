<?php
include_once __DIR__ . "/../../controller/verificarSesion.php";
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
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/01_style.css">
</head>

<body class="d-flex flex-column min-vh-100">

    <header>
        <?php require_once __DIR__ . '/../layout/header.php'; ?>
    </header>

    <main class="flex-fill">
        <div class="container py-5">
            <h1 class="text-center">Adopciones</h1>
            <div class="row">
                <div class="col-4">
                    <form action="" method="post">
                        <input type="submit" value="Consultar">
                    </form>
                </div>
                <div class="col-8">
                    <?php foreach ($registros as $registro): ?>
                        <div class="card mb-3">
                            <img src="/../../assets/ImgMascotas/<?= htmlspecialchars($registro['imagen_url']); ?>" class="card-img-top w-25" alt="Imagen del servicio">
                            <div class="card-body">
                                <!-- Explicacion ucdFirst() -->
                                <h5 class="card-title"><?= ucfirst(htmlspecialchars($registro['tipo_usuario'])); ?> </h5>
                                <p class="card-text"><strong>Nombre: </strong><?= htmlspecialchars($registro['nombre']); ?></p>
                                <p class="card-text"><strong>Especie:</strong> <?= htmlspecialchars($registro['especie']); ?></p>
                                <p class="card-text"><strong>Raza:</strong> <?= htmlspecialchars($registro['raza']); ?></p>
                                <p class="card-text"><strong>Genero:</strong> <?= htmlspecialchars($registro['genero']); ?></p>
                                <p class="card-text"><strong>Estado:</strong> <?= htmlspecialchars($registro['estado']); ?></p>
                                <p class="card-text"><small class="text-body-secondary"><strong>Descripción:</strong> <?= htmlspecialchars($registro['descripcion']) ?></small></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <?php require_once __DIR__ . '/../layout/footer.php'; ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>