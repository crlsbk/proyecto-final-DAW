<!-- usuario: admin password: Opeg2024!? -->
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
    die("Could not connect to the database: " . $e->getMessage());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST'):

    if (isset($_POST['usuario']) && isset($_POST['contrasenia'])):
        $nom = $_POST['usuario'];
        $pass = $_POST['contrasenia'];

        $stmt = $pdo->prepare("SELECT * FROM logininfo where usuario=:nom");
        $stmt->bindParam(':nom', $nom);
        $stmt->execute();

        $conf_usuario = $stmt->FETCH(PDO::FETCH_ASSOC);
        if ($conf_usuario):
            if (password_verify($pass, $conf_usuario['contrasenia'])):
                $_SESSION['loggedin'] = true; //para verificar inicio de sesón en otras páginas
                $_SESSION['username'] = $nom;
                header("Location: admin/admin.php");
                exit();
            //si algo falla manda alerta de bootstrap
            else: ?>
                <div class='alert alert-danger mx-auto my-0' style="width: 30%">Usuario o contraseña incorrectos.</div>
            <?php endif;
        else: ?>
            <div class='alert alert-danger mx-auto my-0' style="width: 30%">Usuario no encontrado.</div>
        <?php endif;
    else: ?>
        <div class='alert alert-warning mx-auto my-0' style="width: 30%">Favor de llenar todos los campos</div>

<?php endif;
endif; ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body>

    <!-- Formulario -->
    <div class="container mx-auto my-5" style="width: 30%;">
        <div class="card" style="border-style: none;">
            <div class="card-header color-main text-white text-center">
                <h5>Inicio de sesión</h5>
            </div>
            <div class="card-body" style="box-shadow: 0 1px 3px rgba(0,0,0,0.12)" ;>
                <form action="login.php" method="POST">
                    <div class="my-3 py-1">
                        <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Usuario" required>
                    </div>
                    <div class="my-3 py-1 input-group">
                        <input type="password" class="form-control" name="contrasenia" id="contrasenia" placeholder="Contraseña">
                        <button type="button" class="btn btn-outline-secondary" onclick="verContrasenia()">
                            <i class="bi bi-eye-slash" id="verContraseniaBoton"></i>
                        </button>
                    </div>
                    <div class="d-flex align-items-center justify-content-center">
                        <button type="submit" class="btn cta-button">Iniciar sesión</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="scripts.js"></script>
</body>

</html>