<?php
include("config.php");

if(isset($_GET['usuario'])){
    $usuario = $_GET['usuario'];

    // Traer todos los roles del usuario
    $stmt = $pdo->prepare("
        SELECT u.id_rol, r.rol
        FROM usuarios u
        JOIN rol r ON u.id_rol = r.id
        WHERE u.user = :usuario
    ");
    $stmt->execute([':usuario' => $usuario]);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC); // <-- traer todos los roles

    echo json_encode($result); // devuelve un array de roles
}
?>
