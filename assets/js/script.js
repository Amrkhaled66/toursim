// Open/Close mobile navbar
const toggleBtn = document.getElementById("nav-toggle-btn");
const navClose = document.getElementById("nav-close");
const navbar = document.querySelector(".navbar");

toggleBtn.addEventListener("click", () => {
  navbar.classList.toggle("active");
});
navClose.addEventListener("click", () => {
  navbar.classList.remove("active");
});

// Handle dropdown open like accordion
document.querySelectorAll(".dropdown > .dropbtn").forEach((button) => {
  button.addEventListener("click", (e) => {
    e.preventDefault(); // prevent default link behavior
    const parent = button.closest(".dropdown");
    parent.classList.toggle("open");
  });
});
