<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mercado Pago</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<?php require("../../Login/Autenticacion.php"); ?>

<body>

    <div class="container py-3">
        <div class="row row-cols-1 row-cols-md-2 mb-3">

            <!-- Tarjeta de débito o crédito -->
            <div class="col">
                <form class="card mb-4 rounded-3 shadow-sm p-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                            checked>
                        <label class="form-check-label" for="flexRadioDefault2">Tarjeta de débito o crédito</label>
                    </div>
                    <hr>
                    <div class="mb-3">
                        <label for="NumeroTarjeta" class="form-label">Número de la Tarjeta</label>
                        <input type="number" class="form-control" id="NumeroTarjeta" name="NumeroTarjeta"
                            placeholder="1234 1234 1234 1234" required>
                    </div>
                    <div class="mb-3">
                        <label for="Nombre" class="form-label">Nombre completo como aparece en la tarjeta:</label>
                        <input type="text" class="form-control" id="Nombre" name="Nombre"
                            placeholder="Nombre en la tarjeta" required>
                    </div>
                    <div class="mb-3 d-flex">
                        <div class="mb-3">
                            <label for="Expiracion" class="form-label">Expiración:</label>
                            <input type="text" class="form-control" id="Expiracion" name="Expiracion"
                                placeholder="MM/AA" required>
                        </div>
                        <div class="mb-3 ms-3">
                            <label for="CVC" class="form-label">CVC</label>
                            <input type="text" class="form-control" id="CVC" name="CVC" placeholder="CVC" required>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Detalle de Pago -->
            <div class="col">
                <form action="crud/Insertar.Pago.php" method="post" class="card mb-4 rounded-3 shadow-sm p-3">

                    <h4 class="card-title text-center my-2">Detalle de Pago</h4>

                    <hr>

                    <!-- Datos del Cliente -->
                    <div class="">
                        <h5 class="" >Datos del Cliente</h5>
                        <?php
                        require("../../../Config/Conexion.php");

                        $IDUsuario = $_SESSION['IDUsuario'];
                        $sql = $conexion->query("SELECT Nombre, Apellido, Telefono, Email FROM Usuarios WHERE IDUsuario = $IDUsuario;");

                        while ($resultado = $sql->fetch_assoc()) {
                            ?>
                            <p>#:
                                <?php echo $_SESSION['IDUsuario'] ?>
                            </p>
                            <p>Fecha:
                                <?php echo date('Y-m-d') ?>
                            </p>
                            <p>Nombre:
                                <?php echo $resultado['Nombre'] ?>
                            </p>
                            <p>Apellido:
                                <?php echo $resultado['Apellido'] ?>
                            </p>
                            <p>Telefono:
                                <?php echo $resultado['Telefono'] ?>
                            </p>
                            <p>Email:
                                <?php echo $resultado['Email'] ?>
                            </p>


                            <?php
                        }
                        ?>
                    </div>

                    <!-- Detalle de la compra -->
                    <div class="">
                        <h5 class="text-center" >Detalle de compra</h5>
                        <?php
                        require("../../../Config/Conexion.php");

                        $IDUsuario = $_SESSION['IDUsuario'];
                        $sql = "SELECT 
                                P.Nombre AS Producto,
                                P.Precio,
                                C.Comentarios,
                                C.Cantidad,
                                C.IDCarrito
                                FROM
                                carrito C
                                    INNER JOIN
                                usuarios U ON C.IDUsuario = U.IDUsuario
                                    INNER JOIN
                                productos P ON C.IDProducto = P.IDProducto
                                WHERE
                                C.IDUsuario = $IDUsuario";

                        $resultado = mysqli_query($conexion, $sql);

                        while ($fila = mysqli_fetch_assoc($resultado)) {
                            ?>
                            <p>Producto:
                                <?php echo $fila['Producto'] ?>
                            </p>
                            <p>Precio:
                                <?php echo $fila['Precio'] ?>
                            </p>
                            <p>Comentarios:
                                <?php echo $fila['Comentarios'] ?>
                            </p>
                            <p>Cantidad:
                                <?php echo $fila['Cantidad'] ?>
                            </p>
                            <?php
                        }
                        ?>

                    </div>

                    <!-- Section Precio Total -->
                    <div class="d-flex  justify-content-between align-items-center p-2">
                        <?php
                            require("../../../Config/Conexion.php");


                            $IDUsuario = $_SESSION['IDUsuario'];

                            $sql = $conexion->query("SELECT SUM(P.Precio * C.Cantidad) AS PrecioTotal
                                    FROM carrito C
                                    INNER JOIN usuarios U ON C.IDUsuario  =  U.IDUsuario
                                    INNER JOIN productos P ON C.IDProducto = P.IDProducto
                                    WHERE C.IDUsuario = $IDUsuario;");

                            while ($resultado = $sql->fetch_assoc()) {
                                ?>
                                <h5>Precio Total: $
                                    <?php echo $resultado['PrecioTotal'] ?>
                                </h5>
                                <?php
                            }
                        ?>
                    </div>

                    <div class="text-center mb-3">
                        <button type="submit" class="btn btn-primary"
                            onclick="return confirm('¿Confirma la compra?');">Pagar</button>
                        <a href="../../../index.php" onclick="return confirm('¿Seguro que desea cancelar el Pago?');"
                            class="btn btn-danger">Cancelar</a>
                    </div>
                </form>
            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>