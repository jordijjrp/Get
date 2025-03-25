<?php
include 'config.php';

try {
    $sql = "SELECT * FROM usuarios";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 0) {
        echo "<table border='1'>
                <tr>
                    <th>ID</th>
                    <th>Usuario</th>
                    <th>Nombre</th>
                    <th>Contraseña</th>
                </tr>";

        while ($fila = $resultado->fetch_assoc()) {
            echo "<tr>
                    <td>{$fila['id']}</td>
                    <td>{$fila['usuario']}</td>
                    <td>{$fila['nombre']}</td>
                    <td>{$fila['contraseña']}</td>
                </tr>";
        }

        echo "</table>";
    } else {
        echo "No hay usuarios registrados.";
    }

    $conexion->close();
} catch (Exception $e) {
    echo "<h1 style='color:#f00'>Error en la consulta: </h1>" . $e->getMessage();
}
?>
