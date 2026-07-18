const tripType = document.getElementById("tripType"); 
const roundTripSection = document.getElementById("roundtrip-section"); 
const oneWaySection = document.getElementById("oneway-section");       

if (tripType) {
    tripType.addEventListener("change", function () {
        const allInputs = document.querySelectorAll('#roundtrip-section input, #roundtrip-section select, #oneway-section input, #oneway-section select');
        allInputs.forEach(input => input.disabled = true);

        if (this.value === "roundtrip") {
            roundTripSection.style.display = "block";
            oneWaySection.style.display = "none";
            roundTripSection.querySelectorAll('input, select').forEach(input => input.disabled = false);
        } else if (this.value === "oneway") {
            roundTripSection.style.display = "none";
            oneWaySection.style.display = "block";
            oneWaySection.querySelectorAll('input, select').forEach(input => input.disabled = false);
        } else {
            
            roundTripSection.style.display = "none";
            oneWaySection.style.display = "none";
        }
    });
}

function toggleMenu() {
    document.getElementById("profileDropdown").classList.toggle("show");
}
