<?php
// Archivo: conexion.php
$servidor = "localhost";
$usuario = "root";
$clave = "";
$base_datos = "GOURMET";

$conexion = new mysqli($servidor, $usuario, $clave, $base_datos);

if ($conexion->connect_error) {
    die("Fallo en la conexión al servidor de base de datos: " . $conexion->connect_error);
}
?>