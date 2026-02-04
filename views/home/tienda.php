<?php include("../../controller/verificarSesion.php"); ?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tienda</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="../../assets/css/style.css">
</head>

<body>
  <div class="page-wrapper">

    <?php require('../layout/header.php'); ?>

    <main>
      <div class="container ">
        <div class="row mt-5">
          <div class="carousel slide " id="mi-carousel" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active container-carousel">
                  <img src="/AnimApp/assets/images/inicioRecortada.png" alt="" class="img-fluid">
                </div>
                <div class="carousel-item">
                  <img src="/AnimApp/assets/images/imagen-inicio.jpg" alt="" class="img-fluid">
                </div>
                <div class="carousel-item">
                  <img src="/AnimApp/assets/images/imagen-inicio.jpg" alt="" class="img-fluid">
                </div>
              </div>
          </div>

        </div>
      </div>
    </main>

    <div class="container text-end mb-4">
      <a class="btn btn-dark ms-3" href="/AnimApp/controller/logout.php">Cerrar sesión</a>
    </div>

  </div>
</body>

</html>