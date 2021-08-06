let hamburger = document.getElementById("hamburger");

let bar_1 = document.getElementById("bar_1");
let bar_2 = document.getElementById("bar_2");
let bar_3 = document.getElementById("bar_3");

let side_bar = document.getElementById("side_bar");

if (hamburger != null) {
    hamburger.addEventListener("click", function () {
        bar_1.classList.toggle("clicked");
        bar_2.classList.toggle("clicked");
        bar_3.classList.toggle("clicked");

        side_bar.classList.toggle("show");
    });
}
