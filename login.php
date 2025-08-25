<?php
session_start();
include("config.php"); // Conexión PDO
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar de Sesión</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/x-icon" href="img/logo.png">
</head>

<body>
    <form class="formulario" action="validar.php" method="POST">
        <img src="img/logo.png" alt="Logo CEE" class="logo">
        <h1>INICIO DE SESIÓN</h1>

        <label for="text">Ingrese su Cédula:</label>
        <input type="text" id="user" name="usuario" placeholder="Ingrese su Cédula" required>
        <label for="password">Ingrese su Contraseña:</label>
        <input type="password" name="clave" placeholder="Ingrese su Contraseña" required>

        <label for="rol">Elija su Rol:</label>
        <select name="rol" id="rol" required>
            <option value="" disabled selected>Seleccione el rol</option>
            <!-- Se llenará automáticamente -->
        </select>

        <button type="submit">Ingresar</button>
        <button type="button" onclick="window.location.href='index.php';">Cancelar</button>

        <a href="RegistroUsuario.php">¿No tienes Cuenta? Registrate</a>
    </form>

    <script>
        document.getElementById('user').addEventListener('blur', function() {
            const usuario = this.value.trim();
            if (usuario != '') {
                fetch('buscar_rol.php?usuario=' + encodeURIComponent(usuario))
                    .then(response => response.json())
                    .then(data => {
                        const selectRol = document.getElementById('rol');
                        selectRol.innerHTML = '<option value="" disabled selected>Seleccione el rol</option>';

                        if (data && data.length > 0) {
                            data.forEach(rol => {
                                const option = document.createElement('option');
                                option.value = rol.id_rol;
                                option.text = rol.rol;
                                selectRol.appendChild(option);
                            });
                        } else {
                            selectRol.innerHTML = '<option value="" disabled selected>Rol no encontrado</option>';
                        }
                    });
            }
        });
    </script>

</body>

</html>