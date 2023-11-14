<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

< <body>


    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between shadow">
        <div class="col-md-3 mb-2 mb-md-0">
            <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
                <img src="/public/coco.png" width="100" alt="">
                <h3 class="mt-4">Panaderia coco</h3>
            </a>
        </div>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="Pages/Categorias/Categoria.php" class="nav-link px-2 text-body-secondary">Productos</a></li>
            <li><a href="#" class="nav-link px-2 text-body-secondary">Servicios</a></li>
            <li><a href="#" class="nav-link px-2 text-body-secondary">Contactos</a></li>
            <li><a href="#" class="nav-link px-2 text-body-secondary">Nosotros</a></li>
        </ul>

        <div class="col-md-3 text-end d-flex">
           <p class="mt-2">Bienvenido usuario</p>
        </div>
    </header>


    <!--Title-->
    <div class="container mt-3">
        <h1 class="text-center">Que desea comer el dia de hoy?</h1>
    </div>



    <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3 justify-content-center">
        <div class="bg-primary-subtle me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden rounded">
            <div class="my-3 py-3">
            <a href="../Productos/Productos.php?IDCategoria=1" class="btn btn-outline-light fs-3">Dulce</a>
                <p class="lead mt-2">Descubre todo el sabor de nuestras elaboraciones dulces</p>
            </div>
            <div class="bg-body-tertiary shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
        </div>
        <div class="bg-info-subtle me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden rounded">
            <div class="my-3 p-3">
            <a href="../Productos/Productos.php?IDCategoria=2" class="btn btn-outline-secondary fs-3">Salado</a>
                <p class="lead mt-2">Descubre la magia de nuestras creaciones saladas</p>
            </div>
            <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
                
            </div>
        </div>
    </div>



    <?php include("./Components/Footer/Footer.php"); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>

</html>