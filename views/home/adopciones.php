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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.0/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/01_style.css">
</head>

<body class="d-flex flex-column min-vh-100" style="background-color: #e0e0e0;"> <!-- ESTILO TEMPORAL, PONER EN FILE CSS -->

    <header>
        <?php require_once __DIR__ . '/../layout/header.php'; ?>
    </header>

    <main class="flex-fill">
        <div class="container py-4">
            <div class="row">
                <div class="col-2">
                    <div class="d-flex align-items-center mb-3 gap-2">
                        <i class="fa-solid fa-filter"></i>
                        <h4 class="h6 m-0">Filtro de búsqueda</h4>
                    </div>
                    <div class="border rounded p-3">
                        <form class="d-flex flex-column gap-3" method="post">
                            <div class="py-1 border rounded" style="background-color: #a3e4b6;"> <!-- ESTILO TEMPORAL, PONER EN FILE CSS -->
                                <div class="form-check d-flex justify-content-evenly">
                                    <input type="radio" name="filtro" value="perro" id="tiendas" class="form-check-input" required>
                                    <label for="tiendas" class="form-check-label">Perro</label>
                                </div>
                            </div>

                            <div class="py-1 border rounded" style="background-color: #a3e4b6;"> <!-- ESTILO TEMPORAL, PONER EN FILE CSS -->
                                <div class="form-check d-flex justify-content-evenly">
                                    <input type="radio" name="filtro" value="gato" id="veterinarias" class="form-check-input" required>
                                    <label for="veterinarias" class="form-check-label">Gato</label>
                                </div>
                            </div>

                            <div class="d-flex justify-content-center">
                                <input type="submit" class="btn btn-success w-75" value="Consultar">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-10 ">
                    <h2 class="h4">Resultados de la búsqueda</h2>

                    <div class="row d-flex gap-2 bg-success">
                        <?php foreach ($registros as $registro): ?>
                        <div class="card" style="width: 24%;">
                            <img src="/../../assets/ImgMascotas/<?= htmlspecialchars($registro['imagen_url']); ?>" class="card-img-top" alt="Imagen del servicio">
                            <div class="card-body">
                                <h5 class="card-title m-0 p-0"><?= htmlspecialchars($registro['nombre']); ?></h5>
                                <div class="row">
                                    <p class="col-6 card-text m-0"><strong>Raza:</strong><br> <?= htmlspecialchars($registro['raza']); ?></p>
                                    <p class="col-6 card-text m-0"><strong>Genero:</strong><br> <?= htmlspecialchars($registro['genero']); ?></p>
                                </div>
                                <p class="card-text m-0"><strong>Estado:</strong> <?= htmlspecialchars($registro['estado']); ?></p>
                                <a href="#" class="btn btn-primary py-1 w-75">Adoptar</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <footer>
        <?php require_once __DIR__ . '/../layout/footer.php'; ?>
    </footer>
    <!-- <script src="/assets/js/modales.js"></script>
    <script src="/assets/js/mascotas.js"></script> -->
</body>

</html>