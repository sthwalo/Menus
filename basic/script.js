/**
 * Toggles the display of the navigation menu and switches the icon 
 * between the hamburger (bars) and close (times) icon when clicked.
 */
function toggleMenu() {
    // Select the navigation menu and the icon
    var menu = document.querySelector(".nav-menu");
    var icon = document.querySelector(".icon i");

    // Toggle the "show" class on the menu to show/hide it
    menu.classList.toggle("show");

    // Switch the icon between "fa-bars" and "fa-times" based on menu state
    if (menu.classList.contains("show")) {
        icon.classList.remove("fa-bars");
        icon.classList.add("fa-times"); // Shows the close icon when menu is displayed
    } else {
        icon.classList.remove("fa-times");
        icon.classList.add("fa-bars"); // Shows the hamburger icon when menu is hidden
    }
};

document.getElementById('enrollment-form').addEventListener('submit', function(event) {
    event.preventDefault();
    alert("Thank you for enrolling! We will contact you soon.");
   
});