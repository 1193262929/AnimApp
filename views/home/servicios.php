<?php
include("../../controller/verificarSesion.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANIMAPP | SERVICIOS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/01_style.css">
    <link rel="stylesheet" href="/assets/css/03_registros.css">
</head>

<body class="d-flex flex-column min-vh-100">

    <header>
        <?php require('../layout/header.php'); ?>
    </header>

    <main class="main flex-fill body-servicios">
        <div class="container py-5">
            <div class="row">
                <div class="col-4">
                    <img class="img-fluid rounded-circle w-50" src="/assets/images/servicios-1.jpg" alt="">
                </div>
                <div class="col-6 d-flex align-items-center">
                    <h2 class="h1">¿QUE SERVICIO CONSULTAR?</h2>
                </div>
            </div>

            <div class="row">
                <form class="row flex-column align-items-center my-3" action="/models/consultarServicios.php" method="post">

                    <div class="col-4 d-flex justify-content-between align-items-center py-2 border mb-2 rounded">
                        <img src="/assets/images/tiendaAnimales.png" alt="Logo de la tienda" class="img-fluid w-25">
                        <div class="form-check bg-white">
                            <input type="checkbox" name="servicios[]" value="tiendas" class="form-check-input">
                            <label for="terminos" class="form-check-label">Tiendas</label>
                        </div>
                        <input type="submit" class="btn btn-outline-dark" value="CONSULTAR">
                    </div>

                    <div class="col-4 d-flex justify-content-between align-items-center py-2 border mb-2 rounded">
                        <img src="/assets/images/paseadorPerro.png" alt="Logo del paseador" class="img-fluid w-25 mx-2">
                        <div class="form-check">
                            <input type="checkbox" name="servicios[]" value="paseador" class="form-check-input">
                            <label for="terminos" class="form-check-label">Paseadores</label>
                        </div>
                        <input type="submit" class="btn btn-outline-dark " value="CONSULTAR">
                    </div>

                    <div class="col-4 d-flex justify-content-between align-items-center py-2 border mb-2 rounded">
                        <img src="/assets/images/veterinario.png" alt="Logo de la veterinaria" class="img-fluid w-25 ">
                        <div class="form-chec">
                            <input type="checkbox" name="servicios[]" value="veterinaria" class="form-check-input">
                            <label for="terminos" class="form-check-label">Veterinarias</label>
                        </div>
                        <input type="submit" class="btn btn-outline-dark" value="CONSULTAR">
                    </div>

                </form>
            </div>
            <!-- <div class="row flex-column align-items-center my-3">
                <div class="col-4 d-flex py-2 border mb-2 rounded">
                    <img src="/assets/images/tiendaAnimales.png" alt="Logo de la tienda" class="img-fluid w-25 mx-4">
                    <form action="/models/consultarServicios.php" method="POST" class="text-center py-3 w-100">
                        <div class="form-check mb-3">
                            <input type="checkbox" name="tienda" value="tienda" class="form-check-input">
                            <label for="terminos" class="form-check-label">Tiendas</label>
                        </div>
                        <input type="submit" class="btn btn-outline-dark w-75" value="CONSULTAR">
                    </form>
                </div>
                <div class="col-4 d-flex py-2 border mb-2 rounded">
                    <img src="/assets/images/paseadorPerro.png" alt="Logo del paseador" class="img-fluid w-25 mx-4">
                    <form action="/models/consultarServicios.php" method="POST" class="text-center py-3 w-100">
                        <div class="form-check mb-3">
                            <input type="checkbox" name="paseador" value="paseador" class="form-check-input">
                            <label for="terminos" class="form-check-label">Paseadores</label>
                        </div>
                        <input type="submit" class="btn btn-outline-dark w-75" value="CONSULTAR">
                    </form>
                </div>
                <div class="col-4 d-flex py-2 border rounded">
                    <img src="/assets/images/veterinario.png" alt="Logo de la veterinaria" class="img-fluid w-25 mx-4">
                    <form action="/models/consultarServicios.php" method="POST" class="text-center py-3 w-100">
                        <div class="form-check mb-3">
                            <input type="checkbox" name="veterinaria" value="veterinaria" class="form-check-input">
                            <label for="terminos" class="form-check-label">Veterinarias</label>
                        </div>
                        <input type="submit" class="btn btn-outline-dark w-75" value="CONSULTAR">
                    </form>
                </div>
            </div> -->

            <div class="row">

                <?php include("../../models/consultarTienda.php"); ?>
            </div>

            <!-- <div class="row justify-content-center py-3">
                <div class="col-10">
                    <div class="row border py-3 rounded">
                        <div class="col-8">
                            <h2 class="text-center">VETERINARIA</h2>
                            <p><strong>CatDog Hospital Veterinario</strong></p>
                            <div class="row">
                                <p class="col-6"><strong>Médico:</strong><br>Jose Alberto Marín</p>
                                <p class="col-6"><strong>Telefono:</strong><br>300 6030931</p>
                            </div>
                            <div class="row">
                                <p class="col-6"><strong>Horario:</strong><br>Abierto las 24 Hrs</p>
                                <p class="col-6"><strong>Dirección:</strong><br>Cra. 50 #81a 47 Campo Valdes, Medellín, Antioquia</p>
                            </div>
                            <p><strong>Descripcion:</strong><br>Prestamos todos los servicios, estamos disponibles las 24 Hrs,
                                adémas tenemos el servicio a domicilio</p>
                            <div class="row justify-content-center">
                                <a class="btn btn-dark w-50" href="#">Más Información</a>
                            </div>
                        </div>
                        <div class="col-4">
                            <img class="img-fluid w-75" src="/AnimApp/assets/images/veterinario.png" alt="Logo veterinaria">
                        </div>
                    </div>
                </div>
            </div> -->

        </div>
    </main>

    <footer>
        <?php require('../layout/footer.php'); ?>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>