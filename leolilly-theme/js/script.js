/**
 * Toggles the display of the navigation menu and switches the icon 
 * between the hamburger (bars) and close (times) icon when clicked.
 */
function toggleMenu() {
    var menu = document.querySelector(".nav-menu");
    var icon = document.querySelector(".icon i");

    menu.classList.toggle("show");

    if (menu.classList.contains("show")) {
        icon.classList.remove("fa-bars");
        icon.classList.add("fa-times");
    } else {
        icon.classList.remove("fa-times");
        icon.classList.add("fa-bars");
    }
}