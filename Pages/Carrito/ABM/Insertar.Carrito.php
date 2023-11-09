<?php
require("../../../Config/Conexion.php");

// Variables
$IDCategoria = isset($_POST['IDCategoria']) ? intval($_POST['IDCategoria']) : null;
$IDUsuario = isset($_POST['IDUsuario']) ? intval($_POST['IDUsuario']) : null;
$IDProducto = isset($_POST['IDProducto']) ? intval($_POST['IDProducto']) : null;
$Cantidad = isset($_POST['Cantidad']) ? intval($_POST['Cantidad']) : null;

$sql = "INSERT INTO carrito (IDUsuario, IDProducto, Cantidad) 
        VALUES (?, ?, ?)";

$stmt = $conexion->prepare($sql);

if ($stmt) {
    $stmt->bind_param("iii", $IDUsuario, $IDProducto, $Cantidad);

    if ($stmt->execute()) {
        header("Location: ../../Productos/Productos.php?IDCategoria=$IDCategoria");
        exit;
    } else {
        echo "Error al guardar los datos en la base de datos.";
    }

    $stmt->close();
} else {
    echo "Error al preparar la consulta.";
}

$conexion->close();
?>
