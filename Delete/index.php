<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANIMAPP | INICIO</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/AnimApp/assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/01_style.css">
</head>

<body>
    <div class="page-wrapper">

        <?php require('./views/layout/cabecera.php'); ?>

        <main class="main">

            <!-- Container Imagen principal -->
            <div class="container-imagen container-fluid">

                <div class="row h-100 d-flex justify-content-center align-items-end">
                    <div class="contenido h-25 text-white w-50 bg-dark rounded mb-4 text-center pt-3">
                        <h1>Adopta con amor. Vive con proposito</h1>
                        <p>En <strong>AnimApp</strong>, cada patita tiene una historia que esperea ser parte de la tuya</p>
                    </div>
                </div>
            </div>

            <!-- Container servicios -->
            <div class="container-fluid container-servicios py-5">
                <div class="container">
                    <h2 class="text-dark text-center pb-4">Servicios</h2>

                    <div class="row row-servicio d-flex justify-content-between flex-wrap gap-3">

                        <!-- <div class="card-servicio bg-white rounded shadow p-0">
                            <img class="img-fluid rounded-top" src="/AnimApp/assets/images/spa.jpg" alt="">
                            <h3 class="px-3 pt-3"></h3>
                            <p class="px-3">Dale un gran regalo a tu mascota hazla muy feliz.</p>
                            <div class="text-center pb-3">
                                <button class="btn btn-success w-50 px-4">Buscar</button>
                            </div>
                        </div> -->

                        <div class="card-servicio col bg-white rounded shadow p-0">
                            <img class="img-fluid rounded-top" src="/AnimApp/assets/images/perroComida.jpg" alt="">
                            <h3 class="px-3 pt-3">Tiendas</h3>
                            <p class="px-3">Encuentra todo lo que necesita tu mascota.</p>
                            <div class="text-center pt-5">
                                <a class="btn btn-success w-50 px-4" href="views/home/servicios.php">Más Información <i class="bi bi-hand-thumbs-up"></i></a>
                            </div>
                        </div>

                        <div class="card-servicio col bg-white rounded shadow p-0">
                            <img class="img-fluid rounded-top" src="/AnimApp/assets/images/paseador.jpg" alt="">
                            <h3 class="px-3 pt-3">Paseadores</h3>
                            <p class="px-3">Contacta con la mejor la comunidad de paseadores.</p>
                            <div class="text-center pt-5">
                                <a class="btn btn-success w-50 px-4" href="views/home/servicios.php">Más Información <i class="bi bi-hand-thumbs-up"></i></a>
                            </div>
                        </div>

                        <div class="card-servicio col bg-white rounded shadow p-0">
                            <img class="img-fluid rounded-top" src="/AnimApp/assets/images/veterinaria1.jpg" alt="">
                            <h3 class="px-3 pt-3">Veterinaria</h3>
                            <p class="px-3">Nuestros mejores servicios en veterinarias</p>
                            <div class="text-center pt-5">
                                <a class="btn btn-success w-50 px-4" href="views/home/servicios.php">Más Información <i class="bi bi-hand-thumbs-up"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Container sesión adoptar -->
            <div class="container-adoptar container-fluid">
                <div class="row h-100 d-flex justify-content-end">
                    <div class="adoptar-cubo bg-success d-flex flex-column text-white justify-content-center px-5 text-center">
                        <h3 class="fw-bold fs-2">Adopta amor, cambia dos vidas</h3>
                        <p class="py-4">Cada mascota merece un hogar lleno de cariño. En animapp puedes encontrar a tu compañero ideal y darle una segunda oportunidad. Explora perfiles, conoce sus historias y da el primer paso hacia una vida compartida.</p>
                        <a class="btn-adoptar btn btn-dark" href="views/home/adopciones.php">Más Información <i class="bi bi-hand-thumbs-up"></i></a>
                    </div>
                </div>
            </div>

            <!-- Container apoyanos -->
            <div class="container-apoyanos py-5">
                <div class="container text-center">
                    <div class="row d-flex justify-content-between">
                        <div class="card-apoyanos shadow">
                            <img class="imagen-apoyanos img-fluid" src="/AnimApp/assets/images/veterinaria2.jpg" alt="">
                        </div>
                        <div class="card-apoyanos shadow">
                            <img class="imagen-apoyanos img-fluid" src="/AnimApp/assets/images/ayuarPerroEncerrado.png" alt="">
                        </div>
                        <div class="card-apoyanos shadow">
                            <img class="imagen-apoyanos img-fluid" src="/AnimApp/assets/images/ayudarGato.png" alt="">
                        </div>
                    </div>
                    <h3 class="text-success pt-3 pb-2 fs-2">Sé parte del cambio, ayuda a una vida peluda</h3>
                    <p>En <strong>AnimApp</strong>, cada patita tiene una historia que espera ser parte de la tuya.</p>
                    <button class="btn btn-success">Quiero ayudar</button>
                </div>
            </div>

            <!-- Container sesión contacto -->
            <div class="container-contacto container-fluid">
                <div class="row h-100 d-flex justify-content-start">
                    <div class="contacto-cubo bg-success d-flex flex-column text-white justify-content-center align-items-center px-5 text-center">
                        <h3 class="fw-bold fs-2 mb-4">Tienes dudas o sugerencias<br> escríbenos</h3>
                        <form class="w-75">
                            <div class="form-group">
                                <label class="mb-2" for="email">Email</label>
                                <input type="email" class="form-control mb-4" id="email" aria-describedby="emailHelp" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label class="mb-2" for="password">Password</label>
                                <input type="password" class="form-control mb-4" id="password" placeholder="Password">
                            </div>
                            <button type="submit" class="btn btn-dark w-50">Enviar</button>
                        </form>

                    </div>
                </div>
            </div>

        </main>

        <?php require('./views/layout/footer.php'); ?>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>