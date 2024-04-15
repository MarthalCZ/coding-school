const modeForm = document.getElementById("mode-form");
const modeButton = document.getElementById("toggle-mode");

if (modeForm) {
    modeButton.addEventListener("click", (event) => {
        setTimeout(() => {
            event.preventDefault();
            modeForm.submit();
        }, 250);
    });
};

const langForm = document.getElementById("lang-form");
const langButton = document.getElementById("toggle-lang");

if (langForm) {
    langButton.addEventListener("click", (event) => {
        setTimeout(() => {
            event.preventDefault();
            langForm.submit();
        }, 250);
    });
};
