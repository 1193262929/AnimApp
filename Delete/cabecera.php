<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<header>
    <nav class="navbar navbar-expand-lg bg-success">
        <div class="container-fluid p-2">

                <!-- Logo de Animapp -->
                <div class="col-2 d-flex justify-content-center align-items-end gap-2">
                    <img class="img-fluid w-25 rounded-circle" src="/AnimApp/assets/images/Logo_Animapp.jpg" alt="Logo">
                    <p class="pb-1 text-white">AnimApp</p>
                </div>

                <!-- Lista del menu de navegacion -->
                <div class="container-lista col-6">
                    <ul class="lista w-100 d-flex justify-content-around list-unstyled mb-0 fw-semibold">
                        <li class="py-1 px-3"><a class="text-decoration-none text-white" href="/AnimApp/index.php">Incicio</a></li>
                        <li class="py-1 px-3"><a class="text-decoration-none text-white" href="/AnimApp/index1.php">Incicio 1</a></li>
                        <li class="py-1 px-3"><a class="text-decoration-none text-white" href="/AnimApp/views/home/servicios.php">Servicios</a></li>
                        <li class="py-1 px-3"><a class="text-decoration-none text-white" href="/AnimApp/views/home/adopciones.php">Adopciones</a></li>
                        <li class="py-1 px-3"><a class="text-decoration-none text-white" href="/AnimApp/views/home/apoyanos.php">Apoyanos</a></li>
                        <li class="py-1 px-3"><a class="text-decoration-none text-white" href="/AnimApp/views/home/contacto.php">contacto</a></li>
                    </ul>
                </div>

                <!-- Botones de Iniciar y Registrarse -->
                <?php if (isset($_SESSION['usuario']) && $_SESSION['tipo_usuario'] == "normal"): ?>
                    <div class="col-4 d-flex align-items-center justify-content-center gap-3">
                        <p class="h-auto mb-0 fw-medium"><i class="bi bi-person-circle"></i> <?php echo $_SESSION['usuario']; ?></p>
                        <a class="btn btn-dark ms-3" href="/AnimApp/controller/logout.php">Cerrar sesión</a>
                    </div>

                <?php elseif (isset($_SESSION['usuario']) && $_SESSION['tipo_usuario'] == "refugio"): ?>
                    <div class="col-4 d-flex align-items-center justify-content-center gap-3">
                        <p class="h-auto mb-0 fw-medium">Refugio <i class="bi bi-house-door-fill"></i> <?php echo $_SESSION['usuario']; ?></p>
                        <a class="btn btn-dark ms-3" href="/AnimApp/views/home/refugio.php">Mi Perfil</a>
                    </div>

                <?php elseif (isset($_SESSION['usuario']) && $_SESSION['tipo_usuario'] == "tienda"): ?>
                    <div class="col-4 d-flex align-items-center justify-content-center gap-3">
                        <p class="h-auto mb-0 fw-medium">Tienda <i class="bi bi-house-door-fill"></i> <?php echo $_SESSION['usuario']; ?></p>
                        <a class="btn btn-dark ms-3" href="/AnimApp/views/home/tienda.php">Mi Perfil</a>
                    </div>

                <?php elseif (isset($_SESSION['usuario']) && $_SESSION['tipo_usuario'] == "paseador"): ?>
                    <div class="col-4 d-flex align-items-center justify-content-center gap-3">
                        <p class="h-auto mb-0 fw-medium">Paseador <i class="bi bi-person-square"> </i><?php echo $_SESSION['usuario']; ?></p>
                        <a class="btn btn-dark ms-3" href="/AnimApp/views/home/paseador.php">Mi Perfil</a>
                    </div>

                <?php elseif (isset($_SESSION['usuario']) && $_SESSION['tipo_usuario'] == "veterinaria"): ?>
                    <div class="col-4 d-flex align-items-center justify-content-center gap-3">
                        <p class="h-auto mb-0 fw-medium">Veterinaria <i class="bi bi-house-door-fill"></i> <?php echo $_SESSION['usuario']; ?></p>
                        <a class="btn btn-dark ms-3" href="/AnimApp/views/home/veterinaria.php">Mi Perfil</a>
                    </div>

                <?php else: ?>
                    <div class="col-4 d-flex justify-content-center gap-2">
                        <ul class="ul-first list-unstyled d-flex gap-2 mb-0">
                            <li>
                                <a class="btn btn-light text-dark text-decoration-none" href="/AnimApp/controller/login.php">Iniciar sesión</a>
                            </li>
                            <li>
                                <a class="btn btn-dark text-white" href="/AnimApp/views/login/registrarseComo.php">Registrarse<a>
                            </li>
                        </ul>
                    </div>
                <?php endif; ?>

        </div>
    </nav>
</header>