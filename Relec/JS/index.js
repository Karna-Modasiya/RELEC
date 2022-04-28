const menu = document.querySelector(".nav_menu");
const menuBtn = document.querySelector("#open-menu-btn");
const closeBtn = document.querySelector("#close-menu-btn");

document.addEventListener("scroll", () => {
  document
    .querySelector("nav")
    .classList.toggle("windows-scroll", window.scrollY > 0);
});


menuBtn.addEventListener("click", () => {
  menu.style.display = "flex";
  closeBtn.style.display = "inline-block";
  menuBtn.style.display = "none";
});
// close nav menu

const closeNav = () => {
  menu.style.display = "none";
  closeBtn.style.display = "none";
  menuBtn.style.display = "inline-block";
};

closeBtn.addEventListener("click", closeNav);

if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
AOS.init();