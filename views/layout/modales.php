<?php 
$mensaje = $_GET['mensaje'] ?? 'Ocurrio un error inesperado.';
$tipoUsuario = $_GET['tipoUsuario'];
$usuario = $tipoUsuario === 'normal' ? 'usuario' : $tipoUsuario;
?>

<!--//? MODAL REGISTROS -->

<div class="modal fade" id="registroExitoso" tabindex="-1" aria-labelledby="registroExitoso" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center text-success">
                <div><i class="fa-solid fa-circle-check fs-1"></i></div>
                <p class="my-3">¡Tu registro de <?= $usuario ?> se guardó exitosamente!</p>
                <p class="my-3 fs-4">YA PUEDES INICIAR SESIÓN</p>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="registroError" tabindex="-1" aria-labelledby="registroError" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center text-danger">
                <div><i class="fa-solid fa-square-xmark fs-1"></i></div>
                <p class="my-3"><?= htmlspecialchars($mensaje); ?></p>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="registroMascota" tabindex="-1" aria-labelledby="registroMascota" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center text-success">
                <div><i class="fa-solid fa-circle-check fs-1"></i></div>
                <p class="my-3 fs-2">!Se registro la mascota exitosamente!</p>
            </div>
        </div>
    </div>
</div>

<!--//? MODAL LOGIN -->

<div class="modal fade" id="bienvenidadLogin" tabindex="-1" aria-labelledby="bienvenidoLogin" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center text-success p-5">
                <div><i class="fa-solid fa-circle-check fs-1"></i></div>
                <p class="my-3 fs-2">!BIENVENIDO A ANIMAPP!</p>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="loginError" tabindex="-1" aria-labelledby="loginError" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center text-danger p-5">
                <div><i class="fa-solid fa-square-xmark fs-1"></i></div>
                <p class="my-3 fs-3"><?= htmlspecialchars($mensaje); ?></p>
            </div>
        </div>
    </div>
</div>
