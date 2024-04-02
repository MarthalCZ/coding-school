// Open/close modal
let dialog = document.querySelector(".modal");
let openButton = document.querySelector(".open-modal");
let closeButton = document.querySelector(".close-modal");

if (openButton != null) {
    openButton.addEventListener("click", (event) => {
        event.preventDefault()
        dialog.showModal();
    });

    closeButton.addEventListener("click", () => {
        dialog.close();
    });
}
