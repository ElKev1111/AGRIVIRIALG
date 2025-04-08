<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Registro</title>
    <link rel="stylesheet" href="style/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer">
</head>
<body>
    
    <div class="container">
        <div class="form-content">
            <h1 id="title">Registro</h1>

            <form action="" method="POST" id="loginForm">
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
                    <button id="ingresar" type="submit" class="center-button">Ingresar</button>
                </div>
            </form>
        </div>
    </div>

    <script src="js/login.js"></script>
</body>
</html>
