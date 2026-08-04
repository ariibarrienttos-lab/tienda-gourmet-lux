// Archivo: validaciones.js
document.addEventListener("DOMContentLoaded", function() {
    const passwordInput = document.getElementById("password");
    const passwordHelp = document.getElementById("passwordHelp");

    // Condicional de seguridad: Solo ejecuta si encuentra los elementos en el HTML
    if (passwordInput && passwordHelp) {
        passwordInput.addEventListener("input", function() {
            const passValue = passwordInput.value;
            const tieneNumero = /\d/.test(passValue);
            
            if (passValue.length >= 8 && tieneNumero) {
                passwordHelp.textContent = "¡Contraseña segura y válida!";
                passwordHelp.style.color = "#41ad7e"; // Tono verde del diseño
            } else {
                passwordHelp.textContent = "Débil. Debe tener al menos 8 caracteres y un número.";
                passwordHelp.style.color = "var(--coral-dark)"; // Tono rojo del diseño
            }
        });
    }
});