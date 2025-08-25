<?php
session_start();
if (isset($_SESSION['mensaje'])) {
    $mensaje = $_SESSION['mensaje'];   // ahora $mensaje sí existe
    echo "<script>alert('$mensaje');</script>";
    unset($_SESSION['mensaje']);       // limpiar para que no aparezca otra vez
}
include("config.php"); // Conexión PDO

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $clave   = $_POST['clave'];
    $id_rol  = $_POST['rol'];

    try {
        $sql = "INSERT INTO usuarios (user, password, id_rol) 
                VALUES (:usuario, :clave, :id_rol)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':usuario' => $usuario,
            ':clave'   => $clave,
            ':id_rol'  => $id_rol
        ]);

        // Mensaje de éxito usando session para mostrarlo después
        $mensaje['mensaje'] = "✅ Usuario registrado correctamente.";
    } catch (PDOException $e) {
        $mensaje['mensaje'] = "❌ Error: " . $e->getMessage();
    }
}
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/x-icon" href="img/logo.png">
</head>

<body>
    <?php
    if (isset($_SESSION['mensaje'])) {
        echo "<script>alert('$mensaje');</script>";
    }
    ?>
    <form class="formulario" action="" method="POST">
        <img src="img/logo.png" alt="Logo CEE" class="logo">
        <h1>Registro de Usuario</h1>
        <label for="text">Ingrese su Cédula:</label>
        <input type="text" name="usuario" placeholder="Ingrese su Cédula" required>
        <label for="password">Ingrese su Contraseña:</label>
        <input type="password" name="clave" placeholder="Ingrese su Contraseña" required>
        <label for="rol">Elija su Rol:</label>
        <select name="rol" id="rol" required>
            <option value="" disabled selected>Seleccione el rol</option>
            <?php
            $stmt = $pdo->query("SELECT id, rol FROM rol");
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<option value='" . $row['id'] . "'>" . $row['rol'] . "</option>";
            }
            ?>
        </select>
        <button type="submit">Registrate</button>
        <button type="button" onclick="window.location.href='login.php';">Cancelar</button>
    </form>
</body>

</html>