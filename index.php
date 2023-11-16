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
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-2 shadow">
            <div class="col-md-3 mb-2 mb-md-0">
                <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
                    <img src="/public/coco.png" width="100" alt="">
                    <h3 class="mt-4">Panaderia coco</h3>
                </a>
            </div>

            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="Pages/Categorias/Categoria.php" class="nav-link px-2 text-body-secondary">Productos</a>
                </li>
                <li><a href="#" class="nav-link px-2 text-body-secondary">Servicios</a></li>
                <li><a href="#" class="nav-link px-2 text-body-secondary">Contactos</a></li>
                <li><a href="#" class="nav-link px-2 text-body-secondary">Nosotros</a></li>
            </ul>

            <div class="col-md-3 text-end d-flex ms-5">
                <?php include("Pages/Login/Login.View.php"); ?>
                <a href="Pages/Register/Register.Cliente.php" class="btn btn-link text-decoration-none text-body-secondary">Crear Cuenta</a>
            </div>
        </header>

        <main>
            <!-- Carousel -->
            <div id="carouselExampleCaptions" class="carousel slide mt-2">
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
                            <p>diandae, quas facere! Aliquid a dolore consequuntur, vitae, alias voluptas totam velit
                                dolores doloremque inventore officiis nobis blanditiis, molestias assumenda cupiditate.
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://img.freepik.com/fotos-premium/tienda-panaderia-vegana-ecologica-ecologica-borrosa-piso-parquet-pared-madera-ia-generativa_887552-3947.jpg" class="d-block w-100 darken-image" alt="..." id="img">
                        <div class="carousel-caption ">
                            <h5>HECHOS CON CALIDAD</h5>
                            <p>diandae, quas facere! Aliquid a dolore consequuntur, vitae, alias voluptas totam velit
                                dolores doloremque inventore officiis nobis blanditiis, molestias assumenda cupiditate.
                            </p>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://img.freepik.com/foto-gratis/panadero-haciendo-hogaza-pan_188544-36682.jpg?size=626&ext=jpg&ga=GA1.1.1880011253.1699747200&semt=sph" class="d-block w-100 darken-image" alt="..." id="img">
                        <div class="carousel-caption ">
                            <h5>True Construction</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus incidunt error, voluptas
                                velit nulla esse.</p>
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
            <div class="container py-5" id="featured-3">
                <h2 class="pb-2 border-bottom">Nuestros productos y servicios</h2>
                <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                    <div class="feature col">
                        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                            <svg class="bi" width="1em" height="1em">
                                <use xlink:href="#collection"></use>
                            </svg>
                        </div>
                        <h3 class="fs-2 text-body-emphasis">Panificados</h3>
                        <p>Nuestro servicio de panificación se esmera en ofrecer una experiencia deliciosa y
                            reconfortante a través de una amplia variedad de panes frescos y artesanales.</p>
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

            <!--Sobre nosotros -->

            <div class="row flex-lg-row-reverse align-items-center g-5 py-5 px-5 ms-4">
                <div class="col-3 col-sm-8 col-lg-6">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSd2k_3Z9T70C5YN1sKAJfySjO8Ck8p-3iCzg&usqp=CAU" alt="">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSDPC7mXBUWV6em05MVt7Zkbc2a2F3Kxwkufg&usqp=CAU" alt="">
                </div>
                <div class="col-lg-6">
                    <h3 class="fs-2 text-body-emphasis lh-1 mb-3">Sobre Nosotros</h3>
                    <p class="fs-5">Bienvenido a Panadería Coco, el hogar del sabor auténtico y la tradición horneada.
                        Somos una franquicia apasionada por llevar a tu mesa
                        la frescura y la calidad en cada bocado. En Panadería Coco, nos enorgullece fusionar la
                        artesanía de antaño con los sabores contemporáneos para
                        ofrecerte productos de panadería excepcionales. Desde nuestro primer horno hasta tu mesa,
                        cada producto es elaborado con ingredientes selectos y un toque de dedicación que refleja
                        nuestra pasión por la excelencia.</p>

                </div>
            </div>


            <div class="px-4 py-5 my-5 text-center">
                <h3 class="fs-2 fw-bold text-body-emphasis">MEDIOS DE PAGO</h3>
                <div class="col-lg-6 mx-auto">
                    <p class="fs-4 mb-4">Ofrecemos todas las facilidades de pago para que puedas disfrutar de todos
                        nuestros servicios sin preocuparte por los metodos.</p>
                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOAAAADgCAMAAAAt85rTAAAA0lBMVEX///8Au/4LAIAAAH4AAHkAAHgAwf8Avf8Av/8LAH4LAHkLAHgAwv8LAIEAAHUKAHvh4O7W1eevrc/49/yRjr/t7PYDnOYAtvvm5fHMyuEBsvlua6sFgdADoerR0OTx8feYlsEGb8MIO54JJZEHYLcIRaYFi9mjocgzMI94dbFIRJjAv9pfW6Spp8wJLJSGhLkDleIGab4oI4ocFoYKFYkJMphjYaSFhLS5t9VOS5sITKkGeMkIV68tJ41OSpsvK4tAPJR+e7RXVJ8IWa5HQpwJPp3INwHtAAASwUlEQVR4nO1diXLiuhIdLNl4QRJL2DExgbCHsDgkATJDMi///0uvJZuwBDA2JJlbpVP17n3FjbGOuqXuVreaX78kJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkjiJTSKWqxae71pUHp5V+KlZTyexPD+xsJHt3j/322CUIYxVvQcUMkclLt+yki/9BotfJp6vyGFOVYQRQDoD/N4ZVSpavTrHw04M+Fdne/e8JxitehsGYaVqWRbcAH5gmMwzDYwo00Z9+q/jTgw9CNv1KKCgf52ZwXor7cDMbzZvNYc4u5WMJDj2WL9m5YbNZa9zeDBRmmYwZQp4gzPZV8fqnWRxC9b7LNdLjRs36YlSx7ZKeSGiarutxjhgH/DMeh080TUskYsB13rglFGgKlkwl07vkT3P5hEyvTHxypkkGjUouFgdePqUjiMeAK/xhfjifTQzLI4nRy9U/xbHYIapgxyiZ1XKlBIw4FshtG7qW0Oxh44EJkgjTtvOPcEzej7EgZ1r1Wi4PcgvHbFOcuhYvNRvEMgVH1E1nfppd5qlLGdBjFplVuOQik9sUpV17YB5H/Jr6SXrXzlhFBJadNWuWuFpeBiBIvVSrU8b1Aj/3fope4RVz3TTZQyV/CdHtkEzYo4kJHJHq/oimJjsY3m5YpGFr2oXZ+Ry1WHNmmZzipPXdFLMdvvIMs/4FwtugqGt2Q4HViPDk7jvpZe659Jj5PvxCdj7HRH4+sYCi+vJ9azE9wSA9epPTv5qegJavEEHx7XsMY6qt8o3zJpf4FnqCojZ3+Vqkr9+wFB9h8RlWPbJy+v5oSJOi5WsGrAo8/mo9rf7BRGFKJR6BHnjYmgbE8hwxLaTd1EoLoaflLxWio3LxLUpaaJsOdi1uD0eL9zohjBF3MGtUbHB9Tv+ieCI3sECI7tcFjdnfKth1dxiaXjyu6c1F3eAhkeFH8zxcdG/mdgj3To/XuBDx1RfxK4qAYRQPbdbjYM0M6ge1jPEjGT8mNkxKGrnYyd+YsB9AiGr3S2JiB4PbqQzsMGrlj2omXC4IgfB4+njlAK46S0S9AJJZg3np1B1Zj48YUdDkC1zwMqincF7ckR0LwVGHzYHTw6R/tz2swtNrG2HxnQyW9UkU44n4QvinTxeml3kG245eVD7lpjWo2fppm2A80RQWTH172qtWydYzFuEWm+UCXdq4ptkjhYklrDoX5Xf9whTEer+q5dWU1xvD+NEjCX7sAqagYQl6R1Qq60z4dzKzPi+BGTn0jTyEmg8YFx9D8E/1/oL8shO00vtM+k0ESQaEuItKSd+vWWAUYiW7Uhs9gPhwO2hj7/1WxbTRh5qdT3zSDbCfiVKuNqAiCFaV+8Id6JPauRi/a4Xz+zh/LrTaIoqH7cF4aAzFiPwhxf3h2JXZQLHEQRmip0x1tU891TAnt/NhKcGP4jwkEnquObpxTc6OINoWwWGPIgVfimHWRQrrbjkQhVZX6CoXpFWvNUuxBD8a5GeB8XyzQah3BsjtAjnRLmedtliNYB8ti7k3ixrHaDYglrU6bMPt+5W/zW3WhWSYefnET3C8myLVPwW12GBWa+YA88WNwTdNfipP+L9eQpzIp+7bvukQ5+HgCTDvSFgRJ/zLq82VXIXZUC9i8p9hf1nu/0+9xxckpt07xrbM1ektZpPyFD7HnyfmOLLp8hgkJTIaKzBYoO37T7twFWaQXiAM7mAFtQ97DoUemGwVrxMs4mi6lfqV4vze9j2SyR53RLLV9H152m1PJpPx8nnacXqpvdNUBJOvnu2YtlTQj4D81nWvNXWxqmL4H+o6RT6cFFDG0z2juuq+uO6ft1ZgzizDcfQv0hSW+Jm5tyr3X07zi3iaM7mSTWEvv8ydQn3tw7Rzfr7sCma/fdY3ZMZIoenwz2XhOdzf/bTneUJ+xhCh1llj45hiBZ9l8KcskrURG+/v3Q/7FLYF8Enbv5//CCOjds8VYsZFRD0jyO9REkkFluiz6hRdHgaATyoWTbI15sqPzvWZU7AFkshPcwVlEQKTNzAs452d8gq0E6nd6voTBywlOtujvMIkupLew8MRTGkfZtXd3twyfS4vsr2aszxCUZ/PDF7b0YTAUQBBTMI/9soNy/YJZmEMzg3tf6JyBR4lm5y3EKtgK/aa22CUYScMv4D51r1jWJ7A2UFon9PRI0iEYeegzBQaydwnQdOewz9FlV334h6WHxvvV6PkH740nSjjW6EA39CN8mAHRZkZiNTY1taYXGLusx3ySTJvZ4d2r2DLIogwG21igODW3u/gIBE90ghO+SaysCj2OIVBcLASxYRyFcVlf0Kzd2N+lIOOf88dV+EwYdUuYLNg4R8nKJqbdycMnjr5/dwm4HiCqfu8e+6gSuDPomiZj5SqYCfsQ9UoDwk8Ie5xrhxOTE5wVrgZQTiCz+tjiZAb9plXEHvEdFzmbonE2TXDeOyc9sibes45GV9OYY19O6KGeigUnddO5/7u9Ld2OMNyxNclWWh1K4R/5Ew4/JxsGXEzHaOwJjsNQq8G/9kl8QSLFrnRlsUjCxvag/GMHoVERIog4+RTxm08qWEXIY/ols7+w54vQ7YNm6ka5aCsAHt+uPMBb4un4/Ldd5L0NtOQEdp1yplOYM8PtQdn6aqoGmP3ufV9BXHlkJtp1ekqWBxahouZivCeiWmtKo0pmba+qXjTUU/2TJN3U0SZfyJL0DjMa56wYuVKlQahln92jlm78y2lRk/c1XsJ3BJ7r22GkZ/sp4arhNsU06pi2LquJfLD2o27kqSq9venMS+KKg+C0TEbdf00xarIGCjMZPXbSi5RMxUc5iVgBhU77uUdeWrunYmMCuxxaJr+ao4Fno3Eh1zYbLovnF2RTySzuUgoanOT0DDvWBP0U8ex4ahumH7F+PSLdTXTxQdy1Jn0m5e2E7nJWi7up4S1iqmcQZAnNnVNsyu3iiU40snV195T4Zspfd35MNMre7IzmOUumpsF1CDB0AQNezdbDtOVb878Ymo0/VJP7opvpltn/6nXiZdyNS13lMsntvLcWi08QfMTQbEkE/nKrdBVRP/3lRdx7oANbq820+s7L2tuWOyhZn/O4msNFpqgNTxQuKJrpblLRbHKsyfF1FX/91v5zFP4XWeix33vsbC+qQ7x6h5oXdSvfB6T9jc8QXN+sGwFdHX4Lgo66DT7q/CsipQY9g6uM6l0+in8Cm3R5Y7tS3JzgYu/npaqV0kzGdnagQok/d0IRxAMPWscq8vRE7YoYGLEEWaLe0uIdn4lO4RfFFTHjyE5FumnUEn43mgsKkwsssjFDhbRxGPECGcHIfww3o/XVgHFGa/9g9nFpHPnLPmi6a4u1YHnEzL7d6citLOoxZkpv7hgDpr5o5VVJRrSk+G+qHKUX0wUcPI6n5X7XxwjPhokTtLQnm0+iCH+HCp1gKHiNuyAWj29aSrhfNECzAjNBZbH6Tos7o8EVJYrK+33rq+vq/y4Xg0pQ0f9fEIM5sJ4CCxF1EYsbJoBJMhqwWWciVtjo8QkjZGx0rICTzrcE0pRN7jewEdL/Sx2nloJnOnEBNZKOIVxkWIMEkH84rpr4LVaXRN3vbUkxZm259udWiwPsdJuMJiFUHYUMNNxm9erh4uTeRUP22vqt1DarlT5s2nMOjwzporKPXxqDhBkuBsMviHjJmCmuaMWNtN3BXNiBuvoDsEtW99T2eS+mEqXESwQ98QQBGTIXrb+dopgEQYM4wE8KxzOLvVgERr1IH4x3T182JOlU08W2T4m7NQEGTBE482xPiM2Oz7Reo7XpI7DnR0V+Oo56K19IDFj6M+h71iLtsNOn+DWdoa4yn2q48OAQQDBT1U5AVhy/yFQN/QmXVfiFA6qYQZ8gAOngWln9xOHKmuTL0o5S0f3gnjJJErYU8Nfv+55BE8DRaiB+uOOYNY7so91EDpwVDah410rwmWIxYXBTAtMqxmwiXJHWwmffBG+jHETVHket8ELZKR8/7pUD54yCC/lwKneE0Vkd2wOT3qTcmfKgwjzIWAEJRGDhz+HFz6l1QzaSHVb4S4xQ4gcIQguwKF0eEv9fMIE1l0hIsNoWDf543MsVmBYM8/xKsJnN4CfuBfBvBs7R9JRLYza6QPtOMCr282VZ5ko+jWYVa8EXNHQh+KMOkKmqKrykmRrFOzOaPZ88XA7OFYJ8MgzuCpa7t1p+ruFGbAyiTG4qd+MhvkgJyZWFxoasaKO3wIJdrljoivF3FIOZ7BcQkSkoSr79oJnpNBthi5iDV55H/hubcTjmWi5zBYWh4/B1t6byhJT2KGkQooySiASPlDWlGmDGdnM0BeYYlZOubGl5Uwv/IxS95shnggXgUrqvWthHkwMJUVfikyviyGe2rNauLXbrLstI8UKdoRhVvNE5CUOzuxxXAkRKlblJIbxkgImcSo2kmT/f/u/EgwAmnAL99rd0tUkqPA62n2ERRnkYAvot/5FpmiZoWu/kp7lTrrfp+f4hXf05jh9hA8t+pZfndLG27WwRfpxlp36jU+KZMBCNHwFDeumreBgv2lR6aSrb5rtcq+X8drCg+cHb0iUaCYJolvO1RMP6circ/WHgvUzA+0vf998lcWMmtrLuH5bpvpxb3AFPd9Y9Wk6WFoFzjPl2pliiG6t2Cte8exdMzHJ8BR+Tebzi17K96T6SloPcCd8xLVS5bZevz2iNZmxX9JUBPu+ObIP424ai/wJGqMNTf8qCj4j3dVdLcPBaQzhvbwt1ciC7caPz5z2boTuO/5pdbuMEl41uXEHs3kpccK7tOHqtnOkqoUVkuiD4Wnr0EcdjKLrgHFKTjHdnuAPgjy2xev9vSfOmvn9+lOmMjFkq6tEkYphP9ASDhtn6IZgGC/VTV6kQQjsGNv1v5nJuuruHivqyr1LGojne07skKA1qRAgDwTPLB5YKSkwtE+z+Bx6fib6+Qg/8XHz+6qqQj+GVMYrGabBq6DBfq8/f4ma5Y9Koeden7kmK4YGxE6nX75O2LcK734Hc4w2dfR5q8ivz5237nTJ6wmsgKOX9ezFZnTFj0Uo9d1BUV19GYQWIdpP6IlSrtm0wVnc3FFB5VF3rVQFbmlFPsOgoxOXgFa6We2f4BZdoGDAWTM0b0oh2iDw7nc69zbWJenCdUDs7cn7oPiHG3Vx1/PmNHeJby+EffA7dwF66Kw2Gp4ta56+ED2WsQHEgsRJZq8L6SXvhSFSp3jZeZwSXqz9PmzMFnM7cZpy6LGGZXxMeIRrHXvR/5gyGN/fMG0Q+JBKdR7tYnfC6yMMVpmJrhbIq3mGzZlftT5R9eMJe2Cux3L2BvOB7gZDpoTsRhKPLYTUCN+nBqVEwm5MPI+OWaQRpkOgHhvRtfgudEVZILP8YEhglLMwK5E7cLmFQi2LWjdNbujiibxd+/v+MBs1SyEUPp4Y1jfEd9lWCJkuIxtCZPPTO6SIqdfidrOZi+krVYyLjpxhuibFE6XZxuq7MD+/WccaVr0ZsiMX31FDPbANLT9ibHMEF9RPH1N18/sN82H4jV25YnNjix663P6yxv0WQ7DMD8Nv6avGW8e51ta7z78auxdput1umZkPzS9qa7hFr+aaxja/T4f9F0JqstNQ2rCU07sVRYGu2X+Zuf3SI3f1zsZ1n+68TLGUv7nTQrjQAOE13y2288Kdk45LowXuB9l+I2O8lc/F+4tqut0wdnQTXo0nX9yLO9nFyi4M07qthGoCF0CO202/Q+yO+NTO199yaKl7WruD1/V+mR6/vKFQbjRgzPj8Fky+pS4+O8X7utcbJnVHw9KZXZpjpcrCbzL3SXzoss7LERRf9knR62T1DiR5/6MIgtPs5uKBfdpWfHr0m9qLeki7e6XokWTubD4U/SeDw6C46Fmp50vN+Q1h1l7RcXrBrb0ujEyLYLJ/MIpoKm66s8Y8t+51r2+cmMXXve7zJXtYW7zzXvcHuHF6avtLXJcAig45JEVflEDTMOqD28W80mwO7VIpL3zuvP9jBZXR4mYwIcwyD8ltRe/PD9ATSC/3r8Vtol5Dq50fnBA/N7FuxnkYDL/9WCdxQLGvHhVjRKyUn1cq/nRL/2vnj9d57OJAmHWjXz2/JKqvBj38wy5R2f07v8fAUXxV8MV0lV/LHP9L7DyknGeknq+siKlGP/3PsfNw3Xt8oSqLqK78comKu071x39F4ygyxVa/jVQciiZvYKiSZTn9oz+fEQKFauvxjVBV8Dz4y1KI8KbNqkrZePqY/g/+Ulgm1UtfTbsvE0O0z1Q/fh2M/1+EiDtu/+600r3/zG9mHcR1IZmqVou9Xlqg16tWU6lk9t9eaxISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEhISEv8C/g8OwYrb6mjwEgAAAABJRU5ErkJggg==" alt="">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSd2k_3Z9T70C5YN1sKAJfySjO8Ck8p-3iCzg&usqp=CAU" alt="">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSDPC7mXBUWV6em05MVt7Zkbc2a2F3Kxwkufg&usqp=CAU" alt="">
                    </div>
                </div>
            </div>

        </main>

        <!-- Footer -->
        <?php include("Components/Footer/Footer.php"); ?>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>

</body>

</html>