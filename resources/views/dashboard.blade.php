
<x-app-layout>
    
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    
    <div style="background-color: #131B31; padding: 20px; border-radius: 8px; max-width: 400px; margin: 2% auto; color: #fefefe; font-family: Ubunto, sans-serif;">
        <label class="text-2xl text-white" style="margin: 31%;">Upload Post</label><br><br>

        <form id="upload_form" action="{{url('/upload_post')}}" method="POST" enctype="multipart/form-data">
            
            @csrf

            <div class="dropdown-container" style="position: relative; margin-bottom: 5px;">
                <button id="dropdownButton" type="button" onclick="toggleDropdown(event)" class="dropdown-button" style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #ccc; background: #f1f1f1; cursor: pointer;  color: #222222;">
                    Select Category
                </button>
                <div id="dropdownMenu" class="dropdown-menu" style="display: none; position: absolute; top: 100%; left: 0; width: 100%; background-color: #fff; border: 1px solid #ccc; border-radius: 4px; box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2); z-index: 1;">
                    <ul style="list-style-type: none; padding: 0; margin: 0; text-align: center; align-items: center;">
                        <li style="padding: 5px 16px;"><a href="#" data-value="Computer science, information & general technology" onclick="selectCategory(event)" style="text-decoration: none; color: #222222;">Computer science, information & general technology</a></li>
                        <li style="padding: 5px 16px;"><a href="#" data-value="Philosophy and Psychology" onclick="selectCategory(event)" style="text-decoration: none; color: #222222;">Philosophy and Psychology</a></li>
                        <li style="padding: 5px 16px;"><a href="#" data-value="Religion" onclick="selectCategory(event)" style="text-decoration: none; color: #222222;">Religion</a></li>
                        <li style="padding: 5px 16px;"><a href="#" data-value="Social Science" onclick="selectCategory(event)" style="text-decoration: none; color: #222222;">Social Science</a></li>
                        <li style="padding: 5px 16px;"><a href="#" data-value="Language" onclick="selectCategory(event)" style="text-decoration: none; color: #222222;">Language</a></li>
                        <li style="padding: 5px 16px;"><a href="#" data-value="Technology" onclick="selectCategory(event)" style="text-decoration: none; color: #222222;">Technology</a></li>
                        <li style="padding: 5px 16px;"><a href="#" data-value="Arts & Recreation" onclick="selectCategory(event)" style="text-decoration: none; color: #222222;">Arts & Recreation</a></li>
                        <li style="padding: 5px 16px;"><a href="#" data-value="History & Geography" onclick="selectCategory(event)" style="text-decoration: none; color: #222222;">Literature</a></li>
                        <li style="padding: 5px 16px;"><a href="#" data-value="History & Geography" onclick="selectCategory(event)" style="text-decoration: none; color: #222222;">History & Geography</a></li>
                        <li style="padding: 5px 16px;"><a href="#" data-value="E-Books Per Program" onclick="selectCategory(event)" style="text-decoration: none; color: #222222;">E-Books Per Program</a></li>
                    </ul>
                </div>
            </div>

            <div style="margin-bottom: 15px;">
                <label style="display: block; font-weight: bold; margin-bottom: 5px;">Title</label>
                <input type="text" name="title" style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #ccc; color: #222222;">
            </div>
            <div style="margin-bottom: 15px;">
                <label style="display: block; font-weight: bold; margin-bottom: 5px;">Description</label>
                <input type="text" name="description" style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #ccc; color: #222222;">
            </div>
            <div style="margin-bottom: 15px;">
                <label style="display: block; font-weight: bold; margin-bottom: 5px;">Upload a File</label>
                <input type="file" name="file" style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #ccc;">
            </div>
            <div style="margin-bottom: 15px;">
                <button type="submit" id="upload_button" style="width: 100%; padding: 8px; border-radius: 4px; margin-top: 10px; background: #ff5500; ">
                   Upload
                </button>
            </div>
        </form>
    </div>

    <script src="{{ asset('script/dashboard.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></>
    
</x-app-layout>
