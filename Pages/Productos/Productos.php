<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<?php require("../Login/Autenticacion.php"); ?>

<body>

    <!-- carrito -->
    <?php include("../Carrito/Carrito.php"); ?>

    <?php
        require("../../Config/Conexion.php");

        $IDUsuario = $_SESSION['IDUsuario'];
        $IDCategoria = $_GET['IDCategoria'];

        $sql = "SELECT * FROM productos WHERE IDCategoria = $IDCategoria;";

        $resultado = mysqli_query($conexion, $sql); 

        while ($fila = mysqli_fetch_assoc($resultado)) { 
    ?>

    <!-- Card Producto -->
    <div class="card" style="width: 18rem;">
        <img src="<?php echo $fila['ImagenURL'] ?>" class="card-img-top" alt="<?php echo $fila['Nombre'] ?>">
        <div class="card-body">
            <h5 class="card-title">
                <?php echo $fila['Nombre'] ?>
            </h5>
            <p class="card-text">
                <?php echo $fila['Descripcion'] ?>
            </p>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                data-bs-target="#exampleModal<?php echo $fila['IDProducto'] ?>">
                Comprar
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal<?php echo $fila['IDProducto'] ?>" tabindex="-1"
                aria-labelledby="exampleModalLabel<?php echo $fila['IDProducto'] ?>" aria-hidden="true">
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
                                <img src="<?php echo $fila['ImagenURL'] ?>" class="card-img-top"
                                    alt="<?php echo $fila['Nombre'] ?>">
                                <h4>
                                    $ <?php echo $fila['Precio'] ?>
                                </h4>
                                <p>
                                    <?php echo $fila['Descripcion'] ?> 
                                </p>
                                
                                <!-- Contador (Cantidad) -->
                                <div class="container">
                                    <h4>Cantidad</h4>
                                    <div class="contador">
                                        <input type="text" id="Cantidad" name="Cantidad" class="numero" value="0">
                                    </div>
                                    <button class="btn btn-primary" onclick="incrementarContador()">+</button>
                                    <button class="btn btn-primary" onclick="decrementarContador()">-</button>
                                </div>

                                <!-- Campos Ocultos -->
                                <input type="hidden" id="IDUsuario" name="IDUsuario" value="<?php echo $IDUsuario ?>">
                                <input type="hidden" id="IDCategoria" name="IDCategoria" value="<?php echo $IDCategoria ?>">
                                <input type="hidden" id="IDProducto" name="IDProducto" value="<?php echo $fila['IDProducto'] ?>">
                
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
    </div>

    <?php
        }
    ?>

    <script src="js/Productos.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

</body>

</html>