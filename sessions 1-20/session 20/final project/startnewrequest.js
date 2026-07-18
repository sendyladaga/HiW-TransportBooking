const tripType = document.getElementById("tripType");
const roundTripSection = document.getElementById("roundTripSection");
const oneWaySection = document.getElementById("oneWaySection");

tripType.addEventListener("change", function () {

    roundTripSection.style.display = "none";
    oneWaySection.style.display = "none";

    if (this.value === "roundtrip") {
        roundTripSection.style.display = "block";
    }

    if (this.value === "oneway") {
        oneWaySection.style.display = "block";
    }
});

function toggleMenu() {
    document.getElementById("profileDropdown").classList.toggle("show");
}
