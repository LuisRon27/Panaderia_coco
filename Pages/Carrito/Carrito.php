<?php require("../Login/Autenticacion.php"); ?>

<!-- Carrito De Compras-->
<div class="d-flex justify-content-end">
    <button class="btn btn-outline-secondary w-25" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
        <i class="bi bi-cart-fill fs-5"></i>
    </button>
</div>
<div class="offcanvas offcanvas-end w-25" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">

    <!-- Section Header -->
    <div class="offcanvas-header">

        <button type="button" class="btn-close justify-content-end" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <h5 class="offcanvas-title text-center fw-bold" id="offcanvasRightLabel">Carrito de Compras</h5>

    <!-- Section Credenciales -->
    <div class="container mt-2 border-bottom">
        <p class="fw-bold">ID: <?php echo $_SESSION['IDUsuario']; ?></p>
        <p class="fw-bold">Nombre: <?php echo $_SESSION['Nombre'] . ' ' . $_SESSION['Apellido']; ?></p>
    </div>

    <!-- Section Productos -->
    <div class="offcanvas-body">

        <!-- aqui parezca el producto que selecciono -->
        <?php
        require("../../Config/Conexion.php");


        $IDUsuario = $_SESSION['IDUsuario'];

        $sql = "SELECT  CONCAT(U.Nombre, ' ', U.Apellido) AS Cliente, P.Nombre AS Producto, P.Precio, P.ImagenURL, C.Cantidad, C.IDCarrito
            FROM carrito C
            INNER JOIN usuarios U ON C.IDUsuario  =  U.IDUsuario
            INNER JOIN productos P ON C.IDProducto = P.IDProducto
            WHERE C.IDUsuario = $IDUsuario";

        $resultado = mysqli_query($conexion, $sql);

        while ($fila = mysqli_fetch_assoc($resultado)) {
        ?>
            <div class="d-flex justify-content-around">
                <div class="mb-3">
                    <img class="" width="150" height="150" src="<?php echo $fila['ImagenURL'] ?>" alt="<?php echo $fila['Producto'] ?>">
                </div>
                <div class="mb-3 py-2 d-flex flex-column">
                    <span class="fw-bold">Producto: <?php echo $fila['Producto'] ?></span>
                    <span class="fw-bold">$ARS: <?php echo $fila['Precio'] ?></span>
                    <span class="fw-bold">Cantidad: <?php echo $fila['Cantidad'] ?></span>

                    <form action="../Carrito/ABM/Eliminar.Carrito.php?IDCarrito=<?php echo $fila['IDCarrito'] ?>" method="post">

                        <input type="hidden" id="IDCarrito" name="IDCarrito" value="<?php echo $fila['IDCarrito'] ?>">
                        <button type="submit" class="btn btn-danger mt-3"><i class="bi bi-trash-fill"></i></button>
                    </form>
                </div>
            </div>
            <!-- TODO: -->

        <?php
        }
        ?>

    </div>

    <!-- Section Precio Total -->
    <div class="d-flex  justify-content-between align-items-center p-2">
        <?php
        require("../../Config/Conexion.php");


        $IDUsuario = $_SESSION['IDUsuario'];

        $sql = $conexion->query("SELECT SUM(P.Precio * C.Cantidad) AS PrecioTotal
            FROM carrito C
            INNER JOIN usuarios U ON C.IDUsuario  =  U.IDUsuario
            INNER JOIN productos P ON C.IDProducto = P.IDProducto
            WHERE C.IDUsuario = $IDUsuario;");

        while ($resultado = $sql->fetch_assoc()) {
        ?>
            <h5 class="ms-5 fw-bold">Precio Total: $ARS <?php echo $resultado['PrecioTotal'] ?></h5>
        <?php
        }
        ?>

    </div>
    <a href="../Pedido/MetodoPago.php" class="btn btn-success my-5">Pagar</a>

</div>