<?php
session_start();
include("config.php");

$usuario = $_POST['usuario'];
$clave = $_POST['clave'];
$id_rol  = $_POST['rol'];  // el rol seleccionado automáticamente

$sql = "SELECT * FROM usuarios WHERE user = :usuario AND password = :clave AND id_rol = :id_rol";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    'usuario' => $usuario,
    'clave'   => $clave,
    'id_rol'  => $id_rol
]);

$usuarioEncontrado = $stmt->fetch();

if($usuarioEncontrado){
    $_SESSION['usuario'] = $usuarioEncontrado['user'];
    $_SESSION['rol'] = $usuarioEncontrado['id_rol'];

    switch ($usuarioEncontrado['id_rol']){
        case 1: // Administrador
            header("Location: bienvenido.php");
            break;
        case 2: // Secretaria
            header("Location: secretaria.php");
            break;
        case 3: // Docente
            header("Location: admin.php");
            break;
        case 4: // Estudiante
            header("Location: index.php");
            break;
        default:
            header("Location: bienvenido.php");
            break;
    }
} else {
    echo "<script>alert('Usuario, contraseña o rol incorrecto'); window.location='login.php';</script>";
}
?>
