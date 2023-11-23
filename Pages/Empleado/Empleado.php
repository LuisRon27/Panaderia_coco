<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Empleado</title>
    <link rel="stylesheet" href="/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<?php require("../Login/Autenticacion.php"); ?>

<body>
    <div class="container-fluid">
        <header
            class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 shadow">

            <div class="col-md-3 mb-2 mb-md-0 d-flex mx-5">
                <span class="fw-bold">Cadete: <?php echo $_SESSION['Nombre']; ?>
                    <?php echo $_SESSION['Apellido']; ?></span>
            </div>

            <div class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <h2>Panel de pedidos y entrega</h2>
            </div>

            <div class="col-md-3 text-end me-3">
                <a href="../Login/Logout.php" class="btn btn-outline-danger w-25">Salir</a>
            </div>
        </header>

        <!--Title-->
        <div class="container mt-3">
            <h1 class="text-center">Lista de Pedidos</h1>
        </div>

        <!--Table-->
        <div class="container">
            <!-- Campo de búsqueda -->
            <div class="mb-3">
                <input type="text" id="searchInput" class="form-control" placeholder="Buscar Pedido">
            </div>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead class="table-dark text-center table-header">
                        <tr>
                            <th scope="col">IDPedido</th>
                            <th scope="col">Cliente</th>
                            <th scope="col">Pedido</th>
                            <th scope="col">FechaPedido</th>
                            <th scope="col">DireccionEntrega</th>
                            <th scope="col">MetodoPago</th>
                            <th scope="col">Estado</th>
                            <th scope="col">MontoTotal</th>
                            <th scope="col">Cambiar Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require("../../Config/Conexion.php");

                        $sql = $conexion->query("SELECT P.IDPedido, CONCAT(U.Nombre, ' ', U.Apellido) AS NombreCompleto, P.Pedido, P.FechaPedido, P.DireccionEntrega, P.MetodoPago, P.EstadoPedido, P.MontoTotal 
                    FROM pedidos P
                    INNER JOIN usuarios U ON P.IDUsuario = U.IDUsuario
                    WHERE EstadoPedido = 'Pendiente';");

                        while ($resultado = $sql->fetch_assoc()) {
                        ?>
                        <tr>
                            <th scope="row">
                                <?php echo $resultado['IDPedido'] ?>
                            </th>
                            <td scope="row">
                                <?php echo $resultado['NombreCompleto'] ?>
                            </td>
                            <td scope="row">
                                <?php echo $resultado['Pedido'] ?>
                            </td>
                            <td scope="row">
                                <?php echo date('d/m/Y', strtotime($resultado['FechaPedido'])); ?>
                            </td>
                            <td scope="row">
                                <?php echo $resultado['DireccionEntrega'] ?>
                            </td>
                            <td scope="row">
                                <?php echo $resultado['MetodoPago'] ?>
                            </td>
                            <td scope="row">
                                <?php echo $resultado['EstadoPedido'] ?>
                            </td>
                            <td scope="row">
                                <?php echo $resultado['MontoTotal'] ?>
                            </td>
                            <td scope="row" class="d-flex justify-content-center"
                                style="gap: 1rem; padding: 1.5rem 0.5rem;">
                                <a href="ABM/Entregado.Pedido.php?IDPedido=<?php echo $resultado['IDPedido']; ?>"
                                    class="btn btn-success me-2">Entregado</a>
                                <a href="ABM/Cancelado.Pedido.php?IDPedido=<?php echo $resultado['IDPedido']; ?>"
                                    onclick="return confirm('¿Seguro que desea cancelar este Pedido?');"
                                    class="btn btn-danger">Cancelar</a>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
                <div id="noRecordsMessage" class="alert alert-warning text-center" style="display: none;">No hay
                    registros
                </div>
            </div>
        </div>
    </div>

    <script src="js/Empleado.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>