<?php
session_start();
session_unset(); // Elimina las variables de sesion
session_destroy(); // Destruye la sesion
header("Location: /index.php");
exit();
?>