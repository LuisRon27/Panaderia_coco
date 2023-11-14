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

            <!-- Detalle de Pago -->
            <div class="col">


                <form action="../ABM/Insertar.PagoEfectivo.php" method="post" class="card mb-4 rounded-3 shadow-sm p-3">

                    <div class="mb-3 ms-3">
                        <label for="DireccionEntrega" class="form-label">Direccion de Entrega</label>
                        <input type="text" class="form-control" id="DireccionEntrega" name="DireccionEntrega" required>
                    </div>

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

                            <!-- Campos ocultos -->
                            <input type="hidden" name="IDUsuario" id="IDUsuario" value="<?php echo $_SESSION['IDUsuario'] ?>">

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

                    <?php
                    require("../../../Config/Conexion.php");

                    $IDUsuario = $_SESSION['IDUsuario'];
                    $sql = "SELECT 
                                P.Nombre AS Producto,
                                P.Precio,
                                C.Comentarios,
                                C.Cantidad,
                                C.IDCarrito,
                                C.IDProducto
                                FROM
                                carrito C
                                    INNER JOIN
                                usuarios U ON C.IDUsuario = U.IDUsuario
                                    INNER JOIN
                                productos P ON C.IDProducto = P.IDProducto
                                WHERE
                                C.IDUsuario = $IDUsuario";

                    $resultado = mysqli_query($conexion, $sql);

                    $dataForTextarea = array(); // Initialize array for textarea
                    $dataForTextarea2 = array();

                    while ($fila = mysqli_fetch_assoc($resultado)) {
                        // Add data for the first set
                        $dataForTextarea[] = array(
                            $fila['Producto'],
                            
                        );

                        // Add data for the second set
                        $dataForTextarea2[] = array(
                            'Producto' => $fila['Producto'],
                            'Precio' => $fila['Precio'],
                            'Comentarios' => $fila['Comentarios'],
                            'Cantidad' => $fila['Cantidad'],
                            'IDProducto' => $fila['IDProducto'],
                        );
                    }
                    ?>

                    <!-- Detalle de la compra -->
                    <?php foreach ($dataForTextarea2 as $data): ?>
                        <p>Producto: <?php echo isset($data['Producto']) ? $data['Producto'] : ''; ?></p>
                        <p>Precio: <?php echo isset($data['Precio']) ? $data['Precio'] : ''; ?></p>
                        <p>Comentarios: <?php echo isset($data['Comentarios']) ? $data['Comentarios'] : ''; ?></p>
                        <p>Cantidad: <?php echo isset($data['Cantidad']) ? $data['Cantidad'] : ''; ?></p>

                        <!-- Add hidden inputs for each product's IDProducto and Cantidad -->
                        <input type="hidden" name="IDProducto[]" value="<?php echo isset($data['IDProducto']) ? $data['IDProducto'] : ''; ?>">
                        <input type="hidden" name="Cantidad[]" value="<?php echo isset($data['Cantidad']) ? $data['Cantidad'] : ''; ?>">
                    <?php endforeach; ?>


                    <!-- Campo oculto productos -->
                    <input type="hidden" name="Pedido" id="Pedido"  value="<?php
                            // Get the JSON-encoded string
                            $jsonString = json_encode($dataForTextarea);
                            
                            // Remove double quotes, curly braces, and square brackets
                            $cleanedJson = str_replace(['"', '{', '}', '[', ']'], '', $jsonString);
                            
                            // Output the trimmed and formatted text
                            echo $cleanedJson;
                        ?>" >

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
                                <!-- Campo oculto -->
                                <input type="hidden" value="<?php echo $resultado['PrecioTotal'] ?>" name="MontoTotal" id="MontoTotal">
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