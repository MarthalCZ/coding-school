const proteinConst = 4.063;
const carbsConst = 3.824;
const fatConst = 8.843;
const fiberConst = 1.912;
const alcoholConst = 6.931;

const ingredientForm = document.getElementsByClassName("my-ingredients")[0];
const submitButton = document.getElementById("save-ingredient");
const ratioInputs = document.querySelectorAll(".ingredient-item__ratio");
const nameInput = document.getElementById("name");
const energyInput = document.getElementById("energy");
const nameDisplay = document.getElementById("name-display");

let nameCurrentValue = "";
let energyCurrentValue = "";

// Function to update nameDisplay based on nameInput value
function updateNameDisplay() {
    // Update the global variable
    nameCurrentValue = nameInput.value.trim();
    nameDisplay.innerHTML = nameCurrentValue || "Název ingredience nebyl zadán";
}

// Event listener to update nameDisplay when nameInput changes
nameInput.addEventListener("input", updateNameDisplay);

// Function to validate energyInput value
function validateEnergyInput() {
    // Update the global variable
    energyCurrentValue = energyInput.value.trim();
    console.log(energyCurrentValue);
}

// Event listener on energyInput to validate when it changes
energyInput.addEventListener("input", validateEnergyInput);

// Initial display when the page loads
updateNameDisplay();
// Initialize the global variable
energyCurrentValue = energyInput.value.trim();
ratioInputs.forEach((input, index) => {
    const nameValue = `ratio-${index + 1}`;
    input.setAttribute('name', nameValue);
});

// Function to handle ratioInputs validation and set empty values to 0
function handleRatioInputs() {
    ratioInputs.forEach(input => {
        if (input.value.trim() === "") {
            // Set the value to "0" if empty
            input.value = "0";
        }
    });
}

// Event listener on submitButton to check form validation before submitting
submitButton.addEventListener("click", function(event) {
    // Check nameInput, energyInput, and ratioInputs before allowing form submission
    if (nameCurrentValue === "" || energyCurrentValue === "") {
        // Display a unified alert message if any required field is empty
        alert('Nejprve prosím vyplňte pole "Název ingredience" a "Energie".');
        // Prevent default form submission
        event.preventDefault();
    } else {
        // Handle ratioInputs before submitting
        handleRatioInputs();
        // Prevent default form submission
        event.preventDefault();
        // Submit the form
        ingredientForm.submit();
    }
});