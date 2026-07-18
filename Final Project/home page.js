const navItems = document.querySelectorAll(".nav-item");

navItems.forEach(item => {

    item.addEventListener("click", () => {

        navItems.forEach(nav => {
            nav.classList.remove("active");
        });

        item.classList.add("active");

    });

});

function toggleMenu() {
    document
        .getElementById("profileDropdown")
        .classList.toggle("show");
}

const profileCircle = document.getElementById("profileCircle");
const profileDropdown = document.getElementById("profileDropdown");

profileCircle.addEventListener("click", function () {
    profileDropdown.classList.toggle("show");
});
