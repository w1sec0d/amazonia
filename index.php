<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap y JQuery -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <!-- Sweet Alert 2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <!-- Carga favicon o ícono de la página -->
    <link rel="shortcut icon" href="./assets/img/logo.ico" type="image/x-icon">
    <!-- CSS personalizado -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Amazonía Viviente</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <nav class="navbar navbar-expand-lg navbar-light bg-light w-100">
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
                            <a class="nav-link" href="#conoceMas">Conoce más</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./view/canvas.php">Juega</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#footer">Nosotros</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="row w-100 justify-content-center align-items-center" id="contenedor-slider">
                <div id="carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel" data-slide-to="1"></li>
                        <li data-target="#carousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="./assets/img/slider1.png" alt="First slide">
                            <div class="carousel-caption" style="background: none;">
                                <h3 class="texto-blanco">Conoce más acerca de la biodiversidad de la amazonía</h3>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="./assets/img/slider2.png" alt="Second slide">
                            <div class="carousel-caption center" style="background: none; width:80%;height:140px">
                                <h3 class="texto-blanco" id="texto-slide2">Prueba nuestro juego de la amazonía</h3>
                                <a href="./view/canvas.php">
                                    <button class="btn btn-primary" style="font-weight: bold;">Jugar</button>
                                </a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="./assets/img/slider3.png" alt="Third slide">
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
        <div id="datos1">
            <div class="row" id="conoceMas">
                <div class="col text-center">
                    <h1 style="font-weight:bold; margin-top:10px;">La selva amazónica alberga más del 60% de las especies a nivel mundial</h1>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <h2>Reserva de agua</h2>
                    <img src="./assets/img/water.png" alt="">
                    <p>Almacena el 20% de agua dulce del planeta y un millon de km² de ecosistemas de agua dulce</p>
                </div>
                <div class="col text-center">
                    <h2>Flora</h2>
                    <img src="./assets/img/tree.png" alt="">
                    <p>Cuenta con más de 40000 especies de plantas y 6.7 km² de bosques que almacenan el 10% del carbono global</p>
                </div>
                <div class="col text-center">
                    <h2>Tesoros ocultos</h2>
                    <img src="./assets/img/fish.png" alt="">
                    <p>Se estima que existen un millón de especies animales y vegetales, muchas de ellas sin clasificar</p>
                </div>
            </div>
        </div>
        <div id="datos2">
            <div class="row">
                <div class="col text-center">
                    <h1 style="font-weight:bold; margin-top:10px;">El pulmón del mundo se encuentra en peligro</h1>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <h2>Deforestación</h2>
                    <img src="./assets/img/deforestation.png" alt="">
                    <p></p>
                </div>
                <div class="col text-center">
                    <h2>Incendios Forestales</h2>
                    <img src="./assets/img/fire.png" alt="">
                    <p></p>
                </div>
                <div class="col text-center">
                    <h2>Sobreexplotación</h2>
                    <img src="./assets/img/mining.png" alt="">
                    <p></p>
                </div>
            </div>
        </div>
        <div id="datos3">
            <div class="row">
                <div class="col text-center">
                    <h1 style="font-weight:bold; margin-top:10px;">Tu puedes contribuir con pequeñas acciones</h1>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <h2>Recicla</h2>
                    <img src="./assets/img/recycle.png" alt="">
                    <p>Recicla, reduce y reutiliza lo que consumes</p>
                </div>
                <div class="col text-center">
                    <h2>Sé Eficiente</h2>
                    <img src="./assets/img/bycicle.png" alt="">
                    <p>Si puedes evitar los automoviles, el planeta te lo agradecerá</p>
                </div>
                <div class="col text-center">
                    <h2>Respeta la vida</h2>
                    <img src="./assets/img/monkey.png" alt="">
                    <p>No compres ni captures animales exóticos</p>
                </div>
            </div>
        </div>

        <footer class="row align-items-center justify-content-center" id="footer">
            <div class="col text-center">
                <h5>Recursos utilizados</h5>
                Imágenes extraidas de <a href='https://www.freepik.es'>Freepik</a> y <a href="https://www.flaticon.com">Flaticon</a><br>
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
        </footer>
    </div>
</body>

</html>