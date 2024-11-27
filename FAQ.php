<?php
// Configuración de la base de datos
$host = "localhost";
$user = "root";
$password = "";
$database = "opeg";

$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

session_start();
if (!isset($_SESSION['loggedin'])) {
    header("Location: ../login.php");
    exit();
}

$mensaje = "";

// Manejo de la eliminación de FAQs
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    $stmt = $conn->prepare("DELETE FROM articulos WHERE id = ? AND tipo = 0");
    $stmt->bind_param("i", $delete_id);
    if ($stmt->execute()) {
        $mensaje = "FAQ eliminada con éxito.";
    } else {
        $mensaje = "Error al eliminar la FAQ.";
    }
    $stmt->close();
}

// Manejo de la creación de nuevas FAQs
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['titulo'], $_POST['contenido'])) {
    $titulo = $_POST['titulo'];
    $contenido = $_POST['contenido'];
    $fecha = date('Y-m-d');
    $tipo = 0;

    $stmt = $conn->prepare("INSERT INTO articulos (titulo, contenido, publicacion_fecha, tipo) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sssi", $titulo, $contenido, $fecha, $tipo);

    if ($stmt->execute()) {
        $mensaje = "FAQ agregada con éxito.";
    } else {
        $mensaje = "Error al agregar la FAQ.";
    }
    $stmt->close();
}

// Obtener FAQs
$stmt = $conn->prepare("SELECT * FROM articulos WHERE tipo = 0 ORDER BY publicacion_fecha DESC");
$stmt->execute();
$result = $stmt->get_result();
$faqs = $result->fetch_all(MYSQLI_ASSOC);
$stmt->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrar FAQs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>



<body>

<header>
    <nav class="navbar navbar-expand justify-content-center">
            <div class="navbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link " href="admin.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.php">Administrar blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="FAQ.php">Administrar FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="registro.php">Registrar nuevo usuario</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cotizaciones.php">Ver cotizaciones</a>
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

<div class="container mt-4">
    <h1>Administrar FAQs</h1>
    <br>
    <?php if ($mensaje): ?>
        <div class="alert alert-info"><?= $mensaje ?></div>
    <?php endif; ?>
    <form method="POST" class="mb-4">
        <div class="mb-3">
            <label for="titulo" class="form-label">Pregunta</label>
            <input type="text" id="titulo" name="titulo" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="contenido" class="form-label">Respuesta</label>
            <textarea id="contenido" name="contenido" class="form-control" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Agregar FAQ</button>
    </form>

    <br>

    <h2>FAQs</h2>
    <div class="row g-3">
        <?php foreach ($faqs as $faq): ?>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?= $faq['titulo'] ?></h5>
                        <p class="card-text"><?= $faq['contenido'] ?></p>
                        <a href="?delete_id=<?= $faq['id'] ?>" class="btn btn-danger btn-sm">Eliminar</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

