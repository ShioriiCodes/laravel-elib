   // Toggle dropdown on image click
   document.getElementById('dropdown-toggle').addEventListener('click', function(event) {
    const dropdownMenu = document.getElementById('dropdown-menu');
    dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';
    event.stopPropagation(); // Prevent event from bubbling up
});

// Close the dropdown if clicked outside
document.addEventListener('click', function(event) {
    const dropdownMenu = document.getElementById('dropdown-menu');
    const dropdownToggle = document.getElementById('dropdown-toggle');
    
    // If the clicked target is not the dropdown or the image, hide the dropdown
    if (!dropdownMenu.contains(event.target) && !dropdownToggle.contains(event.target)) {
        dropdownMenu.style.display = 'none';
    }
});

const categoryLinks = document.querySelectorAll(".sidebar ul li a");

categoryLinks.forEach(link => {
    link.addEventListener("click", function() {
     
        categoryLinks.forEach(link => link.classList.remove("active"));
       
        this.classList.add("active");
    });
});


// Add an event listener to the window for the scroll event
window.addEventListener("scroll", function () {
    const sidebar = document.querySelector(".sidebar");

    if (sidebar) {
        if (window.scrollY > 0) {
            sidebar.classList.add("scrolled");
            console.log("Added 'scrolled' class to sidebar");
        } else {
            sidebar.classList.remove("scrolled");
            console.log("Removed 'scrolled' class from sidebar");
        }
    } else {
        console.log("Sidebar element not found");
    }
});


// JavaScript to highlight the clicked link
document.addEventListener("DOMContentLoaded", function () {
    const links = document.querySelectorAll(".sidebar ul li a");

    links.forEach(link => {
        link.addEventListener("click", function () {
            // Remove 'active' class from all links
            links.forEach(link => link.classList.remove("active"));

            // Add 'active' class to the clicked link
            this.classList.add("active");
        });
    });
});
document.addEventListener("DOMContentLoaded", function () {

    const linkss = document.querySelectorAll(".sidebar ul li");

    linkss.forEach(link => {
        link.addEventListener("click", function () {
            // Remove 'active' class from all links
            links.forEach(link => link.classList.remove("active"));

            // Add 'active' class to the clicked link
            this.classList.add("active");
        });
    });
});
