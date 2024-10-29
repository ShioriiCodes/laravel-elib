document.getElementById('upload_button').addEventListener('click', function(event) {
    event.preventDefault(); // Prevent immediate form submission

    // Use SweetAlert to show confirmation dialog
    Swal.fire({
        title: 'Confirm Uploading',
        text: "Are you sure you want to upload this file?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, upload it!',
        cancelButtonText: 'No, cancel'
    }).then((result) => {
        if (result.isConfirmed) {
            // Submit the form if confirmed
            document.getElementById('upload_form').submit();
        } else {
            // Optionally show a message when canceled
            Swal.fire('Upload canceled', '', 'info');
        }
    });
});


function toggleDropdown(event) {
    event.preventDefault(); // Prevent default link behavior
    const dropdownMenu = document.getElementById("dropdownMenu");
    dropdownMenu.style.display = dropdownMenu.style.display === "none" ? "block" : "none";
}

function selectCategory(event) {
    event.preventDefault(); // Prevent link from navigating

    const categoryName = event.target.getAttribute("data-value");

    // Update the dropdown button text
    const dropdownButton = document.getElementById("dropdownButton");
    dropdownButton.textContent = categoryName;

    // Hide the dropdown menu after selection
    const dropdownMenu = document.getElementById("dropdownMenu");
    dropdownMenu.style.display = "none";
}

// Optional: Close dropdown if clicked outside
window.addEventListener("click", function(event) {
    const dropdownMenu = document.getElementById("dropdownMenu");
    if (!event.target.closest(".dropdown-container")) {
        dropdownMenu.style.display = "none";
    }
});

