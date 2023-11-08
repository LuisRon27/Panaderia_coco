<?php
require("../../../Config/Conexion.php");

// Variables
$Nombre = isset($_POST['Nombre']) ? $_POST['Nombre'] : null;
$Apellido = isset($_POST['Apellido']) ? $_POST['Apellido'] : null;
$Telefono = isset($_POST['Telefono']) ? $_POST['Telefono'] : null;
$Email = isset($_POST['Email']) ? $_POST['Email'] : null;
$Password = isset($_POST['Password']) ? $_POST['Password'] : null;
$Direccion = isset($_POST['Direccion']) ? $_POST['Direccion'] : null;

$Rol = isset($_POST['Rol']) ? $_POST['Rol'] : null;
$Activo = 1;


$sql = "INSERT INTO Usuarios (Nombre, Apellido, Telefono, Email, Password, Direccion, Rol, Activo) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conexion->prepare($sql);

if ($stmt) {
    $stmt->bind_param("sssssssi", $Nombre, $Apellido, $Telefono, $Email, $Password, $Direccion, $Rol, $Activo);

    if ($stmt->execute()) {
        header("Location: ../../../index.php");
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