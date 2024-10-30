<?php
$usuario = "root";
$password = "";
$servidor = "127.0.0.1:3307"; 
$basededatos = "opeg";    

try {
    $pdo = new PDO("mysql:host=$servidor;dbname=$basededatos;charset=utf8", $usuario, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    die("Could not connect to the database: " . $e->getMessage());
}

if($_SERVER['REQUEST_METHOD']==='POST'){
    $nom = $_POST['usuario'];
    $pass = $_POST['contrasenia'];

    if($pass === $_POST['contrasenia_confirmar']){
        $pass_encriptada = password_hash($pass, PASSWORD_DEFAULT);
        
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

       if ($stmt->execute()) {
        $msje = 'Usuario creado exitosamente';
       } else {
        $msje = 'Error en el registro';
       }
    } else {
        $msje  = 'Las contraseñas no coinciden.';
    }

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
        .btn-outline-secondary {
            border-color: #ced4da;
            color: #495057;
        }
        .btn-outline-secondary:hover {
            border-color: #e6e8ea;
            color: #495057;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var mensaje = "<?php echo $msje; ?>";
            if (mensaje) {
                alert(mensaje);
            }
        });
    </script>
</head>
<header>
    <nav class="navbar navbar-expand justify-content-center">
        <div class="navbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="admin.html">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="blog.html">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="registro.html">Registrar nuevo usuario</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cotizaciones.html">Ver cotizaciones</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../index.html">Volver a página</a>
                </li>    
            </ul>
            
        </div>
    </nav>
</header>
<body>
    <div class="container text-center d-flex justify-content-center align-items-center"
        <div class="row">
            <div class="col-4">
                <div class="container my-5">
                    <div class="card">
                        <div class="card-header bg-primary text-white text-center rounded">
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
                                    <input type="password" class="form-control" name="contrasenia_confirmar" id="contrasenia_confirmar" placeholder="Confirme contraseña">
                                    <button type="button" class="btn btn-outline-secondary" onclick="verContrasenia()">
                                        <i class="bi bi-eye-slash" id="verContraseniaBoton2"></i>
                                    </button>
                                </div>
                                <div class="d-flex align-items-center justify-content-center">
                                    <button type="submit" class="btn btn-primary">Registrar usuario</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>
</body>
</html>
