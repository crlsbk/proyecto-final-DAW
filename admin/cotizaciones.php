<?php
$host = "localhost";
$user = "root";
$password = ""; // Cambia si tienes una contraseña
$database = "opeg"; // Asegúrate de que el nombre de la base de datos es correcto

// Conexión a la base de datos
$conn = new mysqli($host, $user, $password, $database);

// Verifica la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

session_start();

if (!isset($_SESSION['loggedin'])) {
    header("Location: ../login.html");
    exit();
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <style>
    </style>
</head>
<header>
    <nav class="navbar navbar-expand justify-content-center">
        <div class="navbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="admin.php">Inicio</a>
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
                    <a class="nav-link" href="../index.html">Volver a página</a>
                </li>
            </ul>

        </div>
    </nav>
</header>

<body>
    <h1>Todavía <br><strong>no</strong><br> funciona esta página!</h1>
    <script src="scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>
</body>

</html>