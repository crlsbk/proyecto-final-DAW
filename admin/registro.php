<?php
$usuario = "root";
$password = "";
$servidor = "127.0.0.1:3307";
$basededatos = "opeg";

//conecta a la base de datos
try {
    $pdo = new PDO("mysql:host=$servidor;dbname=$basededatos;charset=utf8", $usuario, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Could not connect to the database: " . $e->getMessage());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST'):
    $nom = $_POST['usuario'];
    $pass = $_POST['contrasenia'];

    if ($pass === $_POST['contrasenia_confirmar']):
        $pass_encriptada = password_hash($pass, PASSWORD_DEFAULT);

        //busca el ultimo id para que los ids tengan orden cronologico
        $stmt2 = $pdo->prepare("SELECT MAX(id) AS id_mayor FROM logininfo");
        $stmt2->execute();
        $row = $stmt2->fetch(PDO::FETCH_ASSOC);
        $ultimaId = $row['id_mayor'];
        $nuevaId = $ultimaId + 1;
        $sql = "INSERT INTO logininfo (id, usuario, contrasenia)
                VALUES (:id, :usuario, :contrasenia)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $nuevaId, PDO::PARAM_INT);
        $stmt->bindParam(':usuario', $nom, PDO::PARAM_STR);
        $stmt->bindParam(':contrasenia', $pass_encriptada, PDO::PARAM_STR);

        //si falla algo manda alertas de bootstrap
        if ($stmt->execute()): ?>
            <div class='alert alert-success mx-auto my-0' style="width: 30%">Usuario creado exitosamente</div>
        <?php else: ?>
            <div class='alert alert-danger mx-auto my-0' style="width: 30%">Error en el registro</div>
        <?php endif;
    else: ?>
        <div class='alert alert-danger mx-auto my-0' style="width: 30%">Las contraseñas no coinciden</div>
<?php endif;
endif;

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
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
                    <a class="nav-link active" href="registro.php">Registrar nuevo usuario</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cotizaciones.php">Ver cotizaciones</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../index.html">Volver a página</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Cerrar sesión</a>
                </li>
            </ul>

        </div>
    </nav>
</header>

<body>
    <div class="container mx-auto" style="width: 30%;">
        <div class=" card">
            <div class="card-header color-main text-white text-center">
                <h5>Registrar nuevo usuario</h5>
            </div>
            <div class="card-body">
                <form action="registro.php" method="post">
                    <div class="my-3 py-1">
                        <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Usuario" required>
                    </div>
                    <div class="my-3 py-1 input-group">
                        <input type="password" class="form-control" name="contrasenia" id="contrasenia" placeholder="Contraseña">
                        <button type="button" class="btn btn-outline-secondary" onclick="verContrasenia()">
                            <i class="bi bi-eye-slash" id="verContraseniaBoton"></i>
                        </button>
                    </div>
                    <div class="my-3 py-1 input-group">
                        <input type="password" class="form-control" name="contraseniaConf" id="contraseniaConf" placeholder="Confirme contraseña">
                        <button type="button" class="btn btn-outline-secondary" onclick="verContrasenia()">
                            <i class="bi bi-eye-slash" id="verContraseniaBotonConf"></i>
                        </button>
                    </div>
                    <div class="d-flex align-items-center justify-content-center">
                        <button type="submit" class="btn cta-button">Registrar usuario</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="../scripts.js"></script>
</body>

</html>