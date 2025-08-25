<?php
session_start();
include("config.php"); // Conexión PDO

$mensaje = "";

// Traer clases, turnos y estados para los selects
$clases = $pdo->query("SELECT * FROM clases")->fetchAll(PDO::FETCH_ASSOC);
$turnos = $pdo->query("SELECT * FROM turno")->fetchAll(PDO::FETCH_ASSOC);
$estados = $pdo->query("SELECT * FROM estado")->fetchAll(PDO::FETCH_ASSOC);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cedula = $_POST['cedula'];
    $id_clase = $_POST['id_clases'];
    $id_turno = $_POST['id_turno'];
    $id_estado = $_POST['id_estado'];
    $observacion = $_POST['observacion'] ?? '';

    // Buscar estudiante o docente
    $stmt = $pdo->prepare("
        SELECT 'estudiante' AS tipo, id, nombres, id_areas, id_clases, id_turno 
        FROM estudiantes WHERE cedula = :cedula
        UNION
        SELECT 'docente' AS tipo, id, nombres, id_areas, id_clases, id_turno 
        FROM docentes WHERE cedula = :cedula
    ");
    $stmt->execute([':cedula' => $cedula]);
    $persona = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($persona) {
        if ($persona['tipo'] === 'estudiante') {
            // Insertar asistencia para estudiante
            $stmt2 = $pdo->prepare("
                INSERT INTO asistencia 
                (id_estudiantes, fecha, id_clases, id_turno, id_estado, observacion)
                VALUES (:id_estudiantes, :fecha, :id_clases, :id_turno, :id_estado, :observacion)
            ");
            $stmt2->execute([
                ':id_estudiantes' => $persona['id'],
                ':fecha' => date('Y-m-d'),
                ':id_clases' => $id_clase,
                ':id_turno' => $id_turno,
                ':id_estado' => $id_estado,
                ':observacion' => $observacion
            ]);
        } else {
            // Insertar asistencia para docente
            $stmt2 = $pdo->prepare("
                INSERT INTO asistencia 
                (id_docentes, fecha, id_clases, id_turno, id_estado, observacion)
                VALUES (:id_docentes, :fecha, :id_clases, :id_turno, :id_estado, :observacion)
            ");
            $stmt2->execute([
                ':id_docentes' => $persona['id'],
                ':fecha' => date('Y-m-d'),
                ':id_clases' => $id_clase,
                ':id_turno' => $id_turno,
                ':id_estado' => $id_estado,
                ':observacion' => $observacion
            ]);
        }

        // Mensaje de éxito usando session para mostrarlo después
        $mensaje = "✅ Asistencia registrada correctamente para {$persona['nombres']}.";
    } else {
        $mensaje = "❌ Error: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Asistencia</title>
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
        <h1>Registro de Asistencia</h1>

        <label for="cedula">Cédula:</label>
        <input type="text" name="cedula" id="cedula" placeholder="Ingrese la cédula" required onblur="buscarPersona()">

        <!-- Este campo se llena con el ID de la persona encontrada -->
        <input type="hidden" name="id_docentes" id="id_docentes">
        <input type="hidden" name="id_estudiantes" id="id_estudiantes">


        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" readonly>

        <label for="id_area">Área:</label>
        <select name="id_area" id="id_area" required>
            <option value="" disabled selected>Seleccione un área</option>
            <?php foreach ($areas as $a): ?>
                <option value="<?= $a['id'] ?>"><?= $a['area'] ?></option>
            <?php endforeach; ?>
        </select>

        <label for="fecha">Fecha:</label>
        <input type="date" id="fecha" name="fecha" value="<?= date('Y-m-d'); ?>" readonly>


        <label for="id_clases">Clase:</label>
        <select name="id_clases" id="id_clases" required>
            <option value="" disabled selected>Seleccione una clase</option>
            <?php foreach ($clases as $c): ?>
                <option value="<?= $c['id'] ?>"><?= $c['dia'] ?></option>
            <?php endforeach; ?>
        </select>

        <label for="id_turno">Turno:</label>
        <select name="id_turno" id="id_turno" required>
            <option value="" disabled selected>Seleccione un turno</option>
            <?php foreach ($turnos as $t): ?>
                <option value="<?= $t['id'] ?>"><?= $t['turno'] ?></option>
            <?php endforeach; ?>
        </select>


        <label for="id_estado">Estado de Asistencia:</label>
        <select name="id_estado" required>
            <option value="" disabled selected>Seleccione la Asistencia</option>
            <?php foreach ($estados as $e): ?>
                <option value="<?= $e['id'] ?>"><?= $e['estado'] ?></option>
            <?php endforeach; ?>
        </select>

        <label for="observacion">Observación:</label>
        <input type="text" name="observacion" placeholder="Observación">

        <button type="submit">Registrar</button>
        <button type="button" onclick="window.location.href='index.php';">Cancelar</button>
    </form>

    <script>
        document.getElementById('cedula').addEventListener('blur', function() {
            let cedula = this.value;

            if (cedula.length > 0) {
                fetch('buscarPersona.php?cedula=' + cedula)
                    .then(response => response.json())
                    .then(data => {
                        if (data) {
                            document.getElementById('nombre').value = data.nombres;

                            // Área
                            let areaSelect = document.getElementById('id_area');
                            areaSelect.innerHTML = `<option value="${data.id_area}" selected>${data.area}</option>`;

                            // Clase
                            let claseSelect = document.getElementById('id_clases');
                            claseSelect.innerHTML = `<option value="${data.id_clase}" selected>${data.dia}</option>`;

                            // Turno
                            let turnoSelect = document.getElementById('id_turno');
                            turnoSelect.innerHTML = `<option value="${data.id_turno}" selected>${data.turno}</option>`;
                        }
                    });
            }
        });
    </script>


</body>

</html>