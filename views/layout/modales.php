<?php
$mensaje = $_GET['mensaje'] ?? 'Ocurrio un error inesperado.';
$tipoUsuario = $_GET['tipoUsuario'];
$usuario = $tipoUsuario === 'normal' ? 'usuario' : $tipoUsuario;
?>

<!--//? MODAL REGISTROS -->

<div class="modal fade" id="registroExitoso" tabindex="-1" aria-labelledby="registroExitoso" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                <div class="icono-modal icono-exito">
                    <i class="fa-solid fa-circle-check"></i>
                </div>
                <h4 class="titulo-modal">¡Registro de <?= $usuario ?> exitosamente!</h4>
                <p class="texto-modal">Tu información fue guardo correctamente.</p>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="registroError" tabindex="-1" aria-labelledby="registroError" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                <div class="icono-modal icono-error">
                    <i class="fa-solid fa-circle-xmark"></i>
                </div>
                <h4 class="titulo-modal">No fue posible completar la operación</h4>
                <p class="texto-modal"><?= htmlspecialchars($mensaje); ?></p>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="registroMascota" tabindex="-1" aria-labelledby="registroMascota" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                <div class="icono-modal icono-exito">
                    <i class="fa-solid fa-circle-check"></i>
                </div>
                <h3 class="titulo-modal">!Registro exitoso!</h3>
                <p class="texto-modal">Tu información fue registrada correctamente.</p>
            </div>
        </div>
    </div>
</div>

<!--//? MODAL LOGIN -->

<div class="modal fade" id="bienvenidadLogin" tabindex="-1" aria-labelledby="bienvenidoLogin" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                <div class="icono-modal icono-exito">
                    <i class="fa-solid fa-circle-check"></i>
                </div>
                <h4 class="titulo-modal">!Login exitoso!</h4>
                <p class="text-modal">!BIENVENIDO A ANIMAPP!</p>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="loginError" tabindex="-1" aria-labelledby="loginError" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                <div class="icono-modal icono-error">
                    <i class="fa-solid fa-circle-xmark"></i>
                </div>
                <h4 class="titulo-modal">No fue posible completar la operación</h4>
                <p class="texto-modal"><?= htmlspecialchars($mensaje); ?></p>
            </div>
        </div>
    </div>
</div>

