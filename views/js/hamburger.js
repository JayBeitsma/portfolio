/* Hamburger menu function */

function hamburger() {
    var links = document.getElementById("navMain");
    if (links.style.display === "block") {
        links.style.display = "none";
    } else {
        links.style.display = "block";
    }
}

/* check if screen with is higher than 768 */
