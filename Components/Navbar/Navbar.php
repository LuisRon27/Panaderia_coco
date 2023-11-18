<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between shadow">
    <div class="col-md-3 mb-2 mb-md-0">
        <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
            <img src="/public/coco.png" width="100" alt="">
            <h3 class="mt-4">Panaderia coco</h3>
        </a>
    </div>

    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="#" class="nav-link px-2 text-body-secondary fs-5">Productos</a></li>
        <li><a href="/" class="nav-link px-2 text-body-secondary fs-5"">Servicios</a></li>
            <li><a href=" /" class="nav-link px-2 text-body-secondary fs-5">Medios de pago</a></li>
        <li><a href="/" class="nav-link px-2 text-body-secondary fs-5">Nosotros</a></li>
    </ul>

    <div class="col-md-3 text-end d-flex">
        <p class="mt-2 fs-5">Bienvenido, <?php echo $_SESSION['Nombre']; ?> <?php echo $_SESSION['Apellido']; ?>
        </p>
    </div>
</header>