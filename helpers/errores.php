<?php
/**
 * Muestra el mensaje correspondiente a un código de error.
 *
 * Esta función recibe un número entero que representa el código de error
 * y devuelve el mensaje descriptivo asociado al codigo. 
 
 * @param int $codigo Número identificador del error.
 * @return string Mensaje descriptivo del error.
 */
function obtenerMensajeErrorDB(int $codigo) : string {
    return match ($codigo) {
        1062 => 'Ya existe una cuenta registrada con ese correo electrónico.',
        1451 => 'No es posible eliminar este registro porque tiene información relacionada.', 
        1452 => 'La información relacionada no existe.',
        1048 => 'Hay campos obligatorios sin completar.',
        default => 'Ocurrió un error inesperado.'
    };
}