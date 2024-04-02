// Define macro constants
const proteinConst = 4.063;
const carbsConst = 3.824;
const fatConst = 8.843;
const fiberConst = 1.912;
const alcoholConst = 6.931;

// Initialize array to store ingredient objects
let ingredientObjects = [];

// Define a function to limit number of decimal spaces
const limitDecimals = (number, decimalPlaces) => {
    const multiplier = Math.pow(10, decimalPlaces);
    return Math.round(number * multiplier) / multiplier;
}

// Define a function to calculate ingredient pure energy
const calculateIngredientPureEnergy = (protein, carbs, fat) => {
    return limitDecimals((1 / ((proteinConst * protein) + (carbsConst * carbs) + (fatConst * fat))), 4);
};

// Define a function to calculate ingredient total energy
const calculateIngredientTotalEnergy = (energyCurrentValue, amount) => {
    return limitDecimals(((energyCurrentValue * amount) / 100), 4);
};

// Define a function to calculate ingredient weight
const calculateIngredientWeight = (pureEnergy, totalEnergy) => {
    return limitDecimals(((pureEnergy * totalEnergy) * 100), 4);
};

// Define a function to calculate total weight
const calculateTotalWeight = () => {
    // Initialize total weight
    let totalWeight = 0;

    // Calculate total weight
    ingredientObjects.forEach(object => {
        totalWeight += object.ingredientWeight;
    });

    // Return the total weight with limited decimals
    return limitDecimals(totalWeight, 0);
};

// Define a function to calculate total amount
const calculateTotalAmount = () => {
    // Initialize total amount
    let totalAmount = 0;

    // Calculate total amount
    ingredientObjects.forEach(object => {
        totalAmount += object.ingredientAmount;
    });

    // Return the total amount with limited decimals
    return limitDecimals(totalAmount, 0);
};

// Extract current meal name
const nameInput = document.getElementById("name");
let nameCurrentValue = nameInput.value;

nameInput.addEventListener("input", function() {
    nameCurrentValue = nameInput.value;
});

// Extract element displaying total weight and amount
const totalWeightDisplay = document.getElementById("weight");
const totalAmountDisplay = document.getElementById("ratio");

// Extract all ingredient items
const ingredientItems = document.querySelectorAll(".ingredient-item")

