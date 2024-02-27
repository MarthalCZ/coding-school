let form = document.getElementById("login")
let button = document.getElementById("show-password")
let password = document.getElementById("password")

button.addEventListener("click", function(event){    
    event.preventDefault()
    if (button.innerHTML === "Show") {
        password.setAttribute("type", "text")
        button.innerHTML = "Hide"
    } else {
        password.setAttribute("type", "password")
        button.innerHTML = "Show"
    }
})