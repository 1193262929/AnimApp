<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO MASCOTA | ANIMAPP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/01_style.css">
    <link rel="stylesheet" href="/assets/css/03_registros.css">
</head>

<body class="d-flex flex-column min-vh-100">
    <header>
        <?php require_once __DIR__ . '/../layout/header.php'; ?>
    </header>

    <!-- A este formulario se le debe agregar un campo para almacenar una foto -->

    <main class="flex-fill container">
        <div class="row justify-content-center">
            <form action="/models/registrarMascota.php" method="POST" enctype="multipart/form-data" class="form-usuario bg-white w-75 my-5 border border-secondary rounded">
                <h2 class="my-3 text-center">Registrar Mascota</h2>
                <input type="hidden" name="id" value="1">
                <div class="row">
                    <div class="form-group col-md-6 text-start mb-2">
                        <label for="nombre">Nombre mascota</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" required>
                    </div>
                    <div class="form-group col-md-6 text-start mb-2">
                        <label for="especie">Especie</label>
                        <input type="text" class="form-control" name="especie" id="especie" required>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6 text-start mb-2">
                        <label for="raza">Raza</label>
                        <input type="text" class="form-control" name="raza" id="raza" required>
                    </div>

                    <div class="form-group col-md-6 text-start mb-2">
                        <label for="edad">Edad mascota</label>
                        <input type="int" class="form-control" name="edad" id="edad" required>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group text-start col-md-6 mb-2">
                        <label for="descripcion">Descripción:</label>
                        <textarea class="form-control" name="descripcion" id="descripcion" rows="2"></textarea>
                    </div>
                    <div class="form-group col-md-6 text-start mb-2">
                        <label for="imagen">Seleccionar imagen</label>
                        <input type="file" class="form-control" name="imagen" id="imagen" accept="image/*" required>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6 text-start mb-2">
                        <label for="genero">Genero:</label>
                        <select class="form-select" name="genero" id="genero" aria-label="Default select example">
                            <option value="Macho">Macho</option>
                            <option value="Hembra">Hembra</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6 text-start mb-2">
                        <label for="estado">Estado:</label>
                        <select class="form-select" name="estado" id="estado" aria-label="Default select example">
                            <option value="en_adopcion">En adopción</option>
                            <option value="adoptada">Adoptado</option>
                            <option value="con_propietario">Con propietario</option>
                        </select>
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

    <footer>
        <?php require_once __DIR__ . '/../layout/footer.php'; ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>