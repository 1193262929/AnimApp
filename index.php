<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANIMAPP | INICIO </title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/01_style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body class="d-flex flex-column min-vh-100">

    <header>
        <?php require('./views/layout/header.php'); ?>
    </header>

    <main class="main flex-fill">
        <!-- Container Imagen principal -->
        <div class="container-fluid container-inicio">
            <div class="row d-flex justify-content-center align-items-end h-100">
                <div class="col-xl-6 col-lg-8 col-md-10 text-white text-center p-4 mb-3 rounded-2 inicio-cont-mensaje">
                    <h1>Adopta con amor. Vive con proposito</h1>
                    <p>En <strong>AnimApp</strong>, cada patita tiene una historia que esperea ser parte de la tuya</p>
                </div>
            </div>
        </div>

        <!-- Container servicios -->
        <div class="container py-5">
            <h2 class="h2-servicios text-center pb-4">SERVICIOS</h2>
            <div class="row ">
                <div class="col-xl-3 col-lg-4 col-md-6 mb-sm-4 row-card-div">
                    <div class="card card-servicio h-100">
                        <img class="card-img-top" src="/AnimApp/assets/images/perroComida.jpg" alt="">
                        <div class="card-body d-flex flex-column">
                            <h4 class="card-title">TIENDAS</h4>
                            <h5 class="card-subtitle text-muted mb-2">Subtitulo</h5>
                            <p class="card-text">Encuentra todo lo que necesita tu mascota.</p>
                            <a href="/AnimApp/views/home/servicios.php" class="btn btn-outline-success mt-auto">Más información</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-sm-4 row-card-div">
                    <div class="card card-servicio h-100">
                        <img class="card-img-top" src="/AnimApp/assets/images/paseador.jpg" alt="">
                        <div class="card-body d-flex flex-column">
                            <h4 class="card-title">PASEADORES</h4>
                            <h5 class="card-subtitle text-muted mb-2">Subtitulo</h5>
                            <p class="card-text">Contacta con la mejor la comunidad de paseadores.</p>
                            <a href="/AnimApp/views/home/servicios.php" class="btn btn-outline-success mt-auto">Más información</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-sm-4 row-card-div">
                    <div class="card card-servicio h-100">
                        <img class="card-img-top" src="/AnimApp/assets/images/veterinaria1.jpg" alt="">
                        <div class="card-body d-flex flex-column">
                            <h4 class="card-title">VETERINARIAS</h4>
                            <h5 class="card-subtitle text-muted mb-2">Subtitulo</h5>
                            <p class="card-text">Nuestros mejores servicios en veterinarias</p>
                            <a href="/AnimApp/views/home/servicios.php" class="btn btn-outline-success mt-auto">Más información</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-sm-4 row-card-div">
                    <div class="card card-servicio h-100">
                        <img class="card-img-top" src="/AnimApp/assets/images/perroComida.jpg" alt="">
                        <div class="card-body d-flex flex-column">
                            <h4 class="card-title">REFUGIO</h4>
                            <h5 class="card-subtitle text-muted mb-2">Subtitulo</h5>
                            <p class="card-text">Encuentra todo lo que necesita tu mascota.</p>
                            <a href="/AnimApp/views/home/servicios.php" class="btn btn-outline-success mt-auto">Más información</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Container sesión adoptar -->
        <div class="container-adoptar container-fluid">
            <div class="row row-adoptar d-flex justify-content-end h-100">
                <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 text-white text-center h-100 d-flex flex-column justify-content-center">
                    <h3 class="fw-bold fs-2">Adopta amor, cambia dos vidas</h3>
                    <p class="py-4">Cada mascota merece un hogar lleno de cariño. En animapp puedes encontrar a tu compañero ideal y darle una segunda oportunidad. Explora perfiles, conoce sus historias y da el primer paso hacia una vida compartida.</p>
                    <a class="btn-adoptar btn btn-dark w-50" href="/AnimApp/views/home/adopciones.php">Más Información <i class="bi bi-hand-thumbs-up"></i></a>
                </div>
            </div>
        </div>

        <!-- Container sesión apoyanos -->
        <div class="container container-apoyanos py-5">
            <div class="row row-apoyanos">
                <div class="img-apoyanos col-md-6 col-lg-4 col-sm-12 mb-sm-3">
                    <div class="card">
                        <img class="card-img" src="/AnimApp/assets/images/veterinaria1.jpg" alt="">
                    </div>
                </div>
                <div class="img-apoyanos col-md-6 col-lg-4 col-sm-12 mb-sm-3">
                    <div class="card">
                        <img class="card-img" src="/AnimApp/assets/images/ayuarPerroEncerrado.png" alt="">
                    </div>
                </div>
                <div class="img-apoyanos col-md-6 col-lg-4 col-sm-12 mb-sm-3">
                    <div class="card">
                        <img class="card-img" src="/AnimApp/assets/images/ayudarGato.png" alt="">
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <h3 class="text-success py-3 fs-2">Sé parte del cambio, ayuda a una vida peluda</h3>
                <p>En <strong>AnimApp</strong>, cada patita tiene una historia que espera ser parte de la tuya.</p>
                <a href="/AnimApp/views/home/apoyanos.php" class="btn btn-success w-25 btn-apoyanos">Quiero ayudar</a>
            </div>
        </div>

        <!-- Container contacto -->
        <div class="container-contato container-fluid">
            <div class="row row-contacto h-100">
                <div class="div-form col-xl-5 col-lg-6 col-md-8 col-sm-10 text-white text-center h-100 d-flex flex-column justify-content-center">
                    <h3>Tienes dudas o sugerencias escríbemos</h3>
                    <form>
                        <div class="col-10 mb-3 m-auto">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input class="form-control" type="text" id="nombre" placeholder="Alex">
                        </div>
                        <div class="col-10 mb-3 m-auto">
                            <label for="correo" class="form-label">Correo</label>
                            <input class="form-control" type="email" id="correo" placeholder="correo@correo.com">
                        </div>
                        <div class="col-10 mb-3 m-auto">
                            <label for="mensaje" class="form-label">Mensaje</label>
                            <textarea name="mensaje" id="mensaja" class="form-control" placeholder="Mensaje"></textarea>
                        </div>
                        <div class="col-12 d-flex justify-content-center">
                            <div>
                                <div class="form-check mb-3">
                                    <input type="checkbox" name="termino" id="terminos" class="fomr-check-input">
                                    <label for="terminos" class="form-check-label">Acepto los terminos y
                                        condiciones</label>
                                </div>
                                <button type="button" class="btn btn-dark w-100">ENVIAR</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <footer class="mt-auto">
        <?php require('./views/layout/footer.php'); ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>