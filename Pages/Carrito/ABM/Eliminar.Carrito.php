<?php
require("../../../Config/Conexion.php");

if (isset($_GET['IDCarrito'])) {
    $carritoId = $_GET['IDCarrito'];
    //$IDCategoria = $_POST['IDCategoria'];
    //echo $IDCategoria; die();

    // Realiza la eliminación 
    $sql = "DELETE FROM carrito WHERE IDCarrito = $carritoId";
    //echo $sql;
    //die();
    $resultado = mysqli_query($conexion, $sql);

    if ($resultado) {
        //TODO : direccion url Productos.php?IDCategoria=1
        header("Location: ../../Categorias/Categoria.php");
    } else {
        echo "Error al eliminar el producto del carrito: " . mysqli_error($conexion);
    }
} else {
    echo "IDCarrito no proporcionado.";
}
