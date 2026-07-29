<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['usuario'])) {
    // header("Location: /controller/login.php");
    header('Location: /views/login/loginVista.php');
    exit;
}
