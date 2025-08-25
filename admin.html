<?php
// incluir conexión
include 'config.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Panel de Administración</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4">
        <h1 class="mb-4">Panel de Administración</h1>

        <!-- Navegación -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="docentes-tab" data-bs-toggle="tab" data-bs-target="#docentes" type="button" role="tab">Docentes</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="estudiantes-tab" data-bs-toggle="tab" data-bs-target="#estudiantes" type="button" role="tab">Estudiantes</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="capacitaciones-tab" data-bs-toggle="tab" data-bs-target="#capacitaciones" type="button" role="tab">Capacitaciones</button>
            </li>
        </ul>

        <!-- Contenido -->
        <div class="tab-content mt-3" id="myTabContent">

            <!-- DOCENTES -->
            <div class="tab-pane fade show active" id="docentes" role="tabpanel">
                <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_docente'])) {
                    $stmt = $pdo->prepare("INSERT INTO docentes (cedula, nombres, telefono, nacimiento, sexo) VALUES (?, ?, ?, ?, ?)");
                    $stmt->execute([$_POST['cedula'], $_POST['nombres'], $_POST['telefono'], $_POST['nacimiento'], $_POST['sexo']]);
                }
                if (isset($_GET['delete_docente'])) {
                    $stmt = $pdo->prepare("DELETE FROM docentes WHERE id=?");
                    $stmt->execute([$_GET['delete_docente']]);
                }
                $docentes = $pdo->query("SELECT * FROM docentes")->fetchAll(PDO::FETCH_ASSOC);
                ?>
                <div class="card">
                    <div class="card-header">
                        <h5>Gestión de Docentes</h5>
                    </div>
                    <div class="card-body">
                        <form method="post" class="row g-2 mb-3">
                            <input type="hidden" name="add_docente" value="1">
                            <div class="col"><input type="text" name="cedula" class="form-control" placeholder="Cédula" required></div>
                            <div class="col"><input type="text" name="nombres" class="form-control" placeholder="Nombres" required></div>
                            <div class="col"><input type="text" name="telefono" class="form-control" placeholder="Teléfono"></div>
                            <div class="col"><input type="date" name="nacimiento" class="form-control"></div>
                            <div class="col">
                                <select name="sexo" class="form-select">
                                    <option value="M">Masculino</option>
                                    <option value="F">Femenino</option>
                                    <option value="F">Otro</option>
                                </select>
                            </div>
                            <div class="col"><button class="btn btn-success">Agregar</button></div>
                        </form>

                        <table class="table table-bordered">
                            <tr>
                                <th>ID</th>
                                <th>Cédula</th>
                                <th>Nombres</th>
                                <th>Teléfono</th>
                                <th>Nacimiento</th>
                                <th>Sexo</th>
                                <th>Acciones</th>
                            </tr>
                            <?php foreach ($docentes as $d): ?>
                                <tr>
                                    <td><?= $d['id'] ?></td>
                                    <td><?= $d['cedula'] ?></td>
                                    <td><?= $d['nombres'] ?></td>
                                    <td><?= $d['telefono'] ?></td>
                                    <td><?= $d['nacimiento'] ?></td>
                                    <td><?= $d['sexo'] ?></td>
                                    <td>
                                        <a href="?delete_docente=<?= $d['id'] ?>" 
                                        onclick="return confirm('¿Eliminar este docente?')" 
                                        class="btn btn-danger btn-sm">🗑️ Eliminar</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>

            <!-- ESTUDIANTES -->
            <div class="tab-pane fade" id="estudiantes" role="tabpanel">
                <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_estudiante'])) {
                    $stmt = $pdo->prepare("INSERT INTO estudiantes (cedula, nombres, nacimiento, edad, sexo, direccion, telefono, email) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
                    $stmt->execute([$_POST['cedula'], $_POST['nombres'], $_POST['nacimiento'], $_POST['edad'], $_POST['sexo'], $_POST['direccion'], $_POST['telefono'], $_POST['email']]);
                }
                if (isset($_GET['delete_estudiante'])) {
                    $stmt = $pdo->prepare("DELETE FROM estudiantes WHERE id=?");
                    $stmt->execute([$_GET['delete_estudiante']]);
                }
                $estudiantes = $pdo->query("SELECT * FROM estudiantes")->fetchAll(PDO::FETCH_ASSOC);
                ?>
                <div class="card">
                    <div class="card-header">
                        <h5>Gestión de Estudiantes</h5>
                    </div>
                    <div class="card-body">
                        <form method="post" class="row g-2 mb-3">
                            <input type="hidden" name="add_estudiante" value="1">
                            <div class="col"><input type="text" name="cedula" class="form-control" placeholder="Cédula" required></div>
                            <div class="col"><input type="text" name="nombres" class="form-control" placeholder="Nombres" required></div>
                            t<div class="col"><input type="date" name="nacimieno" class="form-control"></div>
                            <div class="col"><input type="number" name="edad" class="form-control" placeholder="Edad"></div>
                            <div class="col"><select name="sexo" class="form-select">
                                    <option value="M">M</option>
                                    <option value="F">F</option>
                                </select></div>
                            <div class="col"><input type="text" name="direccion" class="form-control" placeholder="Dirección"></div>
                            <div class="col"><input type="text" name="telefono" class="form-control" placeholder="Teléfono"></div>
                            <div class="col"><input type="email" name="email" class="form-control" placeholder="Email"></div>
                            <div class="col"><button class="btn btn-success">Agregar</button></div>
                        </form>

                        <table class="table table-bordered">
                            <tr>
                                <th>ID</th>
                                <th>Cédula</th>
                                <th>Nombres</th>
                                <th>Nacimiento</th>
                                <th>Edad</th>
                                <th>Sexo</th>
                                <th>Dirección</th>
                                <th>Teléfono</th>
                                <th>Email</th>
                                <th>Acciones</th>
                            </tr>
                            <?php foreach ($estudiantes as $e): ?>
                                <tr>
                                    <td><?= $e['id'] ?></td>
                                    <td><?= $e['cedula'] ?></td>
                                    <td><?= $e['nombres'] ?></td>
                                    <td><?= $e['nacimiento'] ?></td>
                                    <td><?= $e['edad'] ?></td>
                                    <td><?= $e['sexo'] ?></td>
                                    <td><?= $e['direccion'] ?></td>
                                    <td><?= $e['telefono'] ?></td>
                                    <td><?= $e['email'] ?></td>
                                    <td>
                                        <a href="?delete_estudiante=<?= $e['id'] ?>" onclick="return confirm('¿Eliminar este estudiante?')" class="btn btn-danger btn-sm">🗑️ Eliminar</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>

            <!-- CAPACITACIONES -->
            <div class="tab-pane fade" id="capacitaciones" role="tabpanel">
                <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_capacitacion'])) {
                    $stmt = $pdo->prepare("INSERT INTO areas (area) VALUES (?)");
                    $stmt->execute([$_POST['area']]);
                }
                if (isset($_GET['delete_capacitacion'])) {
                    $stmt = $pdo->prepare("DELETE FROM areas WHERE id=?");
                    $stmt->execute([$_GET['delete_capacitacion']]);
                }
                $areas = $pdo->query("SELECT * FROM areas")->fetchAll(PDO::FETCH_ASSOC);
                ?>
                <div class="card">
                    <div class="card-header">
                        <h5>Gestión de Capacitaciones</h5>
                    </div>
                    <div class="card-body">
                        <form method="post" class="row g-2 mb-3">
                            <input type="hidden" name="add_capacitacion" value="1">
                            <div class="col"><input type="text" name="area" class="form-control" placeholder="Nombre del área/capacitación" required></div>
                            <div class="col"><button class="btn btn-success">Agregar</button></div>
                        </form>

                        <table class="table table-bordered">
                            <tr>
                                <th>ID</th>
                                <th>Área/Capacitación</th>
                                <th>Acciones</th>
                            </tr>
                            <?php foreach ($areas as $a): ?>
                                <tr>
                                    <td><?= $a['id'] ?></td>
                                    <td><?= $a['area'] ?></td>
                                    <td>
                                        <a href="?delete_capacitacion=<?= $a['id'] ?>" onclick="return confirm('¿Eliminar esta capacitación?')" class="btn btn-danger btn-sm">🗑️ Eliminar</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>