<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<?php

    // Inicia la sesión si no está activa
    session_status() === PHP_SESSION_ACTIVE ?: session_start();

    // Verifica si el usuario ha iniciado sesión
    if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {

    // Si el usuario no ha iniciado sesión, redirige a la página de inicio de sesión
        header("Location: ../../index.php");

    exit(); // Asegura que el script se detenga después de la redirección
    }
?>


<body>
    <!--Title-->
    <div class="container mt-3">
        <h1 class="text-center">Elije tu Categoria</h1>
    </div>


    <div class="container m-auto ">
        <a href="../Productos/Productos.php?IDCategoria=1" class="btn btn-outline-primary">Dulce</a>
        <a href="../Productos/Productos.php?IDCategoria=2" class="btn btn-outline-secondary">Salado</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>