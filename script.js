document.getElementById("myForm").addEventListener("submit", function(event) {
    // Prevent default form submission behavior
    event.preventDefault();

    // Show loading screen
    document.getElementById("loadingScreen").style.display = "flex";

    // Set a timeout for form submission
    setTimeout(function() {
        // Hide loading screen after the timeout duration (replace with your desired duration)
        document.getElementById("loadingScreen").style.display = "none";

        // Submit the form programmatically
        event.target.submit();
    }, 3000); // Replace 3000 with your desired timeout duration in milliseconds
});
