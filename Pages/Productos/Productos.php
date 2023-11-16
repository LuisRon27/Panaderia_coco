<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Productos</title>
    <link rel="stylesheet" href="/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<?php require("../Login/Autenticacion.php"); ?>


<body>

    <div class="container-fluid mt-2">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between shadow">
            <div class="col-md-3 mb-2 mb-md-0">
                <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
                    <img src="/public/coco.png" width="100" alt="">
                    <h3 class="mt-4">Panaderia coco</h3>
                </a>
            </div>

            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="Pages/Categorias/Categoria.php" class="nav-link px-2 text-body-secondary fs-5">Productos</a></li>
                <li><a href="#" class="nav-link px-2 text-body-secondary fs-5"">Servicios</a></li>
            <li><a href=" #" class="nav-link px-2 text-body-secondary fs-5">Contactos</a></li>
                <li><a href="#" class="nav-link px-2 text-body-secondary fs-5">Nosotros</a></li>
            </ul>

            <div class="col-md-3 text-end d-flex">
                <p class="mt-2 fs-5">Bienvenido, USUARIO</p>
            </div>
        </header>

        <!-- carrito -->

        <main>

            <div class="container mt-4">
                <div class="row justify-content-center">
                    <div class="col-md-9">
                        <div class="input-group mb-3">
                            <input type="text" id="busqueda" class="form-control" placeholder="Buscar productos" aria-label="Buscar productos" aria-describedby="button-buscar">
                            <button class="btn btn-primary" id="button-buscar" onclick="filtrarProductos()">Buscar</button>
                        </div>

                    </div>
                    <div class="col-md-3">
                        <?php include("../Carrito/Carrito.php"); ?>
                    </div>

                </div>
            </div>




            <?php
            require("../../Config/Conexion.php");

            $IDUsuario = $_SESSION['IDUsuario'];
            $IDCategoria = $_GET['IDCategoria'];

            $sql = "SELECT * FROM productos WHERE IDCategoria = $IDCategoria;";

            $resultado = mysqli_query($conexion, $sql);

            while ($fila = mysqli_fetch_assoc($resultado)) {
            ?>

                <!-- Card Producto -->
                <div class="d-flex">
                    <div class="row d-flex justify-content-center">
                        <div class="d-inline-flex  justify-content-center col-md-4 mb-3">
                            <div class="card " style="width: 18rem;">
                                <img src="<?php echo $fila['ImagenURL'] ?>" class="card-img-top" alt="<?php echo $fila['Nombre'] ?>">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <?php echo $fila['Nombre'] ?>
                                    </h5>
                                    <p class="card-text">
                                        <?php echo $fila['Descripcion'] ?>
                                    </p>

                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $fila['IDProducto'] ?>">
                                        Comprar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>



                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal<?php echo $fila['IDProducto'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel<?php echo $fila['IDProducto'] ?>" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="../Carrito/ABM/Insertar.Carrito.php" method="post">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel<?php echo $fila['IDProducto'] ?>">
                                            <?php echo $fila['Nombre'] ?>
                                        </h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="<?php echo $fila['ImagenURL'] ?>" class="card-img-top" alt="<?php echo $fila['Nombre'] ?>">
                                        <h4 class="mt-4">
                                            $ARS
                                            <?php echo $fila['Precio'] ?>
                                        </h4>
                                        <p class="fs-4">
                                            <?php echo $fila['Descripcion'] ?>
                                        </p>

                                        <!-- Contador (Cantidad) -->
                                        <div class="">
                                            <h4>Cantidad</h4>
                                            <div class="contador">
                                                <input type="text" class="numero form-control" name="Cantidad" data-producto-id="<?php echo $fila['IDProducto'] ?>" value="0">
                                            </div>
                                            <div class="mt-3">
                                                <a class="btn btn-primary" onclick="incrementarContador(<?php echo $fila['IDProducto'] ?>)">+</a>
                                                <a class="btn btn-primary" onclick="decrementarContador(<?php echo $fila['IDProducto'] ?>)">-</a>
                                            </div>
                                        </div>

                                        <!-- Campos Ocultos -->
                                        <input type="hidden" id="IDUsuario" name="IDUsuario" value="<?php echo $IDUsuario ?>">
                                        <input type="hidden" id="IDCategoria" name="IDCategoria" value="<?php echo $IDCategoria ?>">
                                        <input type="hidden" id="IDProducto" name="IDProducto" value="<?php echo $fila['IDProducto'] ?>">

                                    </div>
                                    <div class="mb-3 p-3">
                                        <label for="Comentarios" class="form-label">Comentarios</label>
                                        <textarea class="form-control" id="Comentarios" name="Comentarios" rows="3"></textarea>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Agregar Al Carrito</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            <?php
            }
            ?>
        </main>

        <script src="js/Productos.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>

</body>

</html>