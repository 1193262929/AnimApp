<?php

/**
 * Ejecuta una consulta preparada (INSERT, UPDATE, DELETE).
 *
 * @param mysqli $mysqli      Conexión a la base de datos.
 * @param string $query       Consulta SQL con parámetros.
 * @param string $tipos       Tipos de datos para bind_param().
 * @param array $parametros   Valores que reemplazan los "?" de la consulta.
 * 
 * @return mysqli_stmt
 * @throws Exception
 */
function ejecutarConsulta(mysqli $mysqli, string $query, string $tipos, array $parametros): mysqli_stmt
{
    $stmt = $mysqli->prepare($query);
    if (!$stmt) {
        throw new Exception('Error al preparar la consulta: ' . $mysqli->error);
    }
    $stmt->bind_param($tipos, ...$parametros);
    if (!$stmt->execute()) {
        throw new Exception('Error al ejecutar la consulta: ' . $stmt->error);
    }
    return $stmt;
}

/**
 * Ejecuta una consulta SELECT y devuelve un único registro.
 *
 * @param mysqli $mysqli      Conexión a la base de datos.
 * @param string $query       Consulta SQL con parámetros.
 * @param string $tipos       Tipos de datos para bind_param().
 * @param array $parametros   Valores que reemplazan los signos '?' de la consulta.
 * 
 * @return array|null
 * @throws Exception
 */
function obtenerRegistro(mysqli $mysqli, string $query, string $tipos, array $parametros): ?array
{
    $stmt = $mysqli->prepare($query);
    if (!$stmt) {
        throw new Exception('Error al preparar la consulta: ' . $mysqli->error);
    }
    $stmt->bind_param($tipos, ...$parametros);
    if (!$stmt->execute()) {
        throw new Exception('Error al ejecutar la consulta: ' . $stmt->error);
    }
    $resultado = $stmt->get_result();
    $fila = $resultado->fetch_assoc();
    $stmt->close();
    return $fila ?: null;
}


