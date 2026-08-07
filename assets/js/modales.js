// -----MODALES PARA EL REGISTRO-----

const elementoModalExito = document.getElementById('registroExitoso');
let modalExito = null;
if (elementoModalExito) {
    modalExito = new bootstrap.Modal(elementoModalExito);
}
/**
 * Muestra un modal de éxito de forma temporal y limpia la URL.
 * 
 * Esta función despliega el modal de confirmación `modalExito` en pantalla,
 * lo mantiene visible durante 2.5 segundos y luego lo oculta automáticamente.
 * 
 * @function mostrarModalExito
 * @returns {void} No retorna valores; modifica el DOM y el historial del navegador.
 */
window.mostrarModalExito = () => {
    modalExito.show();
    setTimeout(() => {
        modalExito.hide();
    }, 2500)
    window.history.replaceState({}, '', window.location.pathname);// Explicacion de esta linea 
}

const elementoModalError = document.getElementById('registroError');
let modalError = null;
if (elementoModalError) {
    modalError = new bootstrap.Modal(elementoModalError);
}
window.mostrarModalError = () => {
    modalError.show();
    console.log("Error archivo javascript");
    setTimeout(() => {
        modalError.hide();
    }, 3000)
    window.history.replaceState({}, '', window.location.pathname);
}

const elementoModalMascota = document.getElementById('registroMascota');
let modalMascota = null;
if (elementoModalMascota) {
    modalMascota = new bootstrap.Modal(elementoModalMascota);
}
window.mostrarModalMascota = () => {
    modalMascota.show();
    setTimeout(() => {
        modalMascota.hide();
    }, 2500)
    window.history.replaceState({}, '', window.location.pathname);
}

// -------------MODAL-LOGIN------------

const elementoModalLogin = document.getElementById('bienvenidaLogin');
let modalLogin = null;
if (elementoModalLogin) {
    modalLogin = new bootstrap.Modal(elementoModalLogin);
}
window.mostrarModalLogin = () => {
    modalLogin.show();
    setTimeout(() => {
        modalLogin.hide();
    }, 2500)
    window.history.replaceState({}, '', window.location.pathname);
}

const elementoModalLoginError = document.getElementById('loginError');
let modalLoginError = null;
if (elementoModalLoginError) {
    modalLoginError = new bootstrap.Modal(elementoModalLoginError);
}
window.mostrarModalLoginError = () => {
    modalLoginError.show();
    setTimeout(() => {
        modalLoginError.hide();
    }, 3000)
    window.history.replaceState({}, '', window.location.pathname);
}
