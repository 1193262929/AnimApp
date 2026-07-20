<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN | ANIMAPP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="/assets/css/02_style-login.css"> -->
    <link rel="stylesheet" href="../../assets/css/02_style-login.css">
</head>

<body>

    <div class="container-login container col-lg-8 col-md-10 col-sm-10 col-6 mt-5 rounded-3 border my-sm-5">
        <div class="row row-loginVista">
            <div class=" col-lg-6 col-md-6 col-sm-12 text-center bg-dark text-white">
                <img class="img-fluid w-50 rounded-circle my-lg-5 my-md-5 my-sm-3" src="../../assets/images/Logo_Animapp.jpg" alt="logo AnimApp">
                <p class="px-5">"Conectando corazones peludos con hogares llenos de amor."</p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 text-center py-5">
                <h2>INICIAR SESION</h2>
                <form action="/controller/login.php" method="post">
                    <div class="form-group my-5 d-flex justify-content-center">
                        <input type="email" class="form-control w-75" name="email" placeholder="Email" required>
                    </div>

                    <div class="form-group my-5 d-flex justify-content-center">
                        <input type="password" class="form-control w-75" name="password" placeholder="Password" required>
                    </div>

                    <div class="form-group my-5">
                        <p>¿No tienes cuenta?
                            <a href="/views/login/registrarseComo.php">Registrate aquí</a>
                    </div>

                    <button type="submit" class="btn btn-dark w-75 mb-5">Iniciar sesion</button>
                </form>

                <?php if (isset($error)) echo "<p class='p-0' style='color:red;'>$error</p>"; ?>
            </div>
        </div>
        <div class="text-center mt-5">
            <a class="btn btn-success col-lg-4 col-sm-6" href="/index.php">Volver a Inicio</a>
        </div>
    </div>

</body>

</html>