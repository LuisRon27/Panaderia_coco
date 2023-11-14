<?php
require("../../../Config/Conexion.php");

if (isset($_GET['IDPedido'])) {
    $pedidoId = $_GET['IDPedido'];

    $sql = "UPDATE pedidos
    SET EstadoPedido = 'Entregado'
    WHERE IDPedido = $pedidoId";
    $resultado = mysqli_query($conexion, $sql);

    if ($resultado) {
        header("Location: ../Empleado.php");
    } else {
        echo "Error al Cambiar el Estado del pedido" . mysqli_error($conexion);
    }
} else {
    echo "IDPedido no proporcionado.";
}
?>