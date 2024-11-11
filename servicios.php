<?php session_start() ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadora OPEG - Servicios</title>
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
                        <a class="nav-link" href="inicio.php">Inicio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Servicios
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                            <li><a class="dropdown-item" href="consultoria.php">Consultoría gastronómica</a></li>
                            <li><a class="dropdown-item" href="servicios.php">Servicios</a></li>
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
                    <?php if ($_SESSION['loggedin']): ?>
                        <li class="nav-item">
                            <a class="btn cta-button ms-3" href="admin/admin.php">Página de administrador</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container services-section">
        <h2>Servicios</h2>
        <p class="mt-3 mb-5">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eu sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse ultrices, purus sit amet luctus venenatis, purus ipsum blandit erat, vitae suscipit metus libero vel velit.
        </p>
        <div class="row">
            <div class="col-md-4">
                <div class="p-3 border">
                    <h3>Servicio 1</h3>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 border">
                    <h3>Servicio 2</h3>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 border">
                    <h3>Servicio 3</h3>
                </div>
            </div>
        </div>
    </div>


    <footer class="footer">
        <p>OPERADORA.OPEG@BUSINESS.COM | +52 8100000000</p>
    </footer>
</body>

</html>