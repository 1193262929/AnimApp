<?php
$login = $_GET['registro'];
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO TIENDA | ANIMAPP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.0/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/01_style.css">
    <link rel="stylesheet" href="/assets/css/03_registros.css">
</head>

<body class="d-flex flex-column min-vh-100">
    <header>
        <?php require_once __DIR__ . '/../layout/header.php'; ?>
    </header>

    <main class="flex-fill container">
        <div class="row justify-content-center">
            <form action="../../models/registroTienda.php" method="POST" enctype="multipart/form-data" class="form-usuario bg-white w-75 my-5 border border-secondary rounded">
                <h2 class="my-3 text-center">Crear cuenta tienda</h2>
                <div class="row">
                    <div class="form-group col-md-6 text-start mb-2">
                        <label for="nombre">Nombre tienda</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" required>
                    </div>
                    <div class="form-group col-md-6 text-start mb-2">
                        <label for="telefono">Telefono</label>
                        <input type="tel" class="form-control" name="telefono" id="telefono" required>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6 text-start mb-2">
                        <label for="direccion">Direccion</label>
                        <input type="text" class="form-control" name="direccion" id="direccion" required>
                    </div>

                    <div class="form-group col-md-6 text-start mb-2">
                        <label for="direccion">Ciudad</label>
                        <input type="text" class="form-control" name="ciudad" id="ciudad" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 form-group text-start mb-2">
                        <label for="descripcion">Descripción:</label>
                        <textarea class="form-control" name="descripcion" id="descripcion" rows="2"></textarea>
                    </div>
                    <div class="col-6 form-group text-start mb-2">
                        <label for="imagen">Imagen de la tienda</label>
                        <input type="file" class="form-control" name="imagen" id="imagen" accept="image/*" required>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6 text-start mb-2">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" required>
                    </div>
                    <div class="form-group col-md-6 text-start mb-2">
                        <label for="contrasena">Contraseña</label>
                        <input type="password" class="form-control" name="contrasena" id="contrasena" required>

                    </div>
                </div>

                <div class="row my-3">
                    <div class="col-md-6">
                        <input class="form-check-input" type="checkbox" id="gridCheck" required>
                        <label class="form-check-label" for="gridCheck">
                            Acepto Terminos y Condiciones
                        </label>
                    </div>
                    <p class="col-md-6"><strong>¿Ya tienes cuenta?</strong> <a href="./loginVista.php">Iniciar sesión</a></p>
                </div>

                <div class="container text-center">
                    <button type="submit" class="btn btn-dark w-50 my-3">Crear cuenta</button>
                </div>

            </form>
        </div>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <?php require_once __DIR__ . '/../layout/modales.php'; ?>
    <footer>
        <?php require_once __DIR__ . '/../layout/footer.php'; ?>
    </footer>
    <?php if ($login === 'error') : ?>
        <script>
            mostrarModalLoginError();
        </script>
    <?php endif; ?>
</body>

</html>