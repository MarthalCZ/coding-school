const unitsForm = document.getElementById("units-form");
const unitsButton = document.getElementById("toggle-units");

if (unitsForm) {
    unitsButton.addEventListener("click", (event) => {
        setTimeout(() => {
            event.preventDefault();
            unitsForm.submit();
        }, 250);
    });
};