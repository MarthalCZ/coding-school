// Open/close modal
const dialogs = document.querySelectorAll(".modal");
const openButtons = document.querySelectorAll(".open-modal");
const closeButtons = document.querySelectorAll(".close-modal");

openButtons.forEach(button => {
    button.addEventListener("click", (event) => {
        event.preventDefault();
        const targetModalId = button.getAttribute("data-target");
        const targetModal = document.querySelector(`dialog[data-target="${targetModalId}"]`);
        if (targetModal) {
            targetModal.querySelectorAll("input").forEach(input => {
                if (input.type !== "submit") {
                    input.value = "";
                }
            });
            targetModal.showModal();
        }
    });
});

closeButtons.forEach(button => {
    button.addEventListener("click", (event) => {
        event.preventDefault();
        const targetModalId = button.getAttribute("data-target");
        const targetModal = document.querySelector(`dialog[data-target="${targetModalId}"]`);
        if (targetModal) {
            targetModal.close();
        }
    });
});
