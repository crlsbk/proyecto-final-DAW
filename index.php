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

<body class="d-flex flex-column min-vh-100">

    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">OPERADORA OPEG</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Inicio</a>
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
                    <!-- Si el usuario inició sesión -->
                    <?php if (isset($_SESSION['loggedin'])): ?>
                        <li class="nav-item">
                            <a class="btn cta-button ms-3" href="admin/admin.php">Página de administrador</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Sección Principal (Introducción a la empresa) -->
    <div class="container mt-5 text-center">
        <h1 class="display-4 mb-4">Bienvenidos a Operadora OPEG</h1>
        <p class="lead mb-4">Ofrecemos soluciones de consultoría y gestión financiera para mejorar la operación de tu negocio en la industria gastronómica. Conoce nuestros servicios y cómo podemos ayudarte a crecer.</p>
    </div>

    <!-- Sección de Servicios -->
    <div class="container my-5 text-center">
        <h2 class="mb-4">Nuestros Servicios</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <img src="imgs/consul.png" class="card-img-top" alt="Consultoría gastronómica">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="consultoria.php" class="text-decoration-none text-dark">Consultoría Gastronómica</a>
                        </h5>
                        <p class="card-text">Ayudamos a optimizar la operación de tu restaurante con estrategias efectivas y conocimientos del mercado.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <img src="imgs/consul_op.jpg" class="card-img-top" alt="Consultoría de operación">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="operacion.php" class="text-decoration-none text-dark">Consultoría de Operación</a>
                        </h5>
                        <p class="card-text">Mejoramos los procesos operativos de tu negocio, incrementando la eficiencia y reduciendo costos.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <img src="imgs/gestion.jpg" class="card-img-top" alt="Gestión financiera">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="gestion.php" class="text-decoration-none text-dark">Gestión Financiera</a>
                        </h5>
                        <p class="card-text">Proveemos asesoría en gestión financiera para garantizar el crecimiento y estabilidad de tu negocio.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Imágenes Rotatorias -->
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

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-top mt-2 text-center">
            <p>OPERADORA.OPEG@GMAIL.COM | +52 81 8020 7152</p>
            <p>Copyright© Operadora OPEG 2024</p>
        </div>
        <a href="login.php" style="margin-left: 70px; margin-right: 70px;">Inicio de sesión</a>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
