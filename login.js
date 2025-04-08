const signUp = document.getElementById("signUp")
const signIn = document.getElementById("signIn")
const nameInput = document.getElementById("nameInput")
const telefonoInput = document.getElementById("telefonoInput")
const direccionInput = document.getElementById("direccionInput")
const fechaInput = document.getElementById("fechaInput")
const title = document.getElementById("title")
const loginForm = document.getElementById("loginForm")

signIn.onclick = () => {
  nameInput.style.maxHeight = "0"
  telefonoInput.style.maxHeight = "0"
  direccionInput.style.maxHeight = "0"
  fechaInput.style.maxHeight = "0"
  title.innerHTML = "Login"
  signUp.classList.add("disable")
  signIn.classList.remove("disable")
  loginForm.action = "php/login_usuario_be.php"
}

signUp.onclick = () => {
  nameInput.style.maxHeight = "60px"
  telefonoInput.style.maxHeight = "60px"
  direccionInput.style.maxHeight = "60px"
  fechaInput.style.maxHeight = "60px"
  title.innerHTML = "Registro"
  signUp.classList.remove("disable")
  signIn.classList.add("disable")
  loginForm.action = "php/registro_usuario_be.php"
}
