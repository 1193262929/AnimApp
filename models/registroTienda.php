<?php
require_once("../conexion/conexion.php");
/**
 * @var mysqli $mysqli
 */
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Almacenamos los datos en variables, que recibimos desde el formulario
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $ciudad = $_POST['ciudad'];
    $descripcion = $_POST['comment'];
    $email = $_POST['email'];
    $password = $_POST['contrasena'];
    $password2 = $_POST['contrasena2'];

    // Consulta en este caso para insertar los datos que recibimos desde el fomulario
    $query = "INSERT INTO tiendas (nombre, telefono, direccion,  ciudad, descripcion, email, contraseña, verificarContraseña) VALUES (?, ?, ?, ?, ?, ?, ?, ?);";

    // Preparamos la consulta para la ejecucion
    $stmt = mysqli_prepare($mysqli, $query);

    // Vinculamos las variabels a la consulta 
    mysqli_stmt_bind_param($stmt, "sissssss", $nombre, $telefono, $direccion, $ciudad, $descripcion, $email, $password, $password2);

    // Ejecutamos la consulta preparada
    if (mysqli_stmt_execute($stmt)) {
        echo "<script>
             alert('Se registro su tienda exitosamente');
             window.location.href = 'http://localhost/AnimApp/'; 
           </script>";
    } else {
        echo "Error en el registro" . mysqli_error($mysqli);
    }
    mysqli_stmt_close($stmt); // Terminamos la consulta preparada
    mysqli_close($mysqli); // Cerramos la conexion

}
