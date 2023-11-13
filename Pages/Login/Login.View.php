<!-- Login -->
<section>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-link text-decoration-none" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Iniciar Sesión
    </button>

    <!-- Modal Login-->
    <div class="modal fade 100vh" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content p-5 mn-100">
                <div class="modal-header p-5 pb-4 border-bottom-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body d-flex flex-column justify-content-center align-items-center rounded border shadow mt-5">
                    <img src="public/coco.png" alt="logo" style="width: 250px; height: 200px; position: absolute; bottom: 73%; ">
                    <form class="mt-5 d-flex flex-column align-items-center w-100" action="Pages/Login/Login.Validate.php" method="post">
                        <div class="mb-3 w-50">
                            <label for="UserName" class="form-label">Usuario</label>
                            <input type="text" class="form-control" id="UserName" name="UserName" placeholder="Ingrese su Usuario" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3 w-50">
                            <label for="Password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" name="Password" id="Password" placeholder="Ingrese su Contraseña">
                        </div>

                        <button type="submit" class="btn btn-primary w-50 mx-auto">Ingresar</button>
                    </form>

                    <div class="text-center mt-2">
                        <span>No tienes cuenta?</span>
                        <a href="Pages/Register/Register.Cliente.php">Crea una aquí</a>
                    </div>

                </div>
            </div>
        </div>
    </div>


</section>