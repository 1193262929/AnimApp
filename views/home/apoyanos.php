<?php include("../../controller/verificarSesion.php"); ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANIMAPP | APOYANOS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/01_style.css">
</head>

<body class="d-flex flex-column min-vh-100">

    <header>
        <?php require('../layout/header.php'); ?>
    </header>

    <main class="flex-fill">
        <div class="container py-5">
            <h1 class="text-center">Ayudanos a ayudar</h1>
            <p class="text-center">Ayudar te hace feliz.</p>
        </div>
    </main>

    <footer>
        <?php require('../layout/footer.php'); ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>