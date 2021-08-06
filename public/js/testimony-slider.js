var testimonies = document.getElementsByClassName("testimonial-card");
var slideIndex2 = 0;

for (let index = 0; index < testimonies.length; index++) {
    var dot = document.createElement("div");
    dot.className = "test-dot";
    document.getElementById("testimony_indicators").appendChild(dot);
}

var dots = document.getElementsByClassName("test-dot");

carousel2();

function carousel2() {
    var i;

    for (i = 0; i < testimonies.length; i++) {
        testimonies[i].style.opacity = "0";
        testimonies[i].style.width = "0";
        testimonies[i].style.display = "none";
        dots[i].classList.remove("active");
    }

    slideIndex2++;
    if (slideIndex2 > testimonies.length) {
        slideIndex2 = 1;
    }
    testimonies[slideIndex2 - 1].style.opacity = "1";
    testimonies[slideIndex2 - 1].style.display = "flex";
    testimonies[slideIndex2 - 1].style.width = "80%";
    dots[slideIndex2 - 1].classList.add("active");
    setTimeout(carousel2, 8000); // Change image every 2 seconds
}
