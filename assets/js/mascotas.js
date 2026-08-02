/**
 * Devuelve el texto y el color asociados a un estado específico.
 * 
 * Esta función permite mapear un valor de estado (por ejemplo: "activo", "inactivo", "pendiente")
 * hacia un conjunto de propiedades visuales que se aplicarán en la interfaz de usuario.
 * 
 * @param {string} estado - Cadena que representa el estado actual del elemento.
 * @returns {{texto: string, color: string}} Un objeto con el texto descriptivo y el color correspondiente al estado recibido.
 */
function obtenerEstado(estado) {
    switch (estado) {
        case "en_adopcion":
            return {
                texto: "En adopción",
                badge: 'bg-success'
            }
        case "adoptada":
            return {
                texto: "Adoptado",
                badge: 'bg-primary'
            }
        case "con_propietario":
            return {
                texto: "Dueño",
                badge: 'bg-warning text-dark'
            }
        default:
            return {
                texto: estado,
                badge: 'bg-secondary'
            }
    }
}

/**
 * Carga y renderiza las mascotas publicadas por el usuario en la interfaz.
 * 
 * Esta función realiza una petición al servidor para obtener las mascotas 
 * registradas por el usuario, valida la respuesta y actualiza dinámicamente 
 * el contenedor de tarjetas en la página. 
 * 
 * @async
 * @function cargarMascotas
 * @returns {Promise<void>} No retorna valores; actualiza directamente el DOM.
 * @throws {Error} Si la respuesta del servidor no es válida o ocurre un fallo en la petición.
 */
async function cargarMascotas() {
    try {
        const url = "/models/consultarMascotasUsuario.php";
        const respuesta = await fetch(url);
        if (!respuesta.ok) { 
            throw new Error("No fue posible obtener las mascotas");
        }
        const mascotas = await respuesta.json();
        const contenedorMascotas = document.querySelector('#contenedorMascotas');
        if (!contenedorMascotas) {
            return;
        }
        contenedorMascotas.innerHTML = "";
        if (mascotas.length === 0) {
            contenedorMascotas.innerHTML = `
                <div class="m-auto text-center py-4">
                    <i class="fa-solid fa-paw display-3 text-secondary mb-3"></i>
                    <h4 class="fw-bold">Todavía no has publicado mascotas</h4>
                    <p class="text-muted">Cuando registres una mascota aparecerá aquí.</p>
                </div>
            `;
            return;
        }
        let tarjetas = "";
        for (const mascota of mascotas) {
            console.log(mascota)
            const estado = obtenerEstado(mascota.estado); 
            tarjetas += `
                <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12">
                    <div class="card shadow-sm tarjeta-mascota h-100">
                        <img src="/assets/ImgMascotas/${mascota.imagen_url}" class="card-img-top" alt="Imagen de ${mascota.nombre}">
                        <div class="card-body">
                            <div class="d-flex justify-content-end mb-0">
                                <span class="badge ${estado.badge}">${estado.texto}</span>
                            </div>    
                            <h5 class="card-title fw-bold text-success">${mascota.nombre}</h5> 
                            <p class="text-muted small">${mascota.edad} años</p>                      
                            <p class="text-raza">
                                <i class="fa-solid fa-dna text-success me-2"></i> 
                                <strong>Raza: </strong>${mascota.raza}
                            </p>
                            <p class="text-genero">
                                <i class="fa-solid fa-venus-mars me-2 text-primary"></i> 
                                <strong>Género: </strong>${mascota.genero}
                            </p>
                            
                            <div class="d-flex justify-content-end gap-2">
                                <button class="btn btn-outline-warning btn-sm rounded-circle" type="button"><i class="fa-solid fa-pen-to-square"></i></a>
                                <button class="btn btn-outline-danger btn-sm rounded-circle" type="button"><i class="fa-solid fa-trash-can"></i></a>
                            </div>                      
                        </div>
                    </div>
                </div>
            `;

        };
        contenedorMascotas.innerHTML = tarjetas;
    } catch (error) {
        console.error(error);
    }
}

const enlaceMascotas = document.querySelector('#mostrarMascotas');
const elementoModalMascotasUsuario = document.querySelector('#miModal');
let modalMascotasUsuario = null;
if (elementoModalMascotasUsuario) {
    modalMascotasUsuario = new bootstrap.Modal(elementoModalMascotasUsuario);
}

if (enlaceMascotas) {
    enlaceMascotas.addEventListener('click', async (event) => {
        event.preventDefault();
        await cargarMascotas();
        if (modalMascotasUsuario) {
            modalMascotasUsuario.show();
        }
    });
}
