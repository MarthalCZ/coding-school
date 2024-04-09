// Login/Register show warning
let emailInput = document.querySelector("#email");
let passwordInput = document.querySelector("#password");
let passwordRepeatInput = document.querySelector("#repeat");

let emailError = document.querySelector("#email-warning");
let passwordError = document.querySelector("#password-warning");
let repeatError = document.querySelector("#repeat-warning");

if (emailInput != null) {
    email.addEventListener("keyup", () => {
        if (emailInput.value != undefined && emailInput.value.includes("@")) {
            emailError.style.display = "none"
        } else {
            emailError.style.display = "block"
        }
    });
}

if (passwordInput != null) {
    passwordInput.addEventListener("keyup", () => {
        if (passwordInput.value != undefined && passwordInput.value.length > 7) {
            passwordError.style.display = "none"
            
        } else {
            passwordError.style.display = "block"
        }
    });
}

if (passwordRepeatInput != null) {
    passwordRepeatInput.addEventListener("keyup", () => {
        if (passwordRepeatInput.value != undefined && passwordRepeatInput.value === passwordInput.value) {
            repeatError.style.display = "none"
        } else {
            repeatError.style.display = "block"
        }
    });
}