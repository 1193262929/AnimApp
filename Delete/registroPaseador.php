<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Paseador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/registro.css">
</head>

<body>
    <div class="page-wrapper">

        <?php require('../layout/header.php'); ?>

        <!-- A este formulario se le debe agregar un campo para almacenar una foto -->

        <main>
            <div class="container-formulario-registro text-center container-fluid py-2 d-flex justify-content-center">
                <form action="/AnimApp/models/registroPaseador.php" method="POST" class="bg-white w-50 p-3 my-5 d-flex flex-column rounded">
                    <h2 class="my-3">Crear cuenta Paseador</h2>
                    <div class="row w-100">

                        <div class="form-group col-md-6 text-start mb-2">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" required>
                        </div>
                        <div class="form-group col-md-6 text-start mb-2">
                            <label for="telefono">Telefono</label>
                            <input type="tel" class="form-control" name="telefono" id="telefono" required>
                        </div>
                    </div>

                    <div class="row w-100">
                        <div class="form-group col-md-6 text-start mb-2">
                            <label for="direccion">Ciudad</label>
                            <input type="text" class="form-control" name="ciudad" id="ciudad" required>
                        </div>
                        <div class="form-group col-md-6 text-start mb-2">
                            <label for="zonaTrabajo">Zona de trabajo</label>
                            <input type="text" class="form-control" name="zonaTrabajo" id="zonaTrabajo" required>
                        </div>
                    </div>

                    <div class="form-group text-start mb-2">
                        <label for="comment">Descripción:</label>
                        <textarea class="form-control" name="comment" id="comment" rows="2"></textarea>
                    </div>

                    <div class="form-group col-md-6 text-start mb-2">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" required>
                    </div>

                    <div class="row w-100">
                        <div class="form-group col-md-6 text-start mb-2">
                            <label for="contrasena">Contraseña</label>
                            <input type="password" class="form-control" name="contrasena" id="contrasena" required>
                        </div>
                        <div class="form-group col-md-6 text-start mb-2">
                            <label for="contrasena2">Verificar contraseña</label>
                            <input type="password" class="form-control" name="contrasena2" id="contrasena2" required>
                        </div>
                    </div>

                    <div class="row w-100 my-3">
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
        <?php require('../layout/footer.php'); ?>
    </div>
</body>
</html>