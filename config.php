<?php
$host = "localhost";
$user = "usuarioLogin_db";
$password = "1234";
$database = "usuarios_db";

$conexion = new mysqli($host, $user, $password, $database);

if ($conexion->connect_error) {
    die("<h1 style='color:#f00'>Error con la base de datos: </h1>" . $conexion->connect_error);
}
?>
