<?php
$login = $_GET['login'] ?? null;
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN | ANIMAPP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/08_login.css">
    <!-- <link rel="stylesheet" href="../../assets/css/02_style-login.css"> -->
    <link rel="stylesheet" href="/assets/css/04_modales.css">
    <link rel="stylesheet" href="/assets/css/07_botones.css">
</head>

<body class="body-login">
    <!--======================================
            CONTENIDO PRINCIPAL
    =======================================-->
    <div class="container">
        <div class="login-card rounded-4 shadow-lg">
            <!--======================================
                    CONTENIDO DEL LOGIN
            =======================================-->
            <div class="row row-loginVista">
                <!--======================================
                        PANEL IZQUIERDO
                =======================================-->
                <div class="col-lg-6 col-md-6 col-sm-12 login-panel">
                    <img class="login-logo img-fluid rounded-circle" src="/assets/images/Logo_Animapp.jpg" alt="logo AnimApp">
                    <p class="px-5">"Conectando corazones peludos con hogares llenos de amor."</p>
                </div>
                <!--======================================
                        FORMULARIO LOGIN
                =======================================-->
                <div class="col-lg-6 col-md-6 col-sm-12 login-content">
                    <div class="login-header">
                        <h2 class="login-title">Iniciar Sesión</h2>
                        <p class="login-subtitle">Ingresa tus credenciales para acceder a AnimApp</p>
                    </div>
                    <form action="/controller/login.php" method="post" class="login-form">
                        <!-- Email -->
                        <div class="login-form-group">
                            <label for="email" class="form-label">Correo electrónico</label>
                            <input type="email" class="form-control login-input" name="email" id="email" placeholder="Ingresa tu correo" required>
                        </div>
                        <!-- Contraseña -->
                        <div class="login-form-group">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control login-input" name="password" id="password" placeholder="Ingresa tu contraseña" required>
                        </div>
                        <!-- Registro -->
                        <div class="login-register">
                            <p class="login-register-text">¿No tienes cuenta?</p>
                            <a href="/views/login/registrarseComo.php" class="login-register-link">RegÍstrate aquí</a>
                        </div>
                        <!-- Boton -->
                        <button type="submit" class="btn btn-animapp btn-animapp-success w-75">Iniciar sesion</button>
                    </form>
                </div>
            </div>

            <!--======================================
                    PIE DE LA TARJETA
            =======================================-->
            <div class="login-footer">
                <a class="login-back-link" href="/index.php"><i class="fa-solid fa-arrow-left me-2"></i>Volver a Inicio</a>
            </div>
        </div>
    </div>
    <!--======================================
            MODALES
    =======================================-->
    <?php require_once __DIR__ . '/../layout/modales.php'; ?>

    <!--=======================================
            SCRIPTS
    ========================================-->
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Scripts propios -->
    <script src="/assets/js/modales.js"></script>
    <!-- Mostrar modal -->
    <?php if ($login === 'error'): ?>
        <script>
            mostrarModalLoginError();
        </script>
    <?php endif; ?>
</body>

</html>