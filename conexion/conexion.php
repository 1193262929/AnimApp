<?php
$host = "localhost";
$username = "root";
$password = "";
$db_name = "sistema_mascotas";

try {
    //  Inicializa MySQLi y devuelve un objeto para usar con mysqli_real_connect()
    $mysqli = mysqli_init();
    
    // Se verifica si hay error en la conexion
    if(!$mysqli) {
        throw new Exception("ERROR " . mysqli_connect_errno());
    }

    // Establecemos una conexión con un servidor MySQL, por medio de mysqli_real_connect()
    if (!mysqli_real_connect($mysqli, $host, $username, $password, $db_name)) {
        throw new Exception("ERROR " . mysqli_connect_error());
    }
    // echo "CONEXION";

} catch (Exception $e) {
    echo "Error" . $e->getMessage();
}



