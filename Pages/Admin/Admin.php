<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link rel="stylesheet" href="/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<?php require("../Login/Autenticacion.php"); ?>

<body>
    <h3 class="text-center mt-2">Panel de administracion</h3>
    <div class="d-flex justify-content-around py-2">
        <div class="fw-bold">
            <span>Administrador: <?php echo $_SESSION['Nombre']; ?> <?php echo $_SESSION['Apellido']; ?></span>
        </div>
        <div class="d-flex">
            <a class="btn btn-outline-danger  mx-2" href="../Login/Logout.php">Logout</a>
            <a class="btn btn-outline-primary " href="../Register/Register.Admin.php">Registrar Empleado</a>
        </div>
    </div>



    <!-- Resumen -->
    <div class="container px-4 py-5 border shadow" id="icon-grid">
        <h2 class="pb-2 border-bottom">Resumen -
            <?php echo date('d/m/Y'); ?>
        </h2>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5">

            <?php
            require("../../Config/Conexion.php");

            // 1. Usuarios Activos
            $queryUsuarios = $conexion->query("SELECT COUNT(*) AS CantidadUsuariosActivos FROM Usuarios WHERE Activo = 1");
            if ($rowUsuarios = $queryUsuarios->fetch_assoc()) {
            ?>
                <div class="col d-flex align-items-start">
                    <i class="bi bi-people-fill text-body-secondary flex-shrink-0 me-3" style="font-size: 2rem;"></i>
                    <div>
                        <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Usuarios Activos</h3>
                        <p>Total:
                            <?php echo $rowUsuarios['CantidadUsuariosActivos']; ?>
                        </p>
                    </div>
                </div>
            <?php
            } else {
                echo "Error en la consulta de Usuarios: " . $conexion->error;
            }

            // 2. Productos Activos por Categoría
            $queryProductos = $conexion->query("SELECT Categorias.Descripcion, COUNT(Productos.IDProducto) AS CantidadProductosActivos
                                                FROM Categorias
                                                LEFT JOIN Productos ON Categorias.IDCategoria = Productos.IDCategoria
                                                WHERE Productos.Activo = 1
                                                GROUP BY Categorias.Descripcion;");

            if ($queryProductos) {
            ?>
                <div class="col d-flex align-items-start">
                    <i class="bi bi-tags text-body-secondary flex-shrink-0 me-3" style="font-size: 2rem;"></i>
                    <div>
                        <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Productos activos por categoría</h3>
                        <?php
                        while ($rowProductos = $queryProductos->fetch_assoc()) {
                            echo "<p>" . $rowProductos['Descripcion'] . ": " . $rowProductos['CantidadProductosActivos'] . "</p>";
                        }
                        ?>
                    </div>
                </div>
                <?php
            } else {
                echo "Error en la consulta de Productos: " . $conexion->error;
            }

            // 3. MontoTotal por Estado de Pedido
            $queryPedidos = $conexion->query("SELECT EstadoPedido, SUM(MontoTotal) AS SumaMontoTotal FROM Pedidos GROUP BY EstadoPedido;");
            if ($queryPedidos) {
                while ($rowPedidos = $queryPedidos->fetch_assoc()) {
                ?>
                    <div class="col d-flex align-items-start">
                        <i class="bi bi-cash-stack text-body-secondary flex-shrink-0 me-3" style="font-size: 2rem;"></i>
                        <div>
                            <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">MontoTotal por Estado de Pedido</h3>
                            <p>Estado: <?php echo $rowPedidos['EstadoPedido']; ?></p>
                            <p>Monto Total: $ <?php echo $rowPedidos['SumaMontoTotal']; ?></p>
                        </div>
                    </div>
                <?php
                }
            } else {
                echo "Error en la consulta de Pedidos: " . $conexion->error;
            }

            // 4. Cantidad de Productos Próximos a Vencer
            $queryProximosAVencer = $conexion->query("SELECT COUNT(*) AS CantidadProductosProximosAVencer FROM Inventario WHERE FechaVencimiento <= CURDATE() + INTERVAL 30 DAY;");
            if ($rowProximosAVencer = $queryProximosAVencer->fetch_assoc()) {
                ?>
                <div class="col d-flex align-items-start">
                    <i class="bi bi-clock text-body-secondary flex-shrink-0 me-3" style="font-size: 2rem;"></i>
                    <div>
                        <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Cantidad de Productos Próximos a Vencer</h3>
                        <p>Cantidad de productos próximos a vencer en los próximos 30 días:
                            <?php echo $rowProximosAVencer['CantidadProductosProximosAVencer']; ?>
                        </p>
                    </div>
                </div>
            <?php
            } else {
                echo "Error en la consulta de Productos Próximos a Vencer: " . $conexion->error;
            }

            // 5. Suma Total del Stock de Productos
            $querySumaStock = $conexion->query("SELECT SUM(Stock) AS SumaTotalStock FROM Productos;");
            if ($rowSumaStock = $querySumaStock->fetch_assoc()) {
            ?>
                <div class="col d-flex align-items-start">
                    <i class="bi bi-box text-body-secondary flex-shrink-0 me-3" style="font-size: 2rem;"></i>
                    <div>
                        <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Suma Total del Stock de Productos</h3>
                        <p>Suma total del stock de productos:
                            <?php echo $rowSumaStock['SumaTotalStock']; ?>
                        </p>
                    </div>
                </div>
            <?php
            } else {
                echo "Error en la consulta de Suma Total del Stock: " . $conexion->error;
            }

            $conexion->close();
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>