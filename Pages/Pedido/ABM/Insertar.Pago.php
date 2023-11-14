<?php
require("../../../Config/Conexion.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $IDUsuario = isset($_POST['IDUsuario']) ? intval($_POST['IDUsuario']) : null;
    $Pedido = isset($_POST['Pedido']) ? $_POST['Pedido'] : null;
    $DireccionEntrega = isset($_POST['DireccionEntrega']) ? $_POST['DireccionEntrega'] : null;
    $MetodoPago = 'MercadoPago';
    $EstadoPedido = 'Pendiente';
    $MontoTotal = isset($_POST['MontoTotal']) ? intval($_POST['MontoTotal']) : null;


    // Query SQL para insertar en la tabla Pedidos
    $stmtInsertPedido = $conexion->prepare("INSERT INTO Pedidos (IDUsuario, Pedido, DireccionEntrega, MetodoPago, EstadoPedido, MontoTotal) VALUES (?, ?, ?, ?, ?, ?)");
    $stmtInsertPedido->bind_param("issssi", $IDUsuario, $Pedido, $DireccionEntrega, $MetodoPago, $EstadoPedido, $MontoTotal);
    $stmtInsertPedido->execute();
    $stmtInsertPedido->close();

    // Update the stock in the productos table for each product
    if (isset($_POST['IDProducto'], $_POST['Cantidad'])) {
        $IDProductos = $_POST['IDProducto'];
        $cantidades = $_POST['Cantidad'];

        // Loop through each product and update the stock
        for ($i = 0; $i < count($IDProductos); $i++) {
            $productoID = intval($IDProductos[$i]);
            $cantidad = intval($cantidades[$i]);

            // Perform the update query for each product
            $stmtUpdateStock = $conexion->prepare("UPDATE productos SET Stock = Stock - ? WHERE IDProducto = ?");
            $stmtUpdateStock->bind_param("ii", $cantidad, $productoID);
            $stmtUpdateStock->execute();
            $stmtUpdateStock->close();
        }
    } else {
        // Handle the case where some POST parameters are missing
        echo "Missing required POST parameters for updating stock.";
    }


    // Delete products from the carrito table
    $stmtDeleteCarrito = $conexion->prepare("DELETE FROM carrito WHERE IDUsuario = ?");
    $stmtDeleteCarrito->bind_param("i", $IDUsuario);
    $stmtDeleteCarrito->execute();
    $stmtDeleteCarrito->close();

    header("Location: ../Pago.Realizado.php");
    exit();
} else {
    // Handle the case where the form is not submitted using POST method
    echo "Invalid request method.";
}
?>
