<?php
session_start();

$host = "localhost";
$user = "root";
$password = "";
$database = "opeg";
$conn = new mysqli($host, $user, $password, $database); 

$query = "SELECT * FROM articulos WHERE tipo = 0 ORDER BY publicacion_fecha DESC";
$result = $conn->query($query);
$posts = $result->fetch_all(MYSQLI_ASSOC);
$result->close();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Operadora OPEG</title>
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
                        <a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Nosotros
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="aboutDropdown">
                            <li><a class="dropdown-item" href="quienes_somos.php">Quiénes somos</a></li>
                            <li><a class="dropdown-item" href="historia.php">Historia</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="faq.php">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.php">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn cta-button" href="cotizacion.php">Cotiza ahora</a>
                    </li>
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
        <h1>FAQs:</h1>
        <br>
        <div class="row g-4"> 
            <?php foreach ($posts as $post): ?>
                <div class="col-12">  
                    <div class="card bg-light shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title"><?= htmlspecialchars($post['titulo']) ?></h5>
                            <p class="card-text"><?= nl2br(htmlspecialchars($post['contenido'])) ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <?php if (empty($posts)): ?>
            <p class="text-center">No hay FAQs disponibles.</p>
        <?php endif; ?>
    </div>

    <footer class="footer mt-5">
        <div class="footer-top text-center">
            <p>OPERADORA.OPEG@GMAIL.COM | +52 81 8020 7152</p>
            <p>Copyright© Operadora OPEG 2024</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
