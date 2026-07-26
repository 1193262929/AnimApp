<?php

/**
 * Procesa y guarda una imagen subida por el usuario.
 *
 * @param array $files   Arreglo $_FILES recibido desde el formulario
 * 
 * @return string   Nombre final de la imagen almacenada
 * @throws Exception
 */
function procesarImagen(array $files)
{
    $carpetaImg = __DIR__ . '/../assets/ImgMascotas/'; // <-- Aca va la ruta donde se van a almacenar las imagenes.
    $tipoImg = strtolower(pathinfo($files['imagen']['name'], PATHINFO_EXTENSION)); // Para almacenar el tipo de imagen que vamos a manejar.
    $nombreFinal = uniqid('', true) . '.' . $tipoImg;
    $urlImage = $carpetaImg .  $nombreFinal;
    //?------------VALIDACIONES------------
    //* 0- Verificar que la carpeta donde se van a almacenar las imagens exista
    if (!file_exists($carpetaImg)) {
        mkdir($carpetaImg, 0777, true);
    }
    //* 1- Verificar si es una imagen real
    if ($files['imagen']['error'] !== UPLOAD_ERR_OK) {
        throw new Exception('Error al subir la imagen');
    }
    //* 2- Verificar que el archivo sea una imagen valida
    $check = getimagesize($files['imagen']['tmp_name']);
    if (!$check) {
        throw new Exception('El archivo no es una imagen.');
    }
    //* 3- Verificar el tamaño de la imagen
    $maximo = 2 * 1024 * 1024;
    if ($files['imagen']['size'] > $maximo) {
        throw new Exception('La imagen es muy grande.');
    }
    //* 4- Permitir los formatos de imagen
    if ($tipoImg !== 'jpg' && $tipoImg !== 'jpeg' && $tipoImg !== 'png') {
        throw new Exception('Solo se permite formatos JPG, JPEG, PNG.');
    }
    //* 5- Verificar si la variable $cargado esta 0(false)
    if (!move_uploaded_file($files['imagen']['tmp_name'], $urlImage)) {
        throw new Exception('El archivo NO se subio.');
    }
    return $nombreFinal; // Entonces aca se puede retornar el nombre del archivo para guardarlo en BD.
}
