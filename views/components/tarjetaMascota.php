<?php

/** @var array $registro */
/** @var string $acciones */
$acciones = $acciones ?? '';
?>
<article class="card tarjeta-mascota h-100 shadow-sm">
    <div class="contenedor-imagen-mascota">
        <img
            class="card-img-top"
            src="/assets/ImgMascotas/<?= htmlspecialchars($registro['imagen_url']); ?>"
            alt="Imagen de un <?= htmlspecialchars($registro['raza']); ?>">
    </div>
    <div class="card-body d-flex flex-column">
        <h5 class="card-title fw-bold text-success"><i class="fa-solid fa-paw me-1"></i><?= htmlspecialchars($registro['nombre']) ?></h5>
        <div class="datos-mascota mb-1">
            <p>
                <i class="fa-solid fa-dog me-2"></i>
                <strong>Raza:</strong>
                <?= htmlspecialchars($registro['raza']); ?>
            </p>
            <p>
                <i class="fa-solid fa-venus-mars me-2"></i>
                <strong>Género:</strong>
                <?= htmlspecialchars($registro['genero']); ?>
            </p>
            <span class="badge bg-success"><?= htmlspecialchars($registro['estado']) ?></span>
        </div>
        <div class="acciones-mascota">
            <?= $acciones ?? '' ?>
        </div>
    </div>
</article>