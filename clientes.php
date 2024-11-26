<?php session_start() ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadora OPEG</title>
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
                        <a class="nav-link dropdown-toggle " href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Servicios
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                            <li><a class="dropdown-item" href="consultoria.php">Consultoría gastronómica</a></li>
                            <li><a class="dropdown-item" href="operacion.php">Consultoría de operación</a></li>
                            <li><a class="dropdown-item" href="gestion.php">Gestión financiera</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="clientes.php">Nuestros clientes</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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

    <div class="container mt-4 text-center">
        <h1 class="mb-4">Nuestros clientes</h1>
        <p class="mb-4 fs-5">En OPEG, estamos orgullosos de haber recibido la confianza de más de 10 empresas en nuestros 4 años de vida. Desde empresas de marketing, restaurantes, y complejos deportivos, cada uno de ellos forma parte de nuestra historia y son familia para nosotros. Nos adaptamos a la necesidad de cada cliente, con disponibilidad 24/7, visitas constantes a la empresa, y más.
        </p>
    </div>
    <div class="my-5 pt-3 pb-3 border-top border-bottom" style="width: 100vw;">
        <div class="clientes">
            <div class="cliente px-5"><img src="imgs/half_LogoWEB.webp"></div>
            <div class="cliente px-5"><img src="imgs/chefschoice.png"></div>
            <div class="cliente px-5"><img src="imgs/common.jpg"></div>
            <div class="cliente px-5"><img src="imgs/kumquat.png"></div>
            <div class="cliente px-5"><img src="imgs/lg.png"></div>
            <div class="cliente px-5"><img src="imgs/panabi.jpg"></div>
            <div class="cliente px-5"><img src="imgs/half_LogoWEB.webp"></div>
            <div class="cliente px-5"><img src="imgs/chefschoice.png"></div>
            <div class="cliente px-5"><img src="imgs/common.jpg"></div>
            <div class="cliente px-5"><img src="imgs/kumquat.png"></div>
            <div class="cliente px-5"><img src="imgs/lg.png"></div>
            <div class="cliente px-5"><img src="imgs/panabi.jpg"></div>
        </div>
    </div>
    <p class="fs-5 text-center">Transformamos tus ideas en resultados. Confía en nosotros y descubre cómo nuestra experiencia, compromiso y pasión pueden llevar tu negocio al siguiente nivel.</p>

    <footer class="footer" style="position:fixed;">
        <div class="footer-top mt-2">
            <p>OPERADORA.OPEG@GMAIL.COM | +52 81 8020 7152</p>
            <p>Copyright© Operadora OPEG 2024</p>
        </div>
        <a href="login.php" style="margin-left: 70px; margin-right: 70px;">Inicio de sesión</a>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="scripts.js"></script>

</html>