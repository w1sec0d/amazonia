<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap y JQuery -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <!-- Sweet Alert 2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <!-- Carga favicon o ícono de la página -->
    <link rel="shortcut icon" href="./assets/img/logo.ico" type="image/x-icon">
    <!-- CSS personalizado -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Amazonia Viviente</title>
</head>

<body>
    <div class="container-fluid margin-0 padding-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="./assets/img/logo.png" width="30" height="30" class="d-inline-block align-top" id="navbar-logo">
                Amazonía Viviente
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sección 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Seccion 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sobre nosotros</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="row w-100 h-100 justify-content-center align-items-center margin-0 padding-0">
            <div class="row">
                <div id="carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel" data-slide-to="1"></li>
                        <li data-target="#carousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="./assets/img/slide1.png" alt="First slide">
                            <div class="carousel-caption padding-0">
                                <h5>Conoce más acerca de la biodiversidad de la amazonía</h5>
                                <p>Adéntrate en la aventura de redescubrir lo nuestro</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="./assets/img/slide1.png" alt="Second slide">
                            <div class="carousel-caption center" style="background: none; width:80%;height:140px">
                                <h3 class="texto-blanco">Prueba nuestro juego de la amazonía</h3>
                                <button class="btn btn-primary" style="font-weight: bold;">Jugar</button>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="./assets/img/slide1.png" alt="Third slide">
                            <div class="carousel-caption" style="background: none;">
                                <h3 class="texto-blanco">Desliza hacia abajo para conocer más</h3>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

            </div>
        </div>
        <div class="row margin-0 padding-0" style="background: whitesmoke; width: 100vw">
            <div class="row" style="width: 100vw;">
                <h1 class="text-center w-100" style="font-weight:bold; margin-top:10px">Este es un titulo llamativo</h1>
            </div>
            <div class="row" style="width: 100vw;">
                <div class="col text-center">
                    <h2>Subtitulo 1</h2>
                    <img src="./assets/img/animal1.png" alt="">
                    <p>Esta es una expicación del subtítulo 1 esto ya es relleno esto ya es relleno esto ya es relleno</p>
                </div>
                <div class="col text-center">
                    <h2>Otro subtítulo</h2>
                    <img src="./assets/img/deforestacion.png" alt="">
                    <p>Esta es una expicación del subtítulo 2 esto ya es relleno esto ya es relleno esto ya es relleno</p>
                </div>
                <div class="col text-center">
                    <h2>Y este otro</h2>
                    <img src="./assets/img/animal2.png" alt="">
                    <p>Esta es una expicación del subtítulo 3 esto ya es relleno esto ya es relleno esto ya es relleno</p>
                </div>
            </div>
            <div class="row" style="width: 100vw">
                <h2 class="text-center w-100" style="font-weight:bold">Aquí iría cualquier cosa que se nos ocurra</h2>
            </div>
        </div>
    </div>
    <footer>
        <div class="row justify-content-center align-items-center">
            <div class="col text-center">
                <h5>Recursos utilizados</h5>
                <a href='https://www.freepik.es/vectores/diseno'>Favicon creado por freepik - www.freepik.es</a>
                <a href='https://www.freepik.es/vectores/banner'>Imagen 1 slider creado por valadzionak_volha - www.freepik.es</a>
                <a href='https://www.freepik.es/vectores/fondo'>Vector de Fondo creado por starline - www.freepik.es</a>
            </div>
            <div class="col text-center">
                <h5>
                    Desarrollado por
                </h5>
                <p>Valeria Alonso</p>
                <p>Alejandro Osorio</p>
                <p>Carlos Ramírez</p>
                <p>Programación 2020</p>
            </div>
        </div>
    </footer>
</body>

</html>