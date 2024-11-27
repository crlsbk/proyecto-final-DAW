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

// Manejo de la eliminación de blogs
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    $stmt = $conn->prepare("DELETE FROM articulos WHERE id = ? AND tipo = 1");
    $stmt->bind_param("i", $delete_id);
    if ($stmt->execute()) {
        $mensaje = "Blog eliminado con éxito.";
    } else {
        $mensaje = "Error al eliminar el blog.";
    }
    $stmt->close();
}

// Manejo de la creación de nuevos blogs
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['titulo'], $_POST['contenido'], $_POST['autor'])) {
    $titulo = $_POST['titulo'];
    $contenido = $_POST['contenido'];
    $autor = $_POST['autor'];
    $fecha = date('Y-m-d');
    $tipo = 1;

    $stmt = $conn->prepare("INSERT INTO articulos (titulo, contenido, autor, publicacion_fecha, tipo) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssi", $titulo, $contenido, $autor, $fecha, $tipo);

    if ($stmt->execute()) {
        $mensaje = "Blog agregado con éxito.";
    } else {
        $mensaje = "Error al agregar el blog.";
    }
    $stmt->close();
}

// Obtener blogs
$stmt = $conn->prepare("SELECT * FROM articulos WHERE tipo = 1 ORDER BY publicacion_fecha DESC");
$stmt->execute();
$result = $stmt->get_result();
$blogs = $result->fetch_all(MYSQLI_ASSOC);
$stmt->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrar Blogs</title>
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
                        <a class="nav-link active" href="blog.php">Administrar blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="FAQ.php">Administrar FAQs</a>
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
    <h1>Administrar Blogs</h1>
    <br>
    <?php if ($mensaje): ?>
        <div class="alert alert-info"><?= $mensaje ?></div>
    <?php endif; ?>
    <form method="POST" class="mb-4">
        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" id="titulo" name="titulo" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="contenido" class="form-label">Contenido</label>
            <textarea id="contenido" name="contenido" class="form-control" rows="4" required></textarea>
        </div>
        <div class="mb-3">
            <label for="autor" class="form-label">Autor</label>
            <input type="text" id="autor" name="autor" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Agregar Blog</button>
    </form>

    <br>

    <h2>Blogs existentes</h2>
    <br>
    <div class="row g-3">
    <?php foreach ($blogs as $blog): ?>
        <div class="col-12"> 
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?= htmlspecialchars($blog['titulo']) ?></h5>
                    <p class="card-text"><?= nl2br(htmlspecialchars($blog['contenido'])) ?></p>
                    <p class="text-muted">Autor: <?= htmlspecialchars($blog['autor']) ?></p>
                    <p class="text-muted">Fecha: <?= htmlspecialchars($blog['publicacion_fecha']) ?></p>
                    <a href="?delete_id=<?= htmlspecialchars($blog['id']) ?>" class="btn btn-danger btn-sm">Eliminar</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
