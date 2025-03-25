document.addEventListener("DOMContentLoaded", function () {
    let menu = document.querySelector("#menu-icon");
    let navbar = document.querySelector(".navbar");

    menu.onclick = () => {
        menu.classList.toggle("bx-x");
        navbar.classList.toggle("active");
    };

    document.addEventListener("click", (e) => {
        if (!menu.contains(e.target) && !navbar.contains(e.target)) {
            menu.classList.remove("bx-x");
            navbar.classList.remove("active");
        }
    });
});
