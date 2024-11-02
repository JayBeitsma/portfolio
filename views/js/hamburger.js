/* Hamburger menu function */

function hamburger() {
    const links = document.getElementById("navMain");
    if (links.style.display === "block") {
        links.style.display = "none";
    } else {
        links.style.display = "block";
    }
}

/* check if screen with is higher than 768 */
window.addEventListener('resize', function () {
    const width = window.innerWidth;
    const links = document.getElementById("navMain");
    if (width > 768) {
        links.style.display = "block";
    } else {
        links.style.display = "none";
    }
});