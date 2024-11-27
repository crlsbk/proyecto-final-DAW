<?php session_start() ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadora OPEG - Nuestra historia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">OPERADORA OPEG</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Servicios
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                            <li><a class="dropdown-item" href="consultoria.php">Consultoría gastronómica</a></li>
                            <li><a class="dropdown-item" href="operacion.php">Consultoría de operación</a></li>
                            <li><a class="dropdown-item" href="gestion.php">Gestión financiera</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="clientes.php">Nuestros clientes</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="aboutDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Nosotros
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="aboutDropdown">
                            <li><a class="dropdown-item" href="quienes_somos.php">Quiénes somos</a></li>
                            <li><a class="dropdown-item" href="historia.php">Historia</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="faq.php">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.php">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn cta-button" href="cotizacion.php">Cotiza ahora</a>
                    </li>
                    <!-- si el usuario inicio sesión hay boton para ir a pagina deadmin -->
                    <?php if (isset($_SESSION['loggedin'])): ?>
                        <li class="nav-item">
                            <a class="btn cta-button ms-3" href="admin/admin.php">Página de administrador</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
    <div class="imagenTapada">
        <div class="d-flex justify-content-center align-items-center">
            <h1 class="fw-semibold" style="position: absolute;">Nuestra historia</h1>
            <img src="imgs/logoFULLOpeg.png" class="imagenTapadaImg">
        </div>
    </div>
    <div class="texto">
        <p class="fs-5 mx-4 pt-4">Operadora OPEG fue fundado en el 2020 por Claudia Mendoza, siendo este uno de los muchos negocios comenzados durante la pandemia. Teniendo ella más de 20 años de experiencia en el medio gastronomico; siendo responsable de organizar eventos como Taco Fest y Paralelo, y de administrar restaurantes como Milk, Kadoya, y Cantina La No. 20, decidio emprender en un negocio de administración independiente.
            <br>
            <br>Desde nuestra fundación, hemos tenido como objetivo ofrecer soluciones de administración y operación para cualquier tipo de negocio, nuestro objetivo siendo el mismo que el tuyo. Desde nuestra fundación hemos destacado por implementar estrategias personalizadas a cada negocio, siendo estas evaluadas y aprobadas por el dueño de este, reflejando esto nuestro compromiso con las necesidades especificas de cada uno de
            nuestros clientes. Nuestra misión es darle una oportunidad a todos aquellos emprendedores de tener éxito y prosperar, sin importar si careces de experiencia o educación en administración, con OPEG tu éxito esta asegurado.
            <br>
            <br>Actualmente, en OPEG continuamos creciendo y adaptandonos al constantemente cambiente mercado de cada industria, posicionandonos como no solo un cliente, sino como un aliado estrategico para aquellas empresas que tienen toda la posibilidad y potencial para ser exitosas.
        </p>
    </div>

    <footer class="footer">
        <div class="footer-top mt-2">
            <p>OPERADORA.OPEG@GMAIL.COM | +52 81 8020 7152</p>
            <p>Copyright© Operadora OPEG 2024</p>
        </div>
        <a href="login.php" style="margin-left: 70px; margin-right: 70px;">Inicio de sesión</a>
    </footer>
</body>
<script src="scripts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>