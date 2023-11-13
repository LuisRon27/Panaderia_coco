<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Coco</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <!-- Navbar -->
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <div class="col-md-3 mb-2 mb-md-0">
                <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
                    <img src="/public/coco.png" width="100" alt="">
                    <h3 class="mt-4">Panaderia coco</h3>
                </a>
            </div>

            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="#" class="nav-link px-2">Productos</a></li>
                <li><a href="#" class="nav-link px-2">Servicios</a></li>
                <li><a href="#" class="nav-link px-2">Contactos</a></li>
            </ul>

            <div class="col-md-3 text-end d-flex">
                <?php include("Pages/Login/Login.View.php"); ?>
                <a href="Pages/Register/Register.Cliente.php" class="btn btn-link text-decoration-none">Crear Cuenta</a>
            </div>
        </header>

        <main>
            <!-- Carousel -->
            <div id="carouselExampleCaptions" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner ">
                    <div class="carousel-item active">
                        <img src="/public/Img1.jpg" class="d-block w-100 darken-image" alt="home1" id="img">
                        <div class="carousel-caption ">
                            <h5>LOS MAS RICOS SABORES</h5>
                            <p>diandae, quas facere! Aliquid a dolore consequuntur, vitae, alias voluptas totam velit dolores doloremque inventore officiis nobis blanditiis, molestias assumenda cupiditate.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://img.freepik.com/fotos-premium/tienda-panaderia-vegana-ecologica-ecologica-borrosa-piso-parquet-pared-madera-ia-generativa_887552-3947.jpg" class="d-block w-100 darken-image" alt="..." id="img">
                        <div class="carousel-caption ">
                            <h5>HECHOS CON CALIDAD</h5>
                            <p>diandae, quas facere! Aliquid a dolore consequuntur, vitae, alias voluptas totam velit dolores doloremque inventore officiis nobis blanditiis, molestias assumenda cupiditate.</p>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://img.freepik.com/foto-gratis/panadero-haciendo-hogaza-pan_188544-36682.jpg?size=626&ext=jpg&ga=GA1.1.1880011253.1699747200&semt=sph" class="d-block w-100 darken-image" alt="..." id="img">
                        <div class="carousel-caption ">
                            <h5>True Construction</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus incidunt error, voluptas velit nulla esse.</p>
                            <p><a href="#" class="btn btn-warning mt-3">Learn More</a></p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>


            <!-- Hero Section -->
            <div class="container px-4 py-5" id="featured-3">
                <h2 class="pb-2 border-bottom">Nuestros productos y servicios</h2>
                <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                    <div class="feature col">
                        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                            <svg class="bi" width="1em" height="1em">
                                <use xlink:href="#collection"></use>
                            </svg>
                        </div>
                        <h3 class="fs-2 text-body-emphasis">Panificados</h3>
                        <p>Nuestro servicio de panificación se esmera en ofrecer una experiencia deliciosa y reconfortante a través de una amplia variedad de panes frescos y artesanales.</p>
                        <button class="btn btn-outline-secondary d-inline-flex align-items-center" type="button">
                            Ver Productos
                            <svg class="bi ms-1" width="20" height="20">
                                <use xlink:href="#arrow-right-short"></use>
                            </svg>
                        </button>
                    </div>
                    <div class="feature col">
                        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                            <svg class="bi" width="1em" height="1em">
                                <use xlink:href="#people-circle"></use>
                            </svg>
                        </div>
                        <h3 class="fs-2 text-body-emphasis">Pasteleria</h3>
                        <p>En nuestra pastelería, la dulzura se convierte en arte. Nuestro servicio de pastelería
                            se dedica a crear delicias irresistibles que despiertan los sentidos.
                        </p>
                        <button class="btn btn-outline-secondary d-inline-flex align-items-center" type="button">
                            Ver Productos
                            <svg class="bi ms-1" width="20" height="20">
                                <use xlink:href="#arrow-right-short"></use>
                            </svg>
                        </button>
                    </div>
                    <div class="feature col">
                        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                            <svg class="bi" width="1em" height="1em">
                                <use xlink:href="#toggles2"></use>
                            </svg>
                        </div>
                        <h3 class="fs-2 text-body-emphasis">Delivery</h3>
                        <p>Nuestro servicio de delivery lleva la frescura y el sabor directamente a tu puerta.
                            Disfruta de la comodidad de recibir nuestros productos en la puerta de tu hogar.</p>
                        <button class="btn btn-outline-secondary d-inline-flex align-items-center" type="button">
                            Ver Productos
                            <svg class="bi ms-1" width="20" height="20">
                                <use xlink:href="#arrow-right-short"></use>
                            </svg>
                        </button>
                    </div>

                </div>
            </div>


            <div class="row align-items-center g-lg-5 py-5 container">
                <div class="col-lg-7">
                    <h3 class="fs-2 fw-bold lh-1 text-body-emphasis mb-3">Medios de pago</h3>
                    <p class="col-lg-10 fs-4">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
                </div>

            </div>

        </main>

        <!-- Footer -->
        <?php include("Components/Footer/Footer.php"); ?>

        <a class="btn btn-primary" href="Pages/Categorias/Categoria.php">productos</a>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</body>

</html>