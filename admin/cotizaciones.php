<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "opeg";

// Conexión a base de datos
$conn = new mysqli($host, $user, $password, $database);

// Verific conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

session_start();

// si no estat logged in lo saca de la página
if (!isset($_SESSION['loggedin'])) {
    header("Location: ../login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cotizaciones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body>

    <!-- Navbar -->
    <header>
        <nav class="navbar navbar-expand justify-content-center">
            <div class="navbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="admin.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.php">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="registro.php">Registrar nuevo usuario</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="cotizaciones.php">Ver cotizaciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">Volver a página</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Cerrar sesión</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="container my-5">
        <h2 class="text-center mb-4">Cotizaciones</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4">

            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Nombre del Cliente</h5>
                        <p class="card-text"><strong>Mail:</strong> aaaaaaa</p>
                        <p class="card-text"><strong>Fecha:</strong> 01/01/2024</p>
                        <p class="card-text"><strong>Descripción:</strong> Este es un ejemplo de una cotización realizada por el cliente, detallando los servicios solicitados y cualquier otra información relevante.</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Otro Cliente</h5>
                        <p class="card-text"><strong>Mail:</strong> aaaaaaa</p>
                        <p class="card-text"><strong>Fecha:</strong> 15/01/2024</p>
                        <p class="card-text"><strong>Descripción:</strong> Cotización para los servicios solicitados en la fecha especificada.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>