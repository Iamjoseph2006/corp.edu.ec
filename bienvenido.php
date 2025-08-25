<?php
// incluir conexión
include 'config.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/x-icon" href="img/logo.png">
</head>

<body>
    <div class="admin-container">
        <!-- MENÚ LATERAL -->
        <!-- Sidebar colapsable solo con CSS -->
        <input type="checkbox" id="sidebarToggle" hidden>
        <aside class="sidebar">
            <label for="sidebarToggle" class="toggle-btn">⇨</label>
            <h2>Panel Admin</h2>
            <ul>
                <li><a href="#docentes">📘 <span class="text">Docentes</span></a></li>
                <li><a href="#estudiantes">👩‍🎓 <span class="text">Estudiantes</span></a></li>
                <li><a href="#capacitaciones">📚 <span class="text">Capacitaciones</span></a></li>
                <li><a href="#reportes">📊 <span class="text">Reportes</span></a></li>
                <li><a href="index.php">⬅ <span class="text">Volver al Inicio</span></a></li>
            </ul>
        </aside>


        <!-- CONTENIDO PRINCIPAL -->
        <main class="main-content">
            <h1>Bienvenido Administrador</h1>
            <p>Desde este panel puedes gestionar la información de la Corporación Educativa Ecuador.</p>

            <!-- Gestión de docentes -->
            <section id="docentes" class="table-container">
                <?php
                $docentes = $pdo->query("
    SELECT d.id, d.cedula, d.nombres, d.edad, d.sexo,  d.nacimiento, d.direccion, d.telefono, d.email, a.area AS nombre_area
    FROM docentes d
    INNER JOIN areas a ON d.id_areas = a.id ")->fetchAll(PDO::FETCH_ASSOC);

                ?>
                <h2>Listado de Docentes</h2>
                <a href="RegistroDocentes.php" class="btn">➕ Agregar Docente</a>

                <div class="table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Cédula</th>
                                <th>Nombres Completos</th>
                                <th>Edad</th>
                                <th>Sexo</th>
                                <th>Fecha de Nacimiento</th>
                                <th>Dirección</th>
                                <th>Teléfono</th>
                                <th>Correo Electrónico</th>
                                <th>Área</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($docentes as $d): ?>
                                <tr>
                                    <td><?= $d['id'] ?></td>
                                    <td><?= $d['cedula'] ?></td>
                                    <td><?= $d['nombres'] ?></td>
                                    <td><?= $d['edad'] ?></td>
                                    <td><?= $d['sexo'] ?></td>
                                    <td><?= $d['nacimiento'] ?></td>
                                    <td><?= $d['direccion'] ?></td>
                                    <td><?= $d['telefono'] ?></td>
                                    <td><?= $d['email'] ?></td>
                                    <td><?= $d['nombre_area'] ?></td>
                                    <td>
                                        <a href="?delete_docente=<?= $d['id'] ?>"
                                            onclick="return confirm('¿Eliminar este docente?')"
                                            class="btn btn-danger btn-sm">Eliminar</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </section>

            <!-- Gestión de estudiantes -->
            <section id="estudiantes" class="table-container">
                <?php
                $estudiantes = $pdo->query("SELECT * FROM estudiantes")->fetchAll(PDO::FETCH_ASSOC);
                ?>
                <h2>Listado de Estudiantes</h2>
                <a href="RegistroEstudiantes.php" class="btn">➕ Agregar Estudiante</a>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Cédula</th>
                            <th>Nombres Completos</th>
                            <th>Edad</th>
                            <th>Sexo</th>
                            <th>Fecha de Nacimiento</th>
                            <th>Dirección</th>
                            <th>Teléfono</th>
                            <th>Correo Electrónico</th>
                            <th>Área</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($docentes as $d): ?>
                            <tr>
                                <td><?= $d['id'] ?></td>
                                <td><?= $d['cedula'] ?></td>
                                <td><?= $d['nombres'] ?></td>
                                <td><?= $d['edad'] ?></td>
                                <td><?= $d['sexo'] ?></td>
                                <td><?= $d['nacimiento'] ?></td>
                                <td><?= $d['direccion'] ?></td>
                                <td><?= $d['telefono'] ?></td>
                                <td><?= $d['email'] ?></td>
                                <td><?= $d['nombre_area'] ?></td>
                                <td>
                                    <a href="?delete_docente=<?= $d['id'] ?>"
                                        onclick="return confirm('¿Eliminar este docente?')"
                                        class="btn btn-danger btn-sm">Eliminar</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </section>

            <!-- Gestión de capacitaciones -->
            <section id="capacitaciones" class="table-container">
                <?php
                $areas = $pdo->query("SELECT * FROM areas")->fetchAll(PDO::FETCH_ASSOC);
                ?>
                <h2>Capacitaciones</h2>
                <a href="RegistroCapacitaciones.php" class="btn">➕ Nueva Capacitación</a>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Área de Capacitación</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($areas as $a): ?>
                            <tr>
                                <td><?= $a['id'] ?></td>
                                <td><?= $a['area'] ?></td>
                                <td>
                                    <a href="?delete_capacitacion=<?= $a['id'] ?>" onclick="return confirm('¿Eliminar esta capacitación?')" class="btn btn-danger btn-sm">Eliminar</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </section>

            <!-- Reportes -->
            <section id="reportes" class="table-container">
                <h2>Reportes</h2>
                <p>Genera reportes de asistencia, rendimiento y capacitaciones.</p>
                <a href="#" class="btn">📄 Generar Reporte</a>
            </section>
        </main>
    </div>
</body>

</html>