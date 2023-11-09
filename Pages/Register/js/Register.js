function validatePasswords() {
    var password = document.getElementById("Password");
    var confirmPassword = document.getElementById("confirmar");
    if (password.value != confirmPassword.value) {
        alert("Las contraseñas no coinciden");
        return false;
    }
    return true;
}
