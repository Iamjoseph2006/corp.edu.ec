<?php
include("config.php"); // conexión a la base de datos

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cedula = $_POST['cedula'];
    $nombres = $_POST['nombre'];
    $edad = $_POST['edad'];
    $sexo = $_POST['sexo'];
    $nacimiento = $_POST['nacimiento'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $id_areas = $_POST['id_areas'];

    try {
        $sql = "INSERT INTO docentes 
                (cedula, nombres, edad, sexo, nacimiento, direccion, telefono, email, id_areas) 
                VALUES (:cedula, :nombres, :edad, :sexo, :nacimiento, :direccion, :telefono, :email, :id_areas)";
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
            ':id_areas'  => $id_areas
        ]);

        echo "<p style='color:green;'>✅ Docente registrado correctamente.</p>";
    } catch (PDOException $e) {
        echo "<p style='color:red;'>❌ Error: " . $e->getMessage() . "</p>";
    }
}
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Docentes</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/x-icon" href="img/logo.png">
</head>

<body>
    <form class="formulario" action="" method="POST">
        <img src="img/logo.png" alt="Logo CEE" class="logo">
        <h1>Registro de Docentes</h1>
        <label for="cedula">Escriba su Número de Cédula:</label>
        <input type="text" name="cedula" placeholder="Cédula" required>

        <label for="nombre">Escriba sus Nombres Completos:</label>
        <input type="text" name="nombre" placeholder="Nombres Completos" required>

        <label for="edad">Elija su Edad:</label>
        <input type="number" name="edad" placeholder="Edad" min="12" max="75" required>

        <label for="sexo">Elija su Sexo:</label>
        <select name="sexo" required>
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


        <button type="submit">Registrar</button>
        <button type="button"onclick="window.location.href='index.php';">Cancelar</button>
    </form>
</body>

</html>