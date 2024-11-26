<?php session_start() ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadora OPEG - Nosotros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
</head>

<body style="height: 3000px;">

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">OPERADORA OPEG</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="inicio.php">Inicio</a>
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

    <div class="container mt-4">
        <div class="fadeOut-Imgs">
            <h3>Descripción del equipo</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Eu consequat ac felis donec et odio pellentesque diam volutpat. Felis eget velit aliquet sagittis id consectetur purus ut faucibus. Urna porttitor rhoncus dolor purus non enim praesent elementum facilisis leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Eu consequat ac felis donec et odio pellentesque diam volutpat. Felis eget velit aliquet sagittis id consectetur purus ut faucibus. Urna porttitor rhoncus dolor purus non enim praesent elementum facilisis leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Eu consequat ac felis donec et odio pellentesque diam volutpat. Felis eget velit aliquet sagittis id consectetur purus ut faucibus. Urna porttitor rhoncus dolor purus non enim praesent elementum facilisis leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Eu consequat ac felis donec et odio pellentesque diam volutpat. Felis eget velit aliquet sagittis id consectetur purus ut faucibus. Urna porttitor rhoncus dolor purus non enim praesent elementum facilisis leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Eu consequat ac felis donec et odio pellentesque diam volutpat. Felis eget velit aliquet sagittis id consectetur purus ut faucibus. Urna porttitor rhoncus dolor purus non enim praesent elementum facilisis leo.</p>
            <img src="imgs/lg.png">
        </div>
    </div>
    <footer class="footer">
        <div class="footer-top mt-2">
            <p>OPERADORA.OPEG@GMAIL.COM | +52 81 8020 7152</p>
            <p>Copyright© Operadora OPEG 2024</p>
        </div>
        <a href="login.php" style="margin-left: 70px; margin-right: 70px;">Inicio de sesión</a>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>