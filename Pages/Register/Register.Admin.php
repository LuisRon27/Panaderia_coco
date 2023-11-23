<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link rel="stylesheet" href="/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<?php require("../Login/Autenticacion.php"); ?>


<body>

    <div class="container mt-3 shadow p-5 rounded w-50">
        <h1 class="text-center">Registrar empleado</h1>
        <form action="ABM/Insertar.Register.Admin.php" method="post">
            <div class="mb-3">
                <label for="Nombre" class="form-label">Nombre</label>
                <input type="text" placeholder="Ingrese el nombre del empleado" class="form-control" id="Nombre" name="Nombre" required maxlength="100">
            </div>
            <div class="mb-3">
                <label for="Apellido" class="form-label">Apellido</label>
                <input type="text" placeholder="Ingrese el apellido del empleado" class="form-control" id="Apellido" name="Apellido" required maxlength="100">
            </div>
            <div class="mb-3">
                <label for="Telefono" class="form-label">Telefono</label>
                <input type="number" placeholder="Ingrese el Telefono del empleado" class="form-control" id="Telefono" name="Telefono" required>
            </div>
            <div class="mb-3">
                <label for="Usuario" class="form-label">Usuario</label>
                <input type="text" placeholder="Ingrese el usuario del empleado" class="form-control" id="Usuario" name="UserName" required maxlength="200">
            </div>
            <div class="mb-3">
                <label for="Email" class="form-label">Email</label>
                <input type="email" placeholder="Ingrese el email del empleado" class="form-control" id="Email" name="Email" required maxlength="200">
            </div>
            <label for="Rol" class="form-label">Rol</label>
            <select class="form-select mb-3" name="Rol" id="Rol">
                <option selected disabled>--Seleccionar Rol--</option>
                <option value="admin">Admin</option>
                <option value="empleado">Empleado</option>
                <option value="cliente">Cliente</option>
            </select>
            <div class="mb-3">
                <label for="Password" class="form-label">Password</label>
                <input type="password" placeholder="Ingrese la contraseña del empleado" class="form-control" id="Password" name="Password" required maxlength="50">
            </div>
            <div class="mb-3">
                <label for="confirmar" class="form-label">Confirme Contraseña</label>
                <input type="password" class="form-control" id="confirmar" placeholder="Confirme su contraseña" maxlength="50" required>
            </div>
            <button type="submit" class="btn btn-primary">Continuar</button>
            <a href="/" class="btn btn-danger">Cancelar</a>
        </form>
    </div>

    <script src="js/Register.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>