ingredientItems.forEach(ingredientObject => {
    // Extract ingredient name
    const name = ingredientObject.querySelector(".ingredient-item__name").innerHTML;

    // Extract current energy value
    const energyInput = document.getElementById("energy");
    let energyCurrentValue = energyInput.value;
    
    energyInput.addEventListener("input", () => {
        let parsedInputValue = parseFloat(energyInput.value);

        // If input value is NaN, set to 0, else use input value
        energyCurrentValue = isNaN(parsedInputValue) ? 0 : parsedInputValue;

        // Use function to update value in ingredient object
        updateIngredientObject()
    });

    // Extract current ingredient amount value
    const amountInput = ingredientObject.querySelector(".ingredient-item__ratio");
    let amountCurrentValue = amountInput.value;

    amountInput.addEventListener("input", () => {
        let parsedInputValue = parseFloat(amountInput.value);

        // If input value is NaN, set to 0, else use input value
        amountCurrentValue = isNaN(parsedInputValue) || parsedInputValue <= 0 ? 0 : parsedInputValue;

        // Ensure that the input value does not exceed the maximum
        if (amountCurrentValue > amountInput.max) {
            amountCurrentValue = amountInput.max;
            amountInput.value = amountInput.max;
        }

        // Calculate remaining value out of 100 and set as input's max attribute
        let remainingValue = 100 - totalAmount;
        amountInput.max = Math.min(remainingValue + amountCurrentValue, 100);

        // Use function to update value in ingredient object
        updateIngredientObject();
        console.log(remainingValue)
    });

    // Extract ingredient amount input buttons
    const amountIncreaseButton = ingredientObject.querySelector(".global-spin__button--up");
    const amountDecreaseButton = ingredientObject.querySelector(".global-spin__button--down");

    amountIncreaseButton.addEventListener("click", () => {
        // Step up the value of the input element
         amountInput.stepUp();

         let parsedInputValue = parseFloat(amountInput.value);

         // If input value is NaN, set to 0, else use input value
        amountCurrentValue = isNaN(parsedInputValue) ? 0 : parsedInputValue;

        // Calculate remaining value out of 100 and set as input's max attribute
        let remainingValue = 100 - totalAmount;
        amountInput.max = Math.min(remainingValue + amountCurrentValue, 100);

        // Use function to update value in ingredient object
        updateIngredientObject();
    });

    amountDecreaseButton.addEventListener("click", () => {
        // Step up the value of the input element
         amountInput.stepDown();

         let parsedInputValue = parseFloat(amountInput.value);

         // If input value is NaN, set to 0, else use input value
        amountCurrentValue = isNaN(parsedInputValue) ? 0 : parsedInputValue;

        // Calculate remaining value out of 100 and set as input's max attribute
        let remainingValue = 100 - totalAmount;
        amountInput.max = Math.min(remainingValue + amountCurrentValue, 100);

        // Use function to update value in ingredient object
        updateIngredientObject();
    });

    // Extract ingredient protein, carbs, and fat 
    const protein = parseFloat(ingredientObject.querySelector(".ingredient-item__protein").innerHTML);
    const carbs = parseFloat(ingredientObject.querySelector(".ingredient-item__carbs").innerHTML);
    const fat = parseFloat(ingredientObject.querySelector(".ingredient-item__fat").innerHTML);

    // Extract elements displaying ingredient name and weight 
    const ingredientWeightDisplay = ingredientObject.querySelector(".ingredient-item__weight");
    const ingredientEnergyDisplay = ingredientObject.querySelector(".ingredient-item__energy");

    // Function to create / update ingredient object
    function updateIngredientObject() {

        // Calculate ingredient pure energy
        const pureEnergy = calculateIngredientPureEnergy(protein, carbs, fat);
 
        // Calculate ingredient total energy
        const totalEnergy = calculateIngredientTotalEnergy(energyCurrentValue, amountCurrentValue);

        // Calculate ingredient weight
        const weight = calculateIngredientWeight(pureEnergy, totalEnergy);

        // Update HTML content of elements
        ingredientWeightDisplay.innerHTML = Math.round(weight, 0);
        ingredientEnergyDisplay.innerHTML = Math.round(totalEnergy, 0);

        // Find if an object with the same name already exists in ingredient objects array
        const existingIndex = ingredientObjects.findIndex(object => object.ingredientName === name);

        if (existingIndex !== -1) {
            // Update existing ingredient object
            ingredientObjects[existingIndex].ingredientProtein = protein;
            ingredientObjects[existingIndex].ingredientCarbs = carbs;
            ingredientObjects[existingIndex].ingredientFat = fat;
            ingredientObjects[existingIndex].ingredientAmount = amountCurrentValue;
            ingredientObjects[existingIndex].ingredientPureEnergy = pureEnergy;
            ingredientObjects[existingIndex].ingredientTotalEnergy = totalEnergy;
            ingredientObjects[existingIndex].ingredientWeight = weight;
        } else {
            // Create new ingredient object
            const newIngredientObject = {
                ingredientName: name,
                ingredientProtein: protein,
                ingredientCarbs: carbs,
                ingredientFat: fat,
                ingredientAmount: amountCurrentValue,
                ingredientPureEnergy: pureEnergy,
                ingredientTotalEnergy: totalEnergy,
                ingredientWeight: weight
            };
            // Push the new ingredient object into the array
            ingredientObjects.push(newIngredientObject);
        }

        // Reset total weight and amount
        totalWeight = 0;
        totalAmount = 0;

        // recalculate total weight and amount
        totalWeight = calculateTotalWeight();
        totalAmount = calculateTotalAmount();

        // Display total weight and amount
        totalWeightDisplay.innerHTML = limitDecimals(totalWeight, 0);
        totalAmountDisplay.innerHTML = limitDecimals(totalAmount, 0);

        console.log(ingredientObjects);
    }

    // Call the function initially to set the initial values
    updateIngredientObject();
});