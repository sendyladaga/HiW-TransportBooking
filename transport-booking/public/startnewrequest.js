const tripType = document.getElementById("tripType");
const roundTripSection = document.getElementById("roundTripSection");
const oneWaySection = document.getElementById("oneWaySection");

tripType.addEventListener("change", function () {
    
    const allInputs = document.querySelectorAll('#roundTripSection input, #roundTripSection select, #oneWaySection input, #oneWaySection select');
    allInputs.forEach(input => input.disabled = true);

    
    if (this.value === "roundtrip") {
        roundTripSection.style.display = "block";
        oneWaySection.style.display = "none";
        roundTripSection.querySelectorAll('input, select').forEach(input => input.disabled = false);
    } else if (this.value === "oneway") {
        roundTripSection.style.display = "none";
        oneWaySection.style.display = "block";
        oneWaySection.querySelectorAll('input, select').forEach(input => input.disabled = false);
    }
});

function toggleMenu() {
    document.getElementById("profileDropdown").classList.toggle("show");
}
