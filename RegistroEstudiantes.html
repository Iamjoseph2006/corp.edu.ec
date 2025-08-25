<?php
session_start();
if (isset($_SESSION['mensaje'])) {
    $mensaje = $_SESSION['mensaje'];   // ahora $mensaje sí existe
    echo "<script>alert('$mensaje');</script>";
    unset($_SESSION['mensaje']);       // limpiar para que no aparezca otra vez
}
include("config.php"); // conexión PDO

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cedula      = $_POST['cedula'];
    $nombres     = $_POST['nombre'];
    $edad        = $_POST['edad'];
    $sexo        = $_POST['Sexo'];
    $nacimiento  = $_POST['nacimiento'];
    $direccion   = $_POST['direccion'];
    $telefono    = $_POST['telefono'];
    $email       = $_POST['email'];
    $id_areas    = $_POST['id_areas'];
    $id_clases    = $_POST['id_clases'];
    $id_turno    = $_POST['id_turno'];

    try {
        $sql = "INSERT INTO estudiantes 
                (cedula, nombres, edad, sexo, nacimiento, direccion, telefono, email, id_areas, id_clases, id_turno) 
                VALUES (:cedula, :nombres, :edad, :sexo, :nacimiento, :direccion, :telefono, :email, :id_areas, :id_clases, :id_turno)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':cedula'    => $cedula,
            ':nombres'   => $nombres,
            ':edad'      => $edad,
            ':sexo'      => $sexo,
            ':nacimiento' => $nacimiento,
            ':direccion' => $direccion,
            ':telefono'  => $telefono,
            ':email'     => $email,
            ':id_areas'  => $id_areas,
            ':id_clases'  => $id_clases,
            ':id_turno'  => $id_turno
        ]);
        $mensaje['mensaje'] = "✅ Estudiante registrado correctamente.";
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
    <title>Registro de Estudiantes</title>
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
        <h1>Registro de Estudiantes</h1>

        <label for="cedula">Escriba su Número de Cédula:</label>
        <input type="text" name="cedula" placeholder="Cédula" required>

        <label for="nombre">Escriba sus Nombres Completos:</label>
        <input type="text" name="nombre" placeholder="Nombres Completos" required>

        <label for="edad">Elija su Edad:</label>
        <input type="number" name="edad" placeholder="Edad" min="12" max="75" required>

        <label for="Sexo">Elija su Sexo:</label>
        <select name="Sexo" required>
            <option value="" disabled selected>Sexo</option>
            <option value="Masculino">Masculino</option>
            <option value="Femenino">Femenino</option>
            <option value="otro">Otro</option>
        </select>

        <label for="nacimiento">Elija su Fecha de Nacimiento:</label>
        <input type="date" name="nacimiento" required>

        <label for="direccion">Escriba su Dirección:</label>
        <input type="text" name="direccion" placeholder="Dirección" required>

        <label for="telefono">Escriba su Número de Teléfono:</label>
        <input type="text" name="telefono" placeholder="Teléfono" required>

        <label for="email">Escriba su Correo Electrónico:</label>
        <input type="email" name="email" placeholder="Correo Electrónico" required>

        <label for="id_areas">Elija el Área de Capacitación:</label>
        <select name="id_areas" required>
            <option value="" disabled selected>Área de Capacitación</option>
            <?php
            $stmt = $pdo->query("SELECT id, area FROM areas");
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<option value='" . $row['id'] . "'>" . $row['area'] . "</option>";
            }
            ?>
        </select>

        <label for="id_clases">Elija el Día de Clases:</label>
        <select name="id_clases" required>
            <option value="" disabled selected>Día de Clases</option>
            <?php
            $stmt = $pdo->query("SELECT id, dia FROM clases");
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<option value='" . $row['id'] . "'>" . $row['dia'] . "</option>";
            }
            ?>
        </select>

        <label for="id_turno">Elija el Turno:</label>
        <select name="id_turno" required>
            <option value="" disabled selected>Turno</option>
            <?php
            $stmt = $pdo->query("SELECT id, turno FROM turno");
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<option value='" . $row['id'] . "'>" . $row['turno'] . "</option>";
            }
            ?>
        </select>

        <button type="submit">Registrar</button>
        <button type="button"onclick="window.location.href='index.php';">Cancelar</button>
    </form>
</body>

</html>