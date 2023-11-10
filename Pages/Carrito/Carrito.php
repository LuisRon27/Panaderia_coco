<?php require("../Login/Autenticacion.php"); ?>

<!-- Carrito De Compras-->
<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Carrito</button>

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    
    <!-- Section Header -->
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasRightLabel">Carrito De Compra</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <!-- Section Credenciales -->
    <div class="">
        <p>ID: <?php echo $_SESSION['IDUsuario']; ?></p>
        <p>Nombre: <?php echo $_SESSION['Nombre'] . ' ' . $_SESSION['Apellido']; ?></p>
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
            <div class="">
                <img class="card-img-top" src="<?php echo $fila['ImagenURL'] ?>" alt="<?php echo $fila['Producto'] ?>">
                <p>Producto: <?php echo $fila['Producto'] ?></p>
                <p>$ <?php echo $fila['Precio'] ?></p>
                <p>Cantidad: <?php echo $fila['Cantidad'] ?></p>
            </div>
            <!-- TODO: -->
            <form action="../Carrito/ABM/Eliminar.Carrito.php?IDCarrito=<?php echo $fila['IDCarrito'] ?>" method="post">
                
                <input type="hidden" id="IDCarrito" name="IDCarrito" value="<?php echo $fila['IDCarrito'] ?>">
                <button type="submit" class="btn btn-danger" ><i class="bi bi-trash-fill"></i></button>
            </form>
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
            <h5>Precio Total: $ <?php echo $resultado['PrecioTotal'] ?></h5>
        <?php
            }
        ?>
        <a href="../Pedido/MetodoPago.php" class="btn btn-success">Pagar</a>
    </div>

</div>


