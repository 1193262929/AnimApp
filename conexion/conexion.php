<?php
$host = "localhost";
// $username = "root";// Si esta en Windows
$username = "dev"; // Si estamos en linux (en mi caso WSL)
// $password = ""; // Si esta en Windows
$password = "1234"; // Si estamos en linux (en mi caso WSL)
$db_name = "sistema_mascotas";

try {
    //  Inicializa el objeto MySQLi
    $mysqli = mysqli_init();

    // Verificamos que el objeto MySQLi se haya inicializado correctamente
    if (!$mysqli) throw new Exception("No fue posible inicializar MySQLi.");

    // Intentamos establecer la conexión con la base de datos
    if (!mysqli_real_connect($mysqli, $host, $username, $password, $db_name)) {
        throw new Exception(
            "No conecto con la base de datos. " .
                "Código" . mysqli_connect_errno() .// Muestra el codigo del error
                " _ " . mysqli_connect_error() // Muestra el mensaje del error
        );
    }
    // echo "CONEXION";

} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
