// Login show password
let button = document.getElementById("show-password")
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
        firstInput.focus()
    });

    closeButton.addEventListener("click", () => {
        if (form.checkValidity() === true) {
            dialog.close();
        }
    });
}

// Create task
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
    let CreateTask = function () {
        let task = document.createElement("li")
        task.classList.add("tasklist__task--todo")
        taskList.appendChild(task)
        let heading2 = document.createElement("h1")
        heading2.innerHTML = (taskName)
        task.appendChild(heading2)
        let paragraph = document.createElement("p")
        paragraph.innerHTML = (deadline)
        task.appendChild(paragraph)
        let button = document.createElement("button")
        button.innerHTML = "Done"
        task.appendChild(button)
    }

    CreateTask()

     // Vymazání dat z inputu
     form.reset()
})

/*
// Remove finished task
let task = document.querySelector(".tasklist__task--todo")
let doneButton = document.querySelector(".done-button")

task.addEventListener("click", () => {
       doneButton.parentElement.remove()
    })
*/