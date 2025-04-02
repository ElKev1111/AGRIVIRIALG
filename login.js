let signUp = document.getElementById("signUp");
let signIn = document.getElementById("signIn");
let nameInput = document.getElementById("nameInput");
let title = document.getElementById("title");

signIn.onclick = function() {
    nameInput.style.maxHeight = "0";
    title.innerHTML = "Login";
    signUp.classList.add("disable");
    signIn.classList.remove("disable");
}

signUp.onclick = function() {
    nameInput.style.maxHeight = "60px";
    title.innerHTML = "Registro";
    signUp.classList.remove("disable");
    signIn.classList.add("disable");
}

document.getElementById("loginForm").addEventListener("submit", function(event) {
    event.preventDefault();
    validarFormulario();
});

function validarFormulario() {
    let correo = document.getElementById("correo").value;
    let contrasena = document.getElementById("contrasena").value;

    if (!correo || !validarEmail(correo)) {
        alert("Por favor ingresa un correo válido.");
        return;
    }

    if (!contrasena) {
        alert("Por favor ingresa una contraseña.");
        return;
    }

    // Si todo es válido, redirigimos a la página principal.
    window.location.href = "index.html"; // Asegúrate de que la ruta a tu página principal sea correcta
}

function validarEmail(email) {
    const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return regex.test(email);
}
