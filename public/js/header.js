const humbToggler = document.querySelector("header .humb");
const closeListToggler = document.querySelector("header .close");
humbToggler.addEventListener("click", () => {
  humbToggler.classList.add("hidden");
  closeListToggler.classList.remove("hidden");
  document.querySelector("header .menu ul").classList.toggle("active");
});
closeListToggler.addEventListener("click", () => {
  closeListToggler.classList.add("hidden");
  humbToggler.classList.remove("hidden");
  document.querySelector("header .menu ul").classList.toggle("active");
});
