<?php
$mensaje = $_GET['mensaje'] ?? 'Ocurrió un error inesperado.';
$tiposUsuario = [
    'normal' => 'Usuario',
    'refugio' => 'Refugio',
    'veterinaria' => 'Veterinaria',
    'tienda' => 'Tienda',
    'paseador' => 'Paseador',
];
$tipoUsuario = $_GET['tipoUsuario'] ?? 'normal';
$usuario = $tiposUsuario[$tipoUsuario] ?? 'Usuario';
?>

<!--//? MODALES DE REGISTRO -->

<div class="modal fade" id="registroExitoso" tabindex="-1" aria-labelledby="tituloRegistroExitoso" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                <div class="icono-modal icono-exito">
                    <i class="fa-solid fa-circle-check"></i>
                </div>
                <h4 class="titulo-modal" id="tituloRegistroExitoso">¡<?= htmlspecialchars($usuario) ?> registrado correctamente!</h4>
                <p class="texto-modal">Tu cuenta fue creada correctamente.</p>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="registroError" tabindex="-1" aria-labelledby="tituloRegistroError" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                <div class="icono-modal icono-error">
                    <i class="fa-solid fa-circle-xmark"></i>
                </div>
                <h4 class="titulo-modal" id="tituloRegistroError">No fue posible completar la operación</h4>
                <p class="texto-modal"><?= htmlspecialchars($mensaje); ?></p>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="registroMascota" tabindex="-1" aria-labelledby="tituloRegistroMascota" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                <div class="icono-modal icono-exito">
                    <i class="fa-solid fa-circle-check"></i>
                </div>
                <h3 class="titulo-modal" id="tituloRegistroMascota">¡Mascota registrada!</h3>
                <p class="texto-modal">Tu mascota fue publicada correctamente.</p>
            </div>
        </div>
    </div>
</div>

<!--//? MODALES DE LOGIN -->

<div class="modal fade" id="bienvenidaLogin" tabindex="-1" aria-labelledby="tituloBienvenidaLogin" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                <div class="icono-modal icono-exito">
                    <i class="fa-solid fa-circle-check"></i>
                </div>
                <h4 class="titulo-modal" id="tituloBienvenidaLogin">¡Bienvenido a AnimApp!</h4>
                <p class="texto-modal">Has iniciado sesión correctamente.</p>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="loginError" tabindex="-1" aria-labelledby="tituloLoginError" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                <div class="icono-modal icono-error">
                    <i class="fa-solid fa-circle-xmark"></i>
                </div>
                <h4 class="titulo-modal" id="tituloLoginError">No fue posible completar la operación</h4>
                <p class="texto-modal"><?= htmlspecialchars($mensaje); ?></p>
            </div>
        </div>
    </div>
</div>

