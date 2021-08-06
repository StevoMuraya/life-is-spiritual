var navbar = document.getElementById("navbar");
var nav_options = document.getElementById("nav_options");
var hamburger = document.getElementById("hamburger");
var burger_top = document.getElementById("burger_top");
var burger_middle = document.getElementById("burger_middle");
var burger_bottom = document.getElementById("burger_bottom");

if (navbar != null) {
    var sticky = navbar.offsetTop;
}

window.onscroll = function () {
    if (navbar != null) {
        navScroll();
    }
};

if (hamburger != null) {
    hamburger.addEventListener("click", function () {
        nav_options.classList.toggle("show");

        burger_top.classList.toggle("tilt");
        burger_middle.classList.toggle("tilt");
        burger_bottom.classList.toggle("tilt");

        hamburger.classList.toggle("glow");
        burger_top.classList.toggle("glow");
        burger_middle.classList.toggle("glow");
        burger_bottom.classList.toggle("glow");
    });
}

function navScroll() {
    if (window.pageYOffset > sticky) {
        navbar.classList.add("sticky");
        nav_options.classList.add("sticky");
    } else {
        navbar.classList.remove("sticky");
        nav_options.classList.remove("sticky");
    }
}
