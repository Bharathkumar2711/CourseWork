document.addEventListener("DOMContentLoaded", function () {
    const userTypeSelect = document.getElementById("user-type");
    // const businessTab = document.getElementById("business-tab");
    const residentTab = document.getElementById("resident-tab");
    const councilTab = document.getElementById("council-tab");

    // Hide all tabs initially
    function hideAllTabs() {
        // businessTab.style.display = "none";
        residentTab.style.display = "none";
        councilTab.style.display = "none";
    }

    // Show the appropriate tab based on the selected user type
    userTypeSelect.addEventListener("change", function () {
        hideAllTabs();
        const selectedType = userTypeSelect.value;

         if (selectedType === "resident") {
            residentTab.style.display = "block";
        } else if (selectedType === "council") {
            councilTab.style.display = "block";
        }
    });
    
    
    // Initialize by hiding all tabs
    hideAllTabs();
});