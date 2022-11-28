import "./bootstrap";

import "../sass/dealership.scss";

import Alpine from "alpinejs";
import { add } from "lodash";

window.Alpine = Alpine;

Alpine.start();

document.addEventListener("DOMContentLoaded", function () {
    window.addEventListener("scroll", function () {
        if (window.scrollY > 50) {
            document.getElementById("navbar_top").classList.add("fixed-top");
            document.getElementById("navbar_top").classList.add("shadow");

            let navbar_height = document.querySelector(".navbar").offsetHeight;
            document.body.style.paddingTop = navbar_height + "px";
        } else {
            document.getElementById("navbar_top").classList.remove("fixed-top");
            document.getElementById("navbar_top").classList.remove("shadow");

            document.body.style.paddingTop = "0";
        }
    });
});

let path = document.querySelector("#path");
let btn = document.querySelector("#path-btn");

let arrowDown =
    "M1.553 6.776a.5.5 0 0 1 .67-.223L8 9.44l5.776-2.888a.5.5 0 1 1 .448.894l-6 3a.5.5 0 0 1-.448 0l-6-3a.5.5 0 0 1-.223-.67z";
let arrowUp =
    "M7.776 5.553a.5.5 0 0 1 .448 0l6 3a.5.5 0 1 1-.448.894L8 6.56 2.224 9.447a.5.5 0 1 1-.448-.894l6-3z";

btn.addEventListener("click", () => {
    if (path.getAttribute("d") === arrowDown) {
        path.setAttribute("d", arrowUp);
    } else {
        path.setAttribute("d", arrowDown);
    }
});

let driveBtn = document.querySelector("#drive");
let driveHdr = document.querySelector("#drive-header");

// driveHdr.scrollIntoView(true);

driveBtn.addEventListener("click", (e) => {
    e.preventDefault();
    driveHdr.scrollIntoView(true);
});

let newsBtn = document.querySelector("#newsTag");
let newsHdr = document.querySelector("#newsDiv");

newsBtn.addEventListener("click", (e) => {
    e.preventDefault();
    newsHdr.scrollIntoView(true);
});

let forms = document.querySelectorAll(".needs-validation");
let modalBtn = document.querySelector("#modalBtn");

function reset() {
    modalBtn.removeAttribute("data-bs-toggle");
    modalBtn.removeAttribute("data-bs-target");
}

Array.from(forms).forEach((form) => {
    form.addEventListener(
        "submit",
        (event) => {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            modalBtn.setAttribute("data-bs-toggle", "modal");
            modalBtn.setAttribute("data-bs-target", "#staticBackdrop");
            reset();
            form.classList.add("was-validated");
        },
        false
    );
});
