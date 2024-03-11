// SCROLL TO TOP BUTTON
let scrollTopBtn = document.querySelector(".scroll-top__btn");

window.onscroll = function(){
    scrollFunction();
};

function scrollFunction(){
    if (document.body.scrollTop > 0 || document.documentElement.scrollTop > 0) {
        scrollTopBtn.style.display = "flex";
    } else {
        scrollTopBtn.style.display = "none";
    }
};

let options = {top: 0, left: 0, behavior: 'smooth'};

scrollTopBtn.addEventListener('click', () => {
    window.scroll(options)
});

// "BURGER" MENU
let screenWidth = window.matchMedia("(max-width: 768px)");
let menu = document.querySelector(".main-menu")
let menuLi = menu.children;

if (screenWidth.matches) {
    menu.addEventListener('click', () => {
        for (let i = 0; i < menuLi.length; i++) {
            if(menuLi[i].style.display === "none") {
                menuLi[i].style.display = "block";
            } else {
                menuLi[i].style.display = "none"
            }
        }
    });
}