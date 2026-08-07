<div class="modal fade" id="modalMascotasUsuario" tabindex="-1" aria-labelledby="tituloModalMascotasUsuario" aria-describedby="descripcionModalMascotas" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title fw-bold text-success" id="tituloModalMascotasUsuario">
                    <i class="fa-solid fa-paw me-2"></i>
                    Mis mascotas
                </h4>
                <p id="descripcionModalMascotas" class="visually-hidden">Lista de mascotas publicadas por el usuario.</p>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body fondo-modal-mascotas position-relative">
                <div class="row g-4 justify-content-center pt-0" id="contenedorMascotas" data-estado="cargando">
                    <!-- Las tarjetas se generan dinamicamente desde el archivo mascotas.js -->
                </div>
            </div>
        </div>
    </div>
</div>