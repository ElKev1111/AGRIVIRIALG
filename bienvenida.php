<?php
session_start();
if(!isset($_SESSION['usuario'])) {
    echo '<script>
            alert("Por favor inicie sesión primero");
            window.location = "login.php";
          </script>';
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 100px;
        }
        h1 {
            color: #4CAF50;
        }
        .logout {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #f44336;
            color: white;
            text-decoration: none;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <h1>Bienvenido a Agrivi</h1>
    <p>Has iniciado sesión como: <?php echo $_SESSION['usuario']; ?></p>
    <a href="cerrar_sesion.php" class="logout">Cerrar Sesión</a>
</body>
</html>
