<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "opeg";

// conexion a  base de datos
$conn = new mysqli($host, $user, $password, $database);

// verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

session_start();

// si no esta logged in lo saca
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
    <title>Panel de Administración</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body>


<main class="container py-5">
    <h1 class="text-center mb-4">Panel de Administración - OPEG</h1>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        <div class="col">
            <div class="card h-100 shadow-sm">
                <div class="card-body text-center">
                    <i class="bi bi-pencil-square display-4 text-primary"></i>
                    <h5 class="card-title mt-3">Administrar Blog</h5>
                    <p class="card-text">Edita, elimina o añade nuevas entradas de blog.</p>
                    <a href="blog.php" class="btn btn-primary">Ir al Blog</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 shadow-sm">
                <div class="card-body text-center">
                    <i class="bi bi-question-circle-fill display-4 text-success"></i>
                    <h5 class="card-title mt-3">Administrar FAQs</h5>
                    <p class="card-text">Gestiona las preguntas frecuentes de los usuarios.</p>
                    <a href="FAQ.php" class="btn btn-success">Ir a FAQs</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 shadow-sm">
                <div class="card-body text-center">
                    <i class="bi bi-person-plus-fill display-4 text-warning"></i>
                    <h5 class="card-title mt-3">Registrar Usuario</h5>
                    <p class="card-text">Añade nuevos usuarios al sistema.</p>
                    <a href="registro.php" class="btn btn-warning">Registrar Usuario</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 shadow-sm">
                <div class="card-body text-center">
                    <i class="bi bi-file-earmark-text-fill display-4 text-info"></i>
                    <h5 class="card-title mt-3">Ver Cotizaciones</h5>
                    <p class="card-text">Consulta las cotizaciones realizadas por los clientes.</p>
                    <a href="cotizaciones.php" class="btn btn-info">Ver Cotizaciones</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 shadow-sm">
                <div class="card-body text-center">
                    <i class="bi bi-house-fill display-4 text-secondary"></i>
                    <h5 class="card-title mt-3">Volver a Página</h5>
                    <p class="card-text">Regresa a la página principal.</p>
                    <a href="../index.php" class="btn btn-secondary">Volver</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 shadow-sm">
                <div class="card-body text-center">
                    <i class="bi bi-box-arrow-right display-4 text-danger"></i>
                    <h5 class="card-title mt-3">Cerrar Sesión</h5>
                    <p class="card-text">Sal del sistema de manera segura.</p>
                    <a href="logout.php" class="btn btn-danger">Cerrar Sesión</a>
                </div>
            </div>
        </div>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
