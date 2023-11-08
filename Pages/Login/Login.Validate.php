<?php
// Incluye el archivo de conexión a la base de datos MySQL
include("../../Config/Conexion.php");

// Inicia la sesión
session_start();

$email = isset($_POST["email"]) ? $_POST["email"] : "";
$password = isset($_POST["password"]) ? $_POST["password"] : "";

// Validar y escapar las entradas del email
$email = mysqli_real_escape_string($conexion, $email);

// Consulta SQL para verificar el usuario
$sql = "SELECT * FROM Usuarios WHERE Email = '$email' AND activo = 1 AND rol IN ('admin', 'empleado', 'cliente');";
$resultado = mysqli_query($conexion, $sql);


// Verifica si la consulta devolvió algún resultado
if (mysqli_num_rows($resultado) > 0) {
     // Obtiene los datos del usuario
    $usuario = mysqli_fetch_assoc($resultado);
    
    // Guarda el nombre, apellido y correo electrónico del usuario en variables de sesión
    $_SESSION['Nombre'] = $usuario['Nombre'];
    $_SESSION['Apellido'] = $usuario['Apellido'];
    $_SESSION['Email'] = $usuario['Email'];
    
    $_SESSION['logged_in'] = true;
    $rol = $usuario['Rol'];

   // Redirige al usuario a la página correspondiente según su rol
    switch ($rol) {
        case 'admin':
            header('Location: ../Admin/Admin.php');
            break;
        case 'empleado':
            header('Location: ../Empleado/Empleado.php');
            break;
        case 'cliente':
            header('Location: ../Cliente/Cliente.php');
            break;
        default:
            echo "Rol desconocido";
            break;
    }
    } else {
    // Si no se encontró ningún usuario, muestra un mensaje de error
    echo "Email o contraseña incorrectos";
    header('Location: ../../index.php');
    }
?>
