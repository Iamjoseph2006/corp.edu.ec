<?php
include("config.php");

if (isset($_GET['cedula'])) {
    $cedula = $_GET['cedula'];

    // 🔹 Primero busca en estudiantes
    $sql = "SELECT e.id, e.nombres, 
                   a.id AS id_area, a.area, 
                   c.id AS id_clase, c.dia, 
                   t.id AS id_turno, t.turno
            FROM estudiantes e
            JOIN areas a ON e.id_areas = a.id  
            JOIN clases c ON e.id_clases = c.id
            JOIN turno t ON e.id_turno = t.id
            WHERE e.cedula = :cedula
            LIMIT 1";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['cedula' => $cedula]);
    $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

    // 🔹 Si no está en estudiantes, busca en docentes
    if (!$resultado) {
        $sql = "SELECT d.id, d.nombres, 
                       a.id AS id_area, a.area, 
                       c.id AS id_clase, c.dia, 
                       t.id AS id_turno, t.turno
                FROM docentes d
                JOIN areas a ON d.id_areas = a.id  
                JOIN clases c ON d.id_clases = c.id
                JOIN turno t ON d.id_turno = t.id
                WHERE d.cedula = :cedula
                LIMIT 1";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['cedula' => $cedula]);
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
    }

    echo json_encode($resultado);
}