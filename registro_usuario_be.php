<?php
// Mostrar errores
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Incluir archivo de conexión
include 'conexion_be.php';

// Verificar si se recibieron datos del formulario
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    die("Error: Este archivo solo acepta solicitudes POST");
}

// Mostrar datos recibidos (solo para depuración)
echo "<h2>Datos recibidos:</h2>";
echo "<pre>";
print_r($_POST);
echo "</pre>";

// Obtener datos del formulario
$nombre_cliente = isset($_POST['nombre_cliente']) ? $_POST['nombre_cliente'] : '';
$correo_cliente = isset($_POST['correo_cliente']) ? $_POST['correo_cliente'] : '';
$contrasena = isset($_POST['contrasena']) ? $_POST['contrasena'] : '';
$tel_cliente = isset($_POST['tel_cliente']) ? $_POST['tel_cliente'] : '';
$direccion_cliente = isset($_POST['direccion_cliente']) ? $_POST['direccion_cliente'] : '';
$fecha_nacimiento = isset($_POST['fecha_nacimiento']) ? $_POST['fecha_nacimiento'] : '';

// Verificar que todos los campos estén completos
if (empty($nombre_cliente) || empty($correo_cliente) || empty($contrasena) || 
    empty($tel_cliente) || empty($direccion_cliente) || empty($fecha_nacimiento)) {
    die("Error: Todos los campos son obligatorios");
}

// Preparar la consulta SQL
$query = "INSERT INTO cliente (nombre_cliente, correo_cliente, contrasena, tel_cliente, direccion_cliente, fecha_nacimiento) 
          VALUES ('$nombre_cliente', '$correo_cliente', '$contrasena', '$tel_cliente', '$direccion_cliente', '$fecha_nacimiento')";

// Mostrar la consulta SQL (solo para depuración)
echo "<p>Consulta SQL: " . htmlspecialchars($query) . "</p>";

// Ejecutar la consulta
$ejecutar = mysqli_query($conexion, $query);

// Verificar si la consulta se ejecutó correctamente
if ($ejecutar) {
    echo "<p>Usuario registrado exitosamente</p>";
    echo "<p><a href='login.php'>Volver al formulario</a></p>";
} else {
    echo "<p>Error al registrar usuario: " . mysqli_error($conexion) . "</p>";
    echo "<p><a href='login.php'>Volver al formulario</a></p>";
}

// Cerrar la conexión
mysqli_close($conexion);
?>
