<?php
class Usuarios {
    private $conexion;

    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    public function obtenerUsuarios() {
        try {
            $sql = "SELECT * FROM usuarios";
            $resultado = $this->conexion->query($sql);
            $filas = $resultado->fetch_all(MYSQLI_ASSOC);

            if (count($filas) > 0) {
                echo "<table border='1'>
                        <tr>
                            <th>ID</th>
                            <th>Usuario</th>
                            <th>Nombre</th>
                            <th>Contraseña</th>
                        </tr>";
                
                foreach ($filas as $fila) {
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
        } catch (Exception $e) {
            echo "<h1 style='color:#f00'>Error en la consulta: </h1>" . $e->getMessage();
        }
    }
}

include 'config.php';
$usuarios = new Usuarios($conexion);
$usuarios->obtenerUsuarios();
?>
