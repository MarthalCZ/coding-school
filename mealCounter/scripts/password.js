// Login/Register show password
let button = document.getElementById("show")
let password = document.getElementById("password") 

if (button != null) {
    button.addEventListener("click", function(event){   
        event.preventDefault()
        if (button.innerHTML === "Zobrazit heslo") {
            password.setAttribute("type", "text")
            button.innerHTML = "Skrýt heslo"
        } else {
            password.setAttribute("type", "password")
            button.innerHTML = "Zobrazit heslo"
        }
    })
};