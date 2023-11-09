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
            <img src="/public/coco.png" alt="logo" style="width: 250px; height: 200px; position: absolute; bottom: 65%;">
            <div class="col-auto bg-light p-5 w-50 h-80 border rounded shadow">
               
                <form class="mt-5 d-flex flex-column justify-content-center">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Usuario</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ingrese su Usuario" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Ingrese su email" aria-describedby="emailHelp">
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="exampleInputEmail1" placeholder="Ingrese su Contraseña" aria-describedby="emailHelp">
                      </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Confirme Contraseña</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirme su contraseña">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>