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
    
    $stmt = $pdo->prepare("SELECT * FROM logininfo where usuario=:nom");
    $stmt->bindParam(':nom', $nom);
    $stmt->execute();

    $conf_usuario= $stmt->FETCH(PDO::FETCH_ASSOC);

    if ($conf_usuario) {
        if (password_verify($pass, $conf_usuario['contrasenia'])) {
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $nom;
            header("Location: admin/admin.html");
            exit();
        } else {
            echo "<div class='alert alert-danger'>Usuario o contraseña incorrectos.</div>";
        }
    } else {
        echo "<div class='alert alert-danger'>Usuario no encontrado.</div>";
    }
}

?>