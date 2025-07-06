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


function setupDropdown(toggleId, dropdownId) {
  const toggleBtn = document.getElementById(toggleId);
  const dropdown = document.getElementById(dropdownId);
  const labelSpan = toggleBtn.querySelector(".label");

  toggleBtn.addEventListener("click", (e) => {
    e.stopPropagation();
    dropdown.classList.toggle("hidden");
  });

  dropdown.querySelectorAll("button").forEach((btn) => {
    btn.addEventListener("click", (e) => {
      e.stopPropagation();
      labelSpan.textContent = btn.dataset.value;
      dropdown.classList.add("hidden");
    });
  });

  document.addEventListener("click", (e) => {
    if (!toggleBtn.contains(e.target) && !dropdown.contains(e.target)) {
      dropdown.classList.add("hidden");
    }
  });
}

// Setup for both dropdowns
setupDropdown("destinationToggleBtn", "destinationDropdown");
setupDropdown("travelersToggleBtn", "travelersDropdown");
