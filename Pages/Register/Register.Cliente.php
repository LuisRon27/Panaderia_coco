<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="flex-column d-flex row vh-100 justify-content-center align-items-center mt-5">
        <!--   -->
            <img src="../../public/coco.png" alt="logo"
                style="width: 250px; height: 200px; position: absolute; bottom: 80%;">
            <div class="col-auto bg-light p-5 w-50 h-80 border rounded shadow">

                <form class="mt-5 d-flex flex-column justify-content-center" action="ABM/Insertar.Register.Cliente.php" method="post" onsubmit="return validatePasswords()">
                    <div class="mb-3">
                        <label for="Nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="Nombre" name="Nombre"
                            placeholder="Ingrese su Nombre" maxlength="50" required>
                    </div>
                    <div class="mb-3">
                        <label for="Apellido" class="form-label">Apellido</label>
                        <input type="text" class="form-control" id="Apellido" name="Apellido"
                            placeholder="Ingrese su Apellido" maxlength="50" required>
                    </div>
                    <div class="mb-3">
                        <label for="UserName" class="form-label">Usuario</label>
                        <input type="text" class="form-control" id="UserName" name="UserName"
                            placeholder="Ingrese su Usuario" maxlength="100" required>
                    </div>
                    <div class="mb-3">
                        <label for="Email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="Email" name="Email" placeholder="Ingrese su Email"
                            maxlength="200" required>
                    </div>
                    <div class="mb-3">
                        <label for="Telefono" class="form-label">Telefono</label>
                        <input type="tel" class="form-control" id="Telefono" name="Telefono"
                            placeholder="Ingrese su Telefono" maxlength="50" required>
                    </div>
                    <div class="mb-3">
                        <label for="Password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="Password" name="Password"
                            placeholder="Ingrese su Contraseña" maxlength="50" required>
                    </div>
                    <div class="mb-3">
                        <label for="confirmar" class="form-label">Confirme Contraseña</label>
                        <input type="password" class="form-control" id="confirmar"
                            placeholder="Confirme su contraseña" maxlength="50" required>
                    </div>

                    <button type="submit" class="btn btn-primary w-100 mx-auto">Crear cuenta</button>
                </form>
                <div class="text-center mt-2">
                    <span>Ya posee una cuenta?</span>
                    <a href="/index.php">Iniciar sesion</a>
                </div>
            </div>
        </div>
    </div>

    <script src="js/Register.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>