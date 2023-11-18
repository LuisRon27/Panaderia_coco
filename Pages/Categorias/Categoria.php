<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Categorias</title>
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

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


    <?php include("../../Components/Navbar/Navbar.php"); ?>





    <!--Title-->

    <h1 class="text-center mt-4">Cual es su antojo para hoy?</h1>

    <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3 justify-content-center mt-3">
        <div class="bg-primary-subtle me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden rounded">
            <div class="my-3 py-3">
                <a href="../Productos/Productos.php?IDCategoria=1" class="btn btn-outline-secondary fs-3 w-100 ">Mundo
                    Dulce</a>
                <p class="lead mt-2">Descubre todo el sabor de nuestras elaboraciones dulces.</p>
            </div>

            <div class="bg-body-tertiary shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
        </div>
        <div class="bg-primary-subtle me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden rounded">
            <div class="my-3 p-3">
                <a href="../Productos/Productos.php?IDCategoria=2" class="btn btn-outline-secondary fs-3 w-100">Mundo
                    Salado</a>
                <p class="lead mt-2">Descubre la magia de nuestras creaciones saladas.</p>
            </div>

            <div class="bg-body-tertiary shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">

            </div>
        </div>
    </div>




    <?php include("../../Components/Footer/Footer.php"); ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>