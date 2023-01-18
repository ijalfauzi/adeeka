// Popup Search Box

// Get the modal

var modal = document.getElementById("myModal");

// Get the button that opens the modal

var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal

var span = document.getElementsByClassName("modal__close")[0];

// When the user clicks the button, open the modal 

btn.onclick = function() {
modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal

span.onclick = function() {
modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it

window.onclick = function(event) {
if (event.target == modal) {
modal.style.display = "none";
}
}

// Responsive Navigation Menu

const toggle = document.querySelector(".toggle");
const menu = document.querySelector(".menu");
const items = document.querySelectorAll(".item");

// Toggle mobile menu

function toggleMenu() {
if (menu.classList.contains("active")) {
menu.classList.remove("active");
toggle.querySelector("a").innerHTML = "&equiv;";
} else {
menu.classList.add("active");
toggle.querySelector("a").innerHTML = "x";
}
}

// Activate submenu

function toggleItem() {
if (this.classList.contains("submenu-active")) {
this.classList.remove("submenu-active");
} else if (menu.querySelector(".submenu-active")) {
menu.querySelector(".submenu-active").classList.remove("submenu-active");
this.classList.add("submenu-active");
} else {
this.classList.add("submenu-active");
}
}

// Close submenu anywhere

function closeSubmenu(e) {
if (menu.querySelector(".submenu-active")) {
let isClickInside = menu
.querySelector(".submenu-active")
.contains(e.target);

if (!isClickInside && menu.querySelector(".submenu-active")) {
menu.querySelector(".submenu-active").classList.remove("submenu-active");
}
}
}

// Event Listeners

toggle.addEventListener("click", toggleMenu, false);
for (let item of items) {
if (item.querySelector(".submenu")) {
item.addEventListener("click", toggleItem, false);
}
item.addEventListener("keypress", toggleItem, false);
}
document.addEventListener("click", closeSubmenu, false);