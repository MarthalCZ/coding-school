// Login/Register show password
let button = document.getElementById("show-password")
let email = document.getElementById("email")
let password = document.getElementById("password")
let passwordRepeat = document.getElementById("password-repeat")

if (button != null) {
    button.addEventListener("click", function(event){    
        event.preventDefault()
        if (button.innerHTML === "Show password") {
            password.setAttribute("type", "text")
            button.innerHTML = "Hide password"
        } else {
            password.setAttribute("type", "password")
            button.innerHTML = "Show password"
        }
    })
};

// Login/Register error messages
let emailError = document.getElementById("email-error");
let passwordError = document.getElementById("password-error");
let repeatError = document.getElementById("repeat-error");

if (email != null) {
    email.addEventListener("keyup", () => {
        if (email.value != undefined && email.value.includes("@")) {
            emailError.style.display = "none"
        } else {
            emailError.style.display = "block"
        }
    });
}

if (password != null) {
    password.addEventListener("keyup", () => {
        if (password.value != undefined && password.value.length > 8) {
            passwordError.style.display = "none"
        } else {
            passwordError.style.display = "block"
        }
    });
}

if (passwordRepeat != null) {
    passwordRepeat.addEventListener("keyup", () => {
        if (passwordRepeat.value != undefined && passwordRepeat.value === password.value) {
            repeatError.style.display = "none"
        } else {
            repeatError.style.display = "block"
        }
    });
}

// New task open/close modal
let dialog = document.querySelector(".modal");
let openButton = document.querySelector("#new-task");
let closeButton = document.querySelector("#create");
let form = document.querySelector(".modal__form")
let taskList = document.querySelector(".tasklist")
let firstInput = document.querySelector("#task")

if (openButton != null) {
    openButton.addEventListener("click", () => {
        dialog.showModal();
        firstInput.focus();
    });

    closeButton.addEventListener("click", () => {
        if (form.checkValidity() === true) {
            dialog.close();
        }
    });
}

// Create task
if (form != null) {
    form.addEventListener("submit", function(event) {

        // Vypnutí výchozího chování formuláře
        event.preventDefault()

        // Vypsání dat z formuláře
        function capitalize(string) {
            return string[0].toUpperCase() + string.slice(1);
        }

        let taskName = capitalize(event.target.elements.task.value)
        let deadlineValue = (event.target.elements.deadline.value)

        let day = deadlineValue.slice(8)
        let month = deadlineValue.slice(5, 7)
        let year = deadlineValue.slice(0, 4)

        let deadline = (`${day}.${month}.${year}`)

        // Vytvoření odrážky
        function createTask() {
            let task = document.createElement("li")
            task.classList.add("tasklist__task--todo")
            taskList.appendChild(task)
            let heading2 = document.createElement("h2")
            heading2.innerHTML = (taskName)
            task.appendChild(heading2)
            let paragraph = document.createElement("p")
            paragraph.innerHTML = (deadline)
            task.appendChild(paragraph)
            let button = document.createElement("button")
            button.classList.add("done-button")
            button.innerHTML = "Done"
            task.appendChild(button)
        }

        createTask()
        removeTask()

        // Vymazání dat z inputu
        form.reset()
    })
}


// Remove finished task
let task = document.getElementsByClassName("tasklist__task--todo")
let doneButton = document.getElementsByClassName("done-button")

function removeTask() {
    for(let i = 0 ; i < doneButton.length ; i++) {
        doneButton[i].addEventListener('click', function() {
            this.parentElement.remove();
        });
      }
}
removeTask()