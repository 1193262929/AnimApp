<?php

/** @var array $registro */
/** @var string $acciones */
$tiposServicio = [
    'tienda' => 'Tienda',
    'veterinaria' => 'Veterinaria',
    'paseador' => 'Paseador',
];
$tipoServicio = $tiposServicio[$registro['tipo_usuario']] ?? 'servicio';
$nombre = htmlspecialchars($registro['nombre']);
$ciudad = htmlspecialchars($registro['ciudad']);
$descripcion = htmlspecialchars($registro['descripcion']);
$descripcion = strlen($descripcion) > 80 
    ? substr($descripcion, 0, 80) . '...'
    : $descripcion;
$email = htmlspecialchars($registro['email']);
$zonaTrabajo = !empty($registro['zona_trabajo'])
    ? htmlspecialchars($registro['zona_trabajo'])
    : null;
$imagen = htmlspecialchars($registro['imagen_url']);
$acciones = $acciones ?? '';
$colores = [
    'tienda' => 'warning',
    'veterinaria' => 'primary',
    'paseador' => 'success'
];
$color = $colores[$registro['tipo_usuario']] ?? 'secondary';
$iconos = [
    'tienda' => 'fa-store',
    'veterinaria' => 'fa-stethoscope',
    'paseador' => 'fa-person-walking',
];
$icono = $iconos[$registro['tipo_usuario']] ?? 'fa-paw';
?>

<article class="card tarjeta-servicio shadow-sm border-0">
    <div class="row g-0 h-100">
        <!-- Imagen -->
        <div class="col-lg-4">
            <!-- Imagen del servicio -->
            <div class="contenedor-imagen-servicio">
                <img class="img-servicio" src="/assets/ImgMascotas/<?= $imagen ?>" alt="Imagen <?= $tipoServicio ?> <?= $nombre ?>">
            </div>
        </div>
        <div class="col-lg-8">
            <!-- Aqui ira todo el contenido -->
            <div class="card-body d-flex flex-column h-100">
                <div class="mb-1">
                    <span class="badge bg-<?= $color ?>"><i class="fa-solid <?= $icono ?> me-1"></i><?= $tipoServicio ?></span>
                    <h4 class="nombre-servicio"><?= $nombre ?></h4>

                    <div class="row informacion-servicio gy-2">
                        <div class="col-md-6">
                            <i class="fa-solid fa-location-dot"></i>
                            <strong>Ciudad:</strong>
                            <?= $ciudad ?>
                        </div>

                        <?php if ($registro['tipo_usuario'] === 'paseador') : ?>
                            <div class="col-md-6">
                                <i class="fa-solid fa-route"></i>
                                <strong>Zona:</strong>
                                <?= $zonaTrabajo ?>
                            </div>

                        <?php else : ?>
                            <div class="col-md-6">
                                <i class="fa-solid fa-envelope"></i>
                                <strong>Email:</strong>
                                <?= $email ?>
                            </div>
                        <?php endif; ?>          
                    </div>
                    <div class="descripcion-servicio">
                        <p><?= $descripcion ?></p>
                    </div>
                </div>
                <div class="acciones-servicio mt-auto">
                    <?= $acciones ?>
                </div>
            </div>
        </div>
    </div>
</article>