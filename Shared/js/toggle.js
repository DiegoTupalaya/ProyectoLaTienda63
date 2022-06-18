const Toggle = document.querySelector(".toggle")
const Menu = document.querySelector(".menu")

Toggle.addEventListener("click", () => {
    Menu.classList.toggle("menu_visible")
})
