<?php
require_once("../conexion/conexion.php");
/**
 * @var mysqli $mysqli
 */
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Almacenamos los datos en variables, que recibimos desde el formulario
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $ciudad = $_POST['ciudad'];
    $email = $_POST['email'];
    $password = $_POST['contrasena'];
    $password2 = $_POST['contrasena2'];

    // Consulta en este caso para insertar los datos que recibimos desde el fomulario
    $query = "INSERT INTO usuarios_normales (nombre, apellido, email, direccion, telefono, ciudad, contraseña, verificarContraseña) VALUES (?, ?, ?, ?, ?, ?, ?, ?);";

    // Preparamos la consulta para la ejecucion
    $stmt = mysqli_prepare($mysqli, $query);

    // Vinculamos las variabels a la consulta 
    mysqli_stmt_bind_param($stmt, "ssssisss", $nombre, $apellido, $email,  $direccion, $telefono, $ciudad,  $password, $password2);

    // Ejecutamos la consulta preparada
    if (mysqli_stmt_execute($stmt)) {
        echo "<script>
             alert('Registro exitoso');
             window.location.href = 'http://localhost/AnimApp/'; 
           </script>";
    } else {
        echo "Error en el registro" . mysqli_error($mysqli);
    }
    mysqli_stmt_close($stmt); // Terminamos la consulta preparada
    mysqli_close($mysqli); // Cerramos la conexion

}
