<?php
include_once(__DIR__ . "/../conexion/conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['tienda'])) {
        $tipoUsuario = $_POST['tienda'];
        $query = "SELECT * FROM tiendas WHERE tipo_usuario = ?";
        // Preparamos la consulta para la ejecucion
        $stmt = mysqli_prepare($mysqli, $query);
        if (!$stmt) {
            die("ERROR: " . mysqli_error($mysqli));
        }
        // Vinculamos las variabels a la consulta 
        mysqli_stmt_bind_param($stmt, "s", $tipoUsuario);
        // Ejecutamos la consulta preparada
        mysqli_stmt_execute($stmt);
        // Obtenemos el resultado
        $resultado = mysqli_stmt_get_result($stmt);

        if ($resultado && mysqli_num_rows($resultado) > 0) {
            while ($fila = mysqli_fetch_assoc($resultado)) {
?>
                <div class="row justify-content-center py-3 bg-info">
                    <div class="col-8">
                        <div class="row border py-3 rounded">
                            <div class="col-8">
                                <h2 class="text-center">TIENDA</h2>
                                <p><strong><?php echo $fila["nombre"]; ?></strong></p>
                                <div class="row">
                                    <p class="col-6"><strong>Email:</strong><br><?php echo $fila["email"]; ?></p>
                                    <p class="col-6"><strong>Telefono:</strong><br><?php echo $fila["telefono"]; ?></p>
                                </div>
                                <div class="row">
                                    <p class="col-6"><strong>Dirección:</strong><br><?php echo $fila["direccion"]; ?></p>
                                    <p class="col-6"><strong>Ciudad:</strong><br><?php echo $fila["ciudad"]; ?></p>
                                </div>
                                <p><strong>Descripcion:</strong><br><?php echo $fila["descripcion"]; ?></p>
                                <div class="row justify-content-center">
                                    <a class="btn btn-dark w-50" href="#">Más Información</a>
                                </div>
                            </div>
                            <div class="col-4">
                                <img class="img-fluid w-50" src="/assets/images/veterinario.png" alt="Logo veterinaria">
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
        } else {
            echo "No se encontraron resultados.";
        }
    } elseif (isset($_POST['paseador'])) {
        $tipoUsuario = $_POST['paseador'];
        $query = "SELECT * FROM paseadores WHERE tipo_usuario = ?";
        // Preparamos la consulta para la ejecucion
        $stmt = mysqli_prepare($mysqli, $query);
        if (!$stmt) {
            die("ERROR: " . mysqli_error($mysqli));
        }
        // Vinculamos las variabels a la consulta 
        mysqli_stmt_bind_param($stmt, "s", $tipoUsuario);
        // Ejecutamos la consulta preparada
        mysqli_stmt_execute($stmt);
        // Obtenemos el resultado
        $resultado = mysqli_stmt_get_result($stmt);

        if ($resultado && mysqli_num_rows($resultado) > 0) {
            while ($fila = mysqli_fetch_assoc($resultado)) {
            ?>
                <div class="row justify-content-center py-3 bg-info">
                    <div class="col-8">
                        <div class="row border py-3 rounded">
                            <div class="col-8">
                                <h2 class="text-center">PASEADOR</h2>
                                <p><strong><?php echo $fila["nombre"]; ?></strong></p>
                                <div class="row">
                                    <p class="col-6"><strong>Email:</strong><br><?php echo $fila["email"]; ?></p>
                                    <p class="col-6"><strong>Telefono:</strong><br><?php echo $fila["telefono"]; ?></p>
                                </div>
                                <div class="row">
                                    <p class="col-6"><strong>Zona de trabajo:</strong><br><?php echo $fila["zona_trabajo"]; ?></p>
                                    <p class="col-6"><strong>Ciudad:</strong><br><?php echo $fila["ciudad"]; ?></p>
                                </div>
                                <p><strong>Descripcion:</strong><br><?php echo $fila["descripcion"]; ?></p>
                                <div class="row justify-content-center">
                                    <a class="btn btn-dark w-50" href="#">Más Información</a>
                                </div>
                            </div>
                            <div class="col-4">
                                <img class="img-fluid w-50" src="/assets/images/veterinario.png" alt="Logo veterinaria">
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
        } else {
            echo "No se encontraron resultados.";
        }
        echo "Consultando " . $tipoUsuario . "<br>";
    } elseif (isset($_POST['veterinaria'])) {
        $tipoUsuario = $_POST['veterinaria'];
        $query = "SELECT * FROM veterinarias WHERE tipo_usuario = ?";
        // Preparamos la consulta para la ejecucion
        $stmt = mysqli_prepare($mysqli, $query);
        if (!$stmt) {
            die("ERROR: " . mysqli_error($mysqli));
        }
        // Vinculamos las variabels a la consulta 
        mysqli_stmt_bind_param($stmt, "s", $tipoUsuario);
        // Ejecutamos la consulta preparada
        mysqli_stmt_execute($stmt);
        // Obtenemos el resultado
        $resultado = mysqli_stmt_get_result($stmt);

        if ($resultado && mysqli_num_rows($resultado) > 0) {
            while ($fila = mysqli_fetch_assoc($resultado)) {
            ?>
                <div class="row justify-content-center py-3 bg-info">
                    <div class="col-8">
                        <div class="row border py-3 rounded">
                            <div class="col-8">
                                <h2 class="text-center">VETERINARIA</h2>
                                <p><strong><?php echo $fila["nombre"]; ?></strong></p>
                                <div class="row">
                                    <p class="col-6"><strong>Email:</strong><br><?php echo $fila["email"]; ?></p>
                                    <p class="col-6"><strong>Telefono:</strong><br><?php echo $fila["telefono"]; ?></p>
                                </div>
                                <div class="row">
                                    <p class="col-6"><strong>Dirección:</strong><br><?php echo $fila["direccion"]; ?></p>
                                    <p class="col-6"><strong>Ciudad:</strong><br><?php echo $fila["ciudad"]; ?></p>
                                </div>
                                <p><strong>Descripcion:</strong><br><?php echo $fila["descripcion"]; ?></p>
                                <div class="row justify-content-center">
                                    <a class="btn btn-dark w-50" href="#">Más Información</a>
                                </div>
                            </div>
                            <div class="col-4">
                                <img class="img-fluid w-50" src="/assets/images/veterinario.png" alt="Logo veterinaria">
                            </div>
                        </div>
                    </div>
                </div>
<?php
            }
        } else {
            echo "No se encontraron resultados.";
        }
        echo "Consultando " . $tipoUsuario . "<br>";
    } else {
        echo "No se seleccionó ninguna opción";
    }
}
?>