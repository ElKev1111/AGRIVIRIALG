<?php
// Mostrar errores
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
        }
        h1 {
            text-align: center;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
            width: 100%;
            margin-top: 10px;
        }
    </style>
    <link rel="stylesheet" href="style/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer">
</head>
<body>
    
    <div class="container">
        <div class="form-content">
            <h1 id="title">Registro</h1>

            <form action="registro_usuario_be.php" method="POST" id="loginForm">
                <div class="input-group">
                    <!-- Campos animables -->
                    <div class="input-field animable" id="nameInput">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" id="nombre" name="nombre_cliente" placeholder="Nombre">
                    </div>
                    <div class="input-field">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" id="correo" name="correo_cliente" placeholder="Correo">
                    </div>
                    <div class="input-field">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" id="contrasena" name="contrasena" placeholder="Contraseña">
                    </div>
                    <div class="input-field animable" id="telefonoInput">
                        <i class="fa-solid fa-phone"></i>
                        <input type="tel" id="telefono" name="tel_cliente" placeholder="Teléfono">
                    </div>
                    <div class="input-field animable" id="direccionInput">
                        <i class="fa-solid fa-location-dot"></i>
                        <input type="text" id="direccion" name="direccion_cliente" placeholder="Dirección">
                    </div>
                    <div class="input-field animable" id="fechaInput">
                        <i class="fa-solid fa-calendar-day"></i>
                        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="Fecha de nacimiento">
                    </div>

                    <p>¿Olvidaste tu contraseña? <a href="#">Click aquí</a></p>
                </div>
                <div class="btn-field">
                    <button id="signUp" type="button">Registro</button>
                    <button id="signIn" type="button" class="disable">Login</button>
                </div>
                <div class="btn-field-center">
                    <button id="ingresar" type="submit" class="center-button">Registrar</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Simple JavaScript to toggle between login and register
        const signUp = document.getElementById("signUp");
        const signIn = document.getElementById("signIn");
        const nameInput = document.getElementById("nameInput");
        const telefonoInput = document.getElementById("telefonoInput");
        const direccionInput = document.getElementById("direccionInput");
        const fechaInput = document.getElementById("fechaInput");
        const title = document.getElementById("title");
        const loginForm = document.getElementById("loginForm");

        signIn.onclick = function() {
            nameInput.style.display = "none";
            telefonoInput.style.display = "none";
            direccionInput.style.display = "none";
            fechaInput.style.display = "none";
            title.innerHTML = "Login";
            signUp.classList.add("disable");
            signIn.classList.remove("disable");
            loginForm.action = "login_usuario_be.php";
            document.getElementById("ingresar").textContent = "Ingresar";
        }

        signUp.onclick = function() {
            nameInput.style.display = "block";
            telefonoInput.style.display = "block";
            direccionInput.style.display = "block";
            fechaInput.style.display = "block";
            title.innerHTML = "Registro";
            signUp.classList.remove("disable");
            signIn.classList.add("disable");
            loginForm.action = "registro_usuario_be.php";
            document.getElementById("ingresar").textContent = "Registrar";
        }
    </script>
</body>
</html>
