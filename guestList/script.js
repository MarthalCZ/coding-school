let formData = document.querySelector("#form-data")
let formInput = document.querySelector("#form-input")
let firstInput = document.querySelector("#first-input")
let itemCount = document.querySelector("#item-count")
let itemAmount = 0

// Zpracování formuláře
formInput.addEventListener("submit", function(event){

    // Vypnutí výchozího chování formuláře
    event.preventDefault()

    // Vytvoření odrážky
    let listItem = document.createElement("li")
    formData.appendChild(listItem)

    // Vytvoření chekboxu
    let checkBox = document.createElement("input")
    checkBox.setAttribute("type", "checkbox")
    checkBox.setAttribute("name", "item")
    listItem.appendChild(checkBox)

    // Vytvoření labelu
    let label = document.createElement("label")
    label.setAttribute("for", "item")
    listItem.appendChild(label)

    // Vypsání dat z formuláře
    function capitalize(string) {
        return string[0].toUpperCase() + string.slice(1);
    }

    let firstName = capitalize(event.target.elements.firstName.value)
    let lastName = capitalize(event.target.elements.lastName.value)
    let phonePrefix = event.target.elements.phonePrefix.value
    let phoneNumber = event.target.elements.phoneNumber.value

    if (event.target.elements.phoneNumber.value === "") {
        label.textContent = `${firstName} ${lastName}`
    } else {
        label.textContent = `${firstName} ${lastName} ${phonePrefix} ${phoneNumber}`
    }

    // Vymazání dat z inputu
    formInput.reset()

    // Focus na první input
    firstInput.focus()

    // Počítadlo položek
    itemCount.innerHTML = ""

    function counter() {
        let counter = document.createElement("p")
        itemAmount = formData.children.length
        itemCount.appendChild(counter)
        if (itemAmount === 1) {
            counter.textContent = `Celkem ${itemAmount} host:`
        } else if (itemAmount >= 2 & itemAmount <=4) {
            counter.textContent = `Celkem ${itemAmount} hosté:`
        } else {
            counter.textContent = `Celkem ${itemAmount} hostů:`
        }
    }

    counter()
})

// Odstranění posledních vypsaných dat
function removeLast(){
    formData.removeChild(formData.lastChild)
    formInput.counter()
}

// Odstranění všech vypsaných dat
function removeAll(){
    formData.innerHTML= ""
    itemCount.innerHTML = ""
}

// Automatické mezery v telefonním čísle
document.querySelector("#phone-number").addEventListener("keyup", function(){
    let number = this.value;
    if (number.length === 3 || number.length === 7) {
        this.value = this.value + " "
    }
 })
