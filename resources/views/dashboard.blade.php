
<x-app-layout>
    
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <div class="flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-[#131B31] text-white min-h-screen" style="padding-top: 5%;">
            <div class="px-6 py-4">
                <h2 class="text-lg font-bold">Dashboard</h2>
                <nav class="mt-6 space-y-2">
                    <a href="/dashboard" class="block px-4 py-2 rounded hover:bg-gray-700">Upload</a>
                    <a href="{{ route('home.create') }}" class="block px-4 py-2 rounded hover:bg-gray-700">Users </a>
                    <a href="/analytic" class="block px-4 py-2 rounded hover:bg-gray-700">Analytics</a>
                </nav>
            </div>
        </aside>
    
    
        <div style="background-color: #131B31; padding: 20px 50px; border-radius: 8px; max-width: 1900px; margin: auto; margin-top: 5%; color: #fefefe; font-family: Ubunto, sans-serif;">
            <label class="text-2xl text-white" style="margin: 20%;">Upload eBooks</label><br><br>
        
            <!-- Form to upload a file -->
            <form id="upload_form" action="{{ url('/upload_post') }}" method="POST" enctype="multipart/form-data">
                @csrf  

                <!-- Category Dropdown -->
                <div class="dropdown-container" style="position: relative; margin-bottom: 5px;">
                    <button id="dropdownButton" type="button" onclick="toggleDropdown(event)" class="dropdown-button" style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #ccc; background: #f1f1f1; cursor: pointer; color: #222222;">
                        Select Category
                    </button>
                    <div id="dropdownMenu" class="dropdown-menu" style="display: none; position: absolute; top: 100%; left: 0; width: 100%; background-color: #fff; border: 1px solid #ccc; border-radius: 4px; box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2); z-index: 1;">
                        <ul style="list-style-type: none; padding: 0; margin-top: -23%; text-align: center; align-items: center; background-color: #fff;">
                            <li style="padding: 7px 16px;"><a href="#" data-value="Computer science, information & general technology" onclick="selectCategory(event)" style="text-decoration: none; color: #222222;">Computer science, information & general technology</a></li>
                            <li style="padding: 7px 16px;"><a href="#" data-value="Philosophy and Psychology" onclick="selectCategory(event)" style="text-decoration: none; color: #222222;">Philosophy and Psychology</a></li>
                            <li style="padding: 7px 16px;"><a href="#" data-value="Religion" onclick="selectCategory(event)" style="text-decoration: none; color: #222222;">Religion</a></li>
                            <li style="padding: 7px 16px;"><a href="#" data-value="Social Science" onclick="selectCategory(event)" style="text-decoration: none; color: #222222;">Social Science</a></li>
                            <li style="padding: 7px 16px;"><a href="#" data-value="Language" onclick="selectCategory(event)" style="text-decoration: none; color: #222222;">Language</a></li>
                            <li style="padding: 7px 16px;"><a href="#" data-value="Technology" onclick="selectCategory(event)" style="text-decoration: none; color: #222222;">Technology</a></li>
                            <li style="padding: 7px 16px;"><a href="#" data-value="Arts & Recreation" onclick="selectCategory(event)" style="text-decoration: none; color: #222222;">Arts & Recreation</a></li>
                            <li style="padding: 7px 16px;"><a href="#" data-value="History & Geography" onclick="selectCategory(event)" style="text-decoration: none; color: #222222;">Literature</a></li>
                            <li style="padding: 7px 16px;"><a href="#" data-value="History & Geography" onclick="selectCategory(event)" style="text-decoration: none; color: #222222;">History & Geography</a></li>
                            <li style="padding: 7px 16px;"><a href="#" data-value="E-Books Per Program" onclick="selectCategory(event)" style="text-decoration: none; color: #222222;">E-Books Per Program</a></li>
                        </ul>
                    </div>
                </div>
        
                <!-- Title Input -->
                <div style="margin-bottom: 15px;">
                    <label style="display: block; font-weight: bold; margin-bottom: 5px;">Title</label>
                    <input type="text" name="title" style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #ccc; color: #222222;" required>
                </div>
        
                <!-- Description Input -->
                <div style="margin-bottom: 15px;">
                    <label style="display: block; font-weight: bold; margin-bottom: 5px;">Description</label>
                    <input type="text" name="description" style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #ccc; color: #222222;" required>
                </div>
        
                <!-- File Upload Input -->
                <div style="margin-bottom: 15px;">
                    <label style="display: block; font-weight: bold; margin-bottom: 5px;">Upload a File</label>
                    <input type="file" name="file" style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #ccc;" required>
                </div>
                 <div style="margin-bottom: 15px;">
                    <label style="display: block; font-weight: bold; margin-bottom: 5px;">Upload a Image</label>
                    <input type="file" name="image" style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #ccc;" required>
                </div> 
        
                <!-- Submit Button -->
                <div style="margin-bottom: 15px;">
                    <button type="submit" id="upload_button" style="width: 100%; padding: 8px; border-radius: 4px; margin-top: 10px; background: #ff5500;">Upload</button>
                </div>
            </form>
        </div>

    <script>
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

                    // Show a success notification
                    Swal.fire({
                        title: 'Success!',
                        text: 'File uploaded successfully.',
                        icon: 'success',
                        timer: 2000
                    });
                } else {
                    // Optionally show a message when canceled
                   
                }
            });
        });
        
        document.querySelector('form').addEventListener('submit', function (event) {
            const fileInput = document.getElementById('file');
            if (!fileInput.value) {
                event.preventDefault();
                alert('Please upload a file.');
            }
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
    </script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    </x-app-layout>
