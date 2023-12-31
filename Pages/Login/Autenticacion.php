<?php

    // Inicia la sesión si no está activa
    session_status() === PHP_SESSION_ACTIVE ?: session_start();

    // Verifica si el usuario ha iniciado sesión
    if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {

    // Si el usuario no ha iniciado sesión, redirige a la página de inicio de sesión
        header("Location: ../../../../index.php");

    exit(); // Asegura que el script se detenga después de la redirección
    }
?>
