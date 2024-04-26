// LOGO SOUND
function logo(){
    let audio = document.getElementById("logo-click");
    audio.volume = 0.25;
    audio.playbackRate = 1.0;
    audio.play();
};

// BUTTON SOUND
function select(){
    let audio = document.getElementById("button-click");
    audio.volume = 0.75;
    audio.playbackRate = 1.0;
    audio.play();
};

function browse(){
    let audio = document.getElementById("mouse-select").cloneNode(true);
    audio.volume = 0.25;
    audio.playbackRate = 1.0;
    audio.play();
};

// LINK DELAY
function delay(URL){
    setTimeout(function(){
        window.location = URL}, 500);
};

// SCROLL TO SECTION
function scrollToSection(sectionId) {
    const section = document.getElementById(sectionId);
    section.scrollIntoView({behavior: "smooth"});
};

// SCROLL TO TOP BUTTON
let scrollTopBtn = document.getElementById("scroll-top-btn");

window.onscroll = function(){
    scrollFunction();
};

function scrollFunction(){
    if (document.body.scrollTop > 0 || document.documentElement.scrollTop > 0) {
        scrollTopBtn.style.display = "block";
    } else {
        scrollTopBtn.style.display = "none";
    }
};

function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
};

// FORM SUCCESS CHECK
/*
function formCheck() {
    if(window.location.href.indexOf("?success=1#form")) {
        alert("Formulář byl odeslán.")
    } else if (window.location.href.indexOf("?success=-1#form")) {
        alert("Formulář nebyl odeslán.")
    }
};
*/