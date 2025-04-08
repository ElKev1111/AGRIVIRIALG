<?php
session_start();
include 'conexion_be.php';

$correo = $_POST['correo_cliente'];
$contrasena = $_POST['contrasena'];

// Verificar que los campos no estén vacíos
if(empty($correo) || empty($contrasena)) {
    echo '<script>
            alert("Por favor complete todos los campos");
            window.location = "login.php";
          </script>';
    exit();
}

$query = "SELECT * FROM cliente WHERE correo_cliente = '$correo' AND contrasena = '$contrasena'";
$resultado = mysqli_query($conexion, $query);

if(mysqli_num_rows($resultado) > 0) {
    $_SESSION['usuario'] = $correo;
    echo '<script>
            alert("Inicio de sesión exitoso");
            window.location = "bienvenida.php";
          </script>';
} else {
    echo '<script>
            alert("Usuario o contraseña incorrectos");
            window.location = "login.php";
          </script>';
}

mysqli_close($conexion);
?>
