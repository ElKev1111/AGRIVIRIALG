<?php
// Mostrar errores
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Conexión a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "agrivi");

// Verificar conexión
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
echo "<!-- Conexión exitosa a la base de datos -->";
?>
