<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<nav class="navbar navbar-expand-lg navbar-light bg-success">
    <div class="container">
        <div class="col-lg-2 col-md-4 col-sm-6 col-4">
            <a href="/index.php" class="navbar-brand"><img class="img-fluid w-50 rounded-circle" src="/assets/images/Logo_Animapp.jpg" alt="Logo"></a>
        </div>
        <!-- Boton hamburguesa para el menu movil -->
        <button class="navbar-toggler border border-3" type="button" data-bs-toggle="collapse" data-bs-target="#menu"
            aria-controls="menu" aria-expanded="false" aria-label="Mostar / Ocultar Menu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu de navegacion -->
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a href="/index.php" class="nav-link text-white">INICIO</a></li>
                <li class="nav-item"><a href="/views/home/servicios.php" class="nav-link text-white">SERVICIOS</a></li>
                <li class="nav-item"><a href="/views/home/adopciones.php" class="nav-link text-white">ADOPCIONES</a></li>
                <li class="nav-item"><a href="/views/home/apoyanos.php" class="nav-link text-white">APOYANOS</a></li>
                <li class="nav-item"><a href="/views/home/contacto.php" class="nav-link text-white">CONTACTO</a></li>
            </ul>

            <!-- Botones de Iniciar y Registrarse -->
            <?php if (isset($_SESSION['usuario']) && $_SESSION['usuario']['tipo'] === "normal"): ?>
                <div class="div-user col-6 col-lg-5 d-sm-block d-lg-flex align-items-center justify-content-around gap-2">
                    <p class="h-auto mb-0 fw-bold"><i class="bi bi-person-circle"></i> <?php echo $_SESSION['usuario']['email']; ?></p>
                    <a class="btn btn-outline-dark " href="/views/login/registrarMascota.php">Publicar Mascota</a>
                    <a class="btn btn-dark btn-cerrarSesion" href="/controller/logout.php">Cerrar sesión</a>
                </div>

            <?php elseif (isset($_SESSION['usuario']) && $_SESSION['usuario']['tipo'] === "refugio"): ?>
                <div class="div-user col-6 col-lg-5 d-lg-block d-xl-flex align-items-center justify-content-around gap-2">
                    <p class="h-auto mb-0 fw-bold">Refugio <i class="bi bi-house-door-fill"></i> <?php echo $_SESSION['usuario']['email']; ?></p>
                    <a class="btn btn-dark btn-mi-perfil" href="/views/home/refugio.php">Mi Perfil</a>
                </div>

            <?php elseif (isset($_SESSION['usuario']) && $_SESSION['usuario']['tipo'] === "tienda"): ?>
                <div class="div-user col-6 col-lg-5 d-lg-block d-lg-flex align-items-center justify-content-center gap-2">
                    <p class="h-auto mb-0 fw-bold">Tienda <i class="bi bi-house-door-fill"></i> <?php echo $_SESSION['usuario']['email']; ?></p>
                    <a class="btn btn-dark w-25 btn-mi-perfil" href="/views/home/tienda.php">Mi Perfil</a>
                </div>

            <?php elseif (isset($_SESSION['usuario']) && $_SESSION['usuario']['tipo'] === "paseador"): ?>
                <div class="div-user col-6 col-lg-5 d-sm-block d-lg-flex align-items-center justify-content-around gap-2">
                    <p class="h-auto mb-0 fw-bold">Paseador <i class="bi bi-person-square"> </i><?php echo $_SESSION['usuario']['email']; ?></p>
                    <a class="btn btn-dark btn-mi-perfil" href="/views/home/paseador.php">Mi Perfil</a>
                </div>

            <?php elseif (isset($_SESSION['usuario']) && $_SESSION['usuario']['tipo'] === "veterinaria"): ?>
                <div class="div-user col-6 col-lg-5 col-xl-6 d-lg-block d-xl-flex align-items-center justify-content-around gap-2">
                    <p class="h-auto mb-0 fw-bold">Veterinaria <i class="bi bi-house-door-fill"></i> <?php echo $_SESSION['usuario']['email']; ?></p>
                    <a class="btn btn-dark btn-mi-perfil" href="/views/home/veterinaria.php">Mi Perfil</a>
                </div>
            <?php else: ?>

                <ul class="ul-iniciar-sesion navbar-nav d-flex justify-content-end col-4 col-lg-5 gap-1">
                    <li class="nav-item mt-md-2 mt-sm-2"><a href="/views/login/loginVista.php" class="btn btn-dark">INICIAR SESION</a></li>
                    <li class="nav-item mt-md-2 mt-sm-2"><a href="/views/login/registrarseComo.php" class="btn btn-dark">REGISTRARSE</a></li>
                </ul>
            <?php endif; ?>
        </div>
    </div>
</nav>