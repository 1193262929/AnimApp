<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN | ANIMAPP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/02_style-login.css">
</head>

<body>

    <main class="container-fluid">
        <h1 class="text-center pt-5">Como te vas a registrar</h1>
        <div class="row row-tipo-usuario mt-5 justify-content-evenly">
            <div class="card">
                <img class="card-img-top" src="/assets/images/usuarioNormal.png" alt="">
                <div class="card-body">
                    <h4 class="card-title">Usuario</h4>
                    <p class="card-text">Regístrate como dueño de mascotas para acceder a servicios, adoptar animales, agendar paseos y recibir atención veterinaria confiable.</p>
                    <a href="/views/login/registroUsuario.php" class="btn btn-success">Registrarme</a>
                </div>
            </div>

            <div class="card">
                <img class="card-img-top" src="/assets/images/refugio-de-animales.png" alt="">
                <div class="card-body">
                    <h4 class="card-title">Refugio</h4>
                    <p class="card-text">Crea el perfil de tu refugio para publicar mascotas, gestionar adopciones, recibir apoyo comunitario y conectar con usuarios interesados.</p>
                    <a href="/views/login/registroRefugio.php" class="btn btn-success">Registrarme</a>
                </div>
            </div>

            <div class="card">
                <img class="card-img-top" src="/assets/images/tiendaAnimales.png" alt="">
                <div class="card-body">
                    <h4 class="card-title">Tienda</h4>
                    <p class="card-text">Registra tu tienda para ofrecer productos, servicios, promociones y conectar con clientes que buscan artículos para sus mascotas..</p>
                    <a href="/views/login/registroTienda.php" class="btn btn-success">Registrarme</a>
                </div>
            </div>

            <div class="card">
                <img class="card-img-top" src="/assets/images/paseadorPerro.png" alt="">
                <div class="card-body">
                    <h4 class="card-title">Paseadores</h4>
                    <p class="card-text">Únete como paseador para recibir solicitudes, organizar tu disponibilidad, ofrecer paseos seguros y conectar con dueños de mascotas cercanos..</p>
                    <a href="/views/login/registroPaseador.php" class="btn btn-success">Registrarme</a>
                </div>
            </div>

            <div class="card">
                <img class="card-img-top" src="/assets/images/veterinario.png" alt="">
                <div class="card-body">
                    <h4 class="card-title">Veterinaria</h4>
                    <p class="card-text">Registra tu clínica veterinaria para brindar consultas, tratamientos, servicios médicos, y facilitar el contacto directo con usuarios responsables.</p>
                    <a href="/views/login/registroVeterinaria.php" class="btn btn-success">Registrarme</a>
                </div>
            </div>
        </div>
        <div class="text-center mt-5">
            <a class="btn btn-dark col-lg-4 col-sm-6" href="/index.php">Volver a Inicio</a>
        </div>
    </main>
</body>

</html>