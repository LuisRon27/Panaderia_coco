<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php require("../Login/Autenticacion.php"); ?>

<body>
    <h1>clientes</h1>
    <p>Nombre: <?php echo $_SESSION['Nombre']; ?></p>
    <p>Apellido: <?php echo $_SESSION['Apellido']; ?></p>
    <p>Email: <?php echo $_SESSION['Email']; ?></p>

    <a href="../Login/Logout.php">Logout</a>
</body>
</html>