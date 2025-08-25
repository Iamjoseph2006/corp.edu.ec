<?php
include("config.php"); // Conexión PDO

// Registrar área
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $area = trim($_POST['area']); // Tomamos el nombre del área

    if ($area != "") {
        try {
            $sql = "INSERT INTO areas (area) VALUES (:area)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([':area' => $area]);
            $mensaje = "✅ Área registrada correctamente.";
        } catch (PDOException $e) {
            $mensaje = "❌ Error: " . $e->getMessage();
        }
    } else {
        $mensaje = "❌ El campo área no puede estar vacío.";
    }
}

// Traer todas las áreas para mostrarlas en una tabla
$areas = $pdo->query("SELECT * FROM areas ORDER BY area")->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Capacitaciones</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/x-icon" href="img/logo.png">
</head>

<body>
    <?php
    if (isset($mensaje)) {
        echo "<script>alert('$mensaje');</script>";
    }
    ?>
    <form class="formulario" action="" method="POST">
        <img src="img/logo.png" alt="Logo CEE" class="logo">
        <h1>Registro de Capacitaciones</h1>

        <label for="area">Ingrese la Capacitación:</label>
        <input type="text" name="area" placeholder="Ingrese la Capacitación" required>
        <button type="submit">Registar</button>
        <button type="button"onclick="window.location.href='index.php';">Cancelar</button>
    </form>

</body>

</html>