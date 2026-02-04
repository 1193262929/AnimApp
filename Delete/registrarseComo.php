<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/AnimApp/assets/css/style.css">
    <link rel="stylesheet" href="/AnimApp/assets/css/registro.css">
</head>

<body class="bg-body"> 
        <main class="page-wrapper">
            <div class="container-fluid py-5">
                <h1 class="text-center pt-5">Como te vas a registrar</h1>

                <div class="row py-5">
                    <div class="card-registro card m-auto h-100" style="width: 18rem;">
                        <img src="/AnimApp/assets/images/usuarioNormal.png" class="w-50 card-img-top m-auto mt-3" alt="...">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title text-center">Usuario</h5>
                            <p class="card-text">Regístrate como dueño de mascotas para acceder a servicios, adoptar animales, agendar paseos y recibir atención veterinaria confiable.</p>
                            <a href="./registroUsuario.php" class="btn btn-success">Registrarme</a>
                        </div>
                    </div>

                    <div class="card-registro card m-auto h-100" style="width: 18rem;">
                        <img src="/AnimApp/assets/images/refugio-de-animales.png" class="w-50 card-img-top m-auto mt-3" alt="...">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title text-center">Refugio</h5>
                            <p class="card-text">Crea el perfil de tu refugio para publicar mascotas, gestionar adopciones, recibir apoyo comunitario y conectar con usuarios interesados.</p>
                            <a href="./registroRefugio.php" class="btn btn-success">Registrarme</a>
                        </div>
                    </div>

                    <div class="card-registro card m-auto h-100" style="width: 18rem;">
                        <img src="/AnimApp/assets/images/tiendaAnimales.png" class="w-50 card-img-top m-auto mt-3" alt="...">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title text-center">Tienda</h5>
                            <p class="card-text">Registra tu tienda para ofrecer productos, servicios, promociones y conectar con clientes que buscan artículos para sus mascotas.</p>
                            <a href="./registroTienda.php" class="btn btn-success">Registrarme</a>
                        </div>
                    </div>

                    <div class="card-registro card m-auto h-100" style="width: 18rem;">
                        <img src="/AnimApp/assets/images/paseadorPerro.png" class="w-50 card-img-top m-auto mt-3" alt="...">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title text-center">Paseadores</h5>
                            <p class="card-text">Únete como paseador para recibir solicitudes, organizar tu disponibilidad, ofrecer paseos seguros y conectar con dueños de mascotas cercanos.</p>
                            <a href="./registroPaseador.php" class="btn btn-success">Registrarme</a>
                        </div>
                    </div>

                    <div class="card-registro card m-auto h-100" style="width: 18rem;">
                        <img src="/AnimApp/assets/images/veterinario.png" class="w-50 card-img-top m-auto mt-3" alt="...">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title text-center">Veterinaria</h5>
                            <p class="card-text">Registra tu clínica veterinaria para brindar consultas, tratamientos, servicios médicos, y facilitar el contacto directo con usuarios responsables.</p>
                            <a href="./registroVeterinaria.php" class="btn btn-success">Registrarme</a>
                        </div>
                    </div>
                </div>
                <div class="container text-center">
                    <a class="btn btn-dark w-25" href="/AnimApp/index.php">Volver a Inicio</a>
                </div>
            </div>
        </main>
  
</body>

</html>