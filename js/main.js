let hambIcon = document.querySelector("#hamburger");
// let smallNavigationHolder = document.querySelector(".navigation-small-devices");
let smallNavigationHolder = document.querySelector(".small-nagivation-holder");

hambIcon.addEventListener('click', openSmallNavigation);
smallNavigationHolder.addEventListener('click', closeSmallNavigation);



function openSmallNavigation() {
    smallNavigationHolder.style.right = "0px"
}

function closeSmallNavigation() {
    smallNavigationHolder.style.right = "-100vw"
}

/*
Napravili smo div koji drzi nasu listu za male uredjaje (navigaciju)

taj div smo rasitili width 100vw i height 100vh i pozicionirali apsolutno u odnosu na nas body

stilizovali smo je na nacin kako smo mi zeleli

stavili smo da je pocetno stanje naseg diva koji sve to drzi -400px kako se on ne bi video pri pocetnom stanju, a u main.js smo napravili funkciju uz pomoc koje nas div holder dobija stanje  right 0px.

Animaciju pri ulasku i izlasku naseg diva u view smo dobili sa "transition" propertijem

*/
var slideIndex = 1;
showSlides(slideIndex);

// Next previous controls
function plusSlides(n) {
    showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demo");
    var captionText = document.getElementById("caption");
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
    captionText.innerHTML = dots[slideIndex - 1].alt;
}
