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

    <div class="container-fluid">
        <div class="row g-0">
            <div class="col-6 d-flex justify-content-center">
                <img src="https://media.istockphoto.com/id/528050758/es/foto/varios-dulces-reci%C3%A9n-horneadas-bollos-de.jpg?s=612x612&w=0&k=20&c=I9OqVHYhccajgUzbDuLKtHa1vyALJ3dThxBuALXYMlY=" class="img-fluid rounded h-100 w-100 darken-image" alt="...">
                <div class="position-absolute overlay-component bottom-50">

                    <a href="../Productos/Productos.php?IDCategoria=1" class="btn btn-outline-light fs-3 w-100 ">Mundo
                        Dulce</a>
                    <p class="lead mt-2 text-light">Descubre todo el sabor de nuestras elaboraciones dulces.</p>
                </div>
            </div>
            <div class="col-6 d-flex justify-content-center">
                <img src="https://media.istockphoto.com/id/1144562350/es/foto/pan-fresco-en-una-tabla-de-cortar-y-sal.jpg?s=612x612&w=0&k=20&c=V66d5jXTEQZ5eY7CTmf6gnIbCwa_RIRnKY6erySw828=" class="img-fluid rounded h-100 w-100 darken-image" alt="...">
                <div class="position-absolute overlay-component bottom-50">

                    <a href="../Productos/Productos.php?IDCategoria=2" class="btn btn-outline-light fs-3 w-100 ">Mundo
                        Salado</a>
                    <p class="lead mt-2 text-light">Descubre la magia de nuestras elaboraciones saladas</p>
                </div>
            </div>
        </div>
    </div>


    <?php include("../../Components/Footer/Footer.php"); ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>