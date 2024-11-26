<?php
$usuario = "root";
$password = "";
$servidor = "127.0.0.1:3307";
$basededatos = "opeg";

session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

try {
    $pdo = new PDO("mysql:host=$servidor;dbname=$basededatos;charset=utf8", $usuario, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Coul not connect to the database: " . $e->getMessage());
} ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadora OPEG - Historia</title>
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
                    <?php if ($_SESSION['loggedin']): ?>
                        <li class="nav-item">
                            <a class="btn cta-button ms-3" href="admin/admin.php">Página de administrador</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST'):
        if (isset($_POST['nombreCliente']) && isset($_POST['nombreRestaurante']) && isset($_POST['telefono']) && isset($_POST['direccion']) && isset($_POST['mail'])):
            $nombreCliente = $_POST['nombreCliente'];
            $nombreRestaurante = $_POST['nombreRestaurante'];
            $telefono = $_POST['telefono'];
            $direccion = $_POST['direccion'];
            $mail = $_POST['mail'];
            $sqlId = "SELECT MAX(id) AS maxid FROM cotizaciones";
            $stmtId = $pdo->prepare($sqlId);
            $stmtId->execute();
            $row = $stmtId->fetch(PDO::FETCH_ASSOC);
            $ultimaId = $row['maxid'];
            $id = $ultimaId + 1;
            $to = 'juannnm05@gmail.com';
            $subject = 'Nueva cotización de' . $_POST['nombreRestaurante'];
            $cuerpo = '
        Nombre del cliente: ' . $nombreCliente . '
        Nombre del restaurante: ' . $nombreRestaurante . '
        Telefono: ' . $telefono . '
        Dirección: ' . $direccion . '
        E-Mail: ' . $mail;

            mail($to, $subject, $cuerpo);

            $sql = "INSERT INTO cotizaciones (nombre_cliente, nombre_restaurante, numero_telefono,  direccion, email, id)
        VALUES (:nombreCliente, :nombreRestaurante, :telefono, :direccion, :mail, :id";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam('nombreCliente', $nombreCliente, PDO::PARAM_STR);
            $stmt->bindParam('nombreRestaurante', $nombreRestaurante, PDO::PARAM_STR);
            $stmt->bindParam('telefono', $telefono, PDO::PARAM_INT);
            $stmt->bindParam('direccion', $direccion, PDO::PARAM_STR);
            $stmt->bindParam('mail', $mail, PDO::PARAM_STR);

            if ($stmt->execute()): ?>
                <div class="alert alert-success">Cotización enviada!</div>
            <?php else: ?>
                <div class="alert alert-danger">Error al enviar cotización, por favor intente de nuevo</div>
            <?php endif;
        else: ?>
            <div class="alert alert-warning">Favor de llenar todos los campos</div>
    <?php endif;
    endif; ?>

    <div class="container mt-4" style="width: 70%; height:81.9vh">
        <h3 class=" text-center">¡Optimiza tu restaurante con expertos! Solicita tu cotización y descubre cómo OPEG puede llevar tu servicio al siguiente nivel</h3>
        <form action="cotizacion.php" method="POST" style="width: 80%;" class="mx-auto mt-5">
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label for="nombreCliente" class="form-label">Nombre completo</label>
                    <input id="nombreCliente" type="text" class="form-control">
                </div>
                <div class="mb-3 col-md-6">
                    <label for="nombreRestaurante" class="form-label">Nombre del restaurante</label>
                    <input id="nombreRestaurante" type="text" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="telefono" class="form-label">Número de teléfono</label>
                    <input id="telefono" type="tel" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="direccion" class="form-label">Dirección</label>
                    <input id="direccion" type="text" class="form-control">
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="mail" class="form-label">E-mail</label>
                <input id="mail" type="email" class="form-control">
            </div>
            <div class="text-center">
                <button class="btn cta-button btn-lg" type="submit">Cotizar ahora</button>
            </div>
        </form>
    </div>

    <footer class="footer">
        <p>OPERADORA.OPEG@BUSINESS.COM | +52 8100000000</p>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>