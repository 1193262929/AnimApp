<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN | ANIMAPP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="/assets/css/02_style-login.css"> -->
    <link rel="stylesheet" href="/assets/css/07_botones.css">
    <link rel="stylesheet" href="/assets/css/08_login.css">
</head>

<body class="body-register">
    <div class="container">
        <!--======================================
            CONTENIDO PRINCIPAL
        =======================================-->
        <main class="register-page">
            <!--======================================
                ENCABEZADO
            =======================================-->
            <header class="register-header">
                <h1 class="register-title">¿Cómo deseas registrarte?</h1>
                <p class="register-subtitle">Elige el tipo de cuenta que deseas para registrarte.</p>
            </header>
            <!--======================================
                OPCIONES DE REGISTRO - TARJETAS
            =======================================-->
            <section class="register-grid">
                <!-- Tarjeta N° 1 -->
                <div class="register-card">
                    <div class="register-image">
                        <img src="/assets/images/usuarioNormal.png" alt="Logo de un usuario">
                    </div>
                    <div class="register-body">
                        <h3 class="register-card-title">Usuario</h3>
                        <p class="register-card-description">Gestiona tus mascotas, adopta, agenda paseos, accede a servicios veterinarios y mucho más.</p>
                        <a href="views/login/registroUsuario.php" class="btn btn-animapp btn-animapp-success">Registrarme</a>
                    </div>
                </div>
                <!-- Tarjeta N° 2 -->
                <div class="register-card">
                    <div class="register-image">
                        <img src="/assets/images/refugio-de-animales.png" alt="Logo de un refugio">
                    </div>
                    <div class="register-body">
                        <h3 class="register-card-title">Refugio</h3>
                        <p class="register-card-description">Publica mascotas en adopción y conecta con personas dispuesta a brindarles un hogar.</p>
                        <a href="/views/login/registroRefugio.php" class="btn btn-animapp btn-animapp-success">Registrarme</a>
                    </div>
                </div>
                <!-- Tarjeta N° 3 -->
                <div class="register-card">
                    <div class="register-image">
                        <img src="/assets/images/tiendaAnimales.png" alt="Logo de una tienda">
                    </div>
                    <div class="register-body">
                        <h3 class="register-card-title">Tienda</h3>
                        <p class="register-card-description">Publica tus productos y llega a más clientes amantes de las mascotas.</p>
                        <a href="/views/login/registroTienda.php" class="btn btn-animapp btn-animapp-success">Registrarme</a>
                    </div>
                </div>
                <!-- Tarjeta N° 4 -->
                <div class="register-card">
                    <div class="register-image">
                        <img src="/assets/images/paseadorPerro.png" alt="Logo de un paseador">
                    </div>
                    <div class="register-body">
                        <h3 class="register-card-title">Paseador</h3>
                        <p class="register-card-description">Ofrece paseos seguros y conecta con dueños de mascotas cerca de ti.</p>
                        <a href="/views/login/registroPaseador.php" class="btn btn-animapp btn-animapp-success">Registrarme</a>
                    </div>
                </div>
                <!-- Tarjeta N° 5 -->
                <div class="register-card">
                    <div class="register-image">
                        <img src="/assets/images/veterinario.png" alt="Logo de una veterinaria">
                    </div>
                    <div class="register-body">
                        <h3 class="register-card-title">Veterinaria</h3>
                        <p class="register-card-description">Ofrece consultas y servicios veterinarios para cuidar la salud de las mascotas.</p>
                        <a href="/views/login/registroVeterinaria.php" class="btn btn-animapp btn-animapp-success">Registrarme</a>
                    </div>
                </div>
            </section>
            <!--======================================
                BOTON VOLVER A INICIO
            =======================================-->
            <div class="register-footer">
                <a href="/index.php" class="btn btn-animapp btn-animapp-success"><i class="fa-solid fa-house me-2"></i>Volver al inicio</a>
            </div>
    </div>
    </main>
</body>

</html>