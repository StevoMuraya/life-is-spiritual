var images = document.getElementsByClassName("image-in-slider");
var imageIndex = 1;

for (let index = 0; index < images.length; index++) {
    var dot = document.createElement("div");
    dot.className = "dot-ind";
    document.getElementById("dot_incicators").appendChild(dot);
}
showimages(imageIndex);
// Next/previous controls
function plusSlides(n) {
    showimages((imageIndex += n));
}

// Thumbnail image controls
function currentSlide(n) {
    showimages((imageIndex = n));
}

function showimages(n) {
    var i;
    var title = document.getElementsByClassName("landing-title");
    var texts = document.getElementsByClassName("landing-text");
    var dots = document.getElementsByClassName("dot-ind");
    if (n > images.length) {
        imageIndex = 1;
    }
    if (n < 1) {
        imageIndex = images.length;
    }
    for (i = 0; i < images.length; i++) {
        images[i].style.opacity = "0";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].classList.remove("active");
        texts[i].classList.remove("active");
        title[i].classList.remove("active");
    }

    images[imageIndex - 1].style.opacity = "1";
    dots[imageIndex - 1].classList.add("active");
    texts[imageIndex - 1].classList.add("active");
    title[imageIndex - 1].classList.add("active");
}

var slideIndex = 0;
carousel();

function carousel() {
    var i;
    var title = document.getElementsByClassName("landing-title");
    var texts = document.getElementsByClassName("landing-text");
    var dots = document.getElementsByClassName("dot-ind");
    var x = document.getElementsByClassName("image-in-slider");
    for (i = 0; i < x.length; i++) {
        x[i].style.opacity = "0";
        dots[i].classList.remove("active");
        texts[i].classList.remove("active");
        title[i].classList.remove("active");
    }
    slideIndex++;
    if (slideIndex > x.length) {
        slideIndex = 1;
    }
    x[slideIndex - 1].style.opacity = "1";
    dots[slideIndex - 1].classList.add("active");
    texts[slideIndex - 1].classList.add("active");
    title[slideIndex - 1].classList.add("active");
    setTimeout(carousel, 8000);
}
