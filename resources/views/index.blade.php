<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Book Catalogs</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Ubunto:wght@400;700&display=swap">
        <link rel="stylesheet" href="{{ asset('css/homeregistered.css') }}">
        <link rel="stylesheet" href="{{ asset('css/search.css') }}">
        <link rel="icon" hre    f="{{ asset('logo.ico') }}" type="image/x-icon">
        
    </head>
    <body>

            <div class="container">
                <!-- Sidebar for Categories -->
                <div class="sidebar">
                    <div class="categories">
                        <h2>Categories</h2>
                        <ul>
                            <li><a href="{{ route('home.csigt') }}" class="{{ request()->routeIs('home.csigt') ? 'active' : '' }}">Computer science, information & general works</a></li>
                            <li><a href="{{ route('home.philoandpsy') }}" class="{{ request()->routeIs('home.philoandpsy') ? 'active' : '' }}">Philosophy and Psychology</a></li>
                            <li><a href="{{ route('home.Religion') }}" class="{{ request()->routeIs('home.religion') ? 'active' : '' }}">Religion</a></li>
                            <li><a href="{{ route('home.social-science') }}" class="{{ request()->routeIs('home.social-science') ? 'active' : '' }}">Social Science</a></li>
                            <li><a href="{{ route('home.language') }}" class="{{ request()->routeIs('home.language') ? 'active' : '' }}">Language</a></li>                            
                            <li><a href="{{ route('home.technology') }}" class="{{ request()->routeIs('home.technology') ? 'active' : '' }}">Technology</a></li>                            
                            <li><a href="{{ route('home.arts-recreation') }}" class="{{ request()->routeIs('home.arts-recreation') ? 'active' : '' }}">Arts & Recreation</a></li>
                            <li><a href="{{ route('home.literature') }}" class="{{ request()->routeIs('home.literature') ? 'active' : '' }}">Literature</a></li>
                            <li><a href="{{ route('home.history-geography') }}" class="{{ request()->routeIs('home.history-geography') ? 'active' : '' }}">History & Geography</a></li>
                            <li><a href="{{ route('home.program') }}" class="{{ request()->routeIs('home.program') ? 'active' : '' }}">E-Books Per Program</a></li>
                        </ul>
                    </div>
                </div>
            
                <!-- Book Catalog -->
                <div class="catalog">
                    <div class="catalog-header">
                        <h2>Book Catalog</h2>
                            <div class="search">
                                <div class="search-box">
                                    <input type="text" placeholder="Search by title, author, or keyword...">
                                    <button type="submit">Search</button>
                                </div>
                            </div>
                    </div>
                    
                
                    @foreach($Posts as $Post)
                        <div class="book-item">
                            <img src="{{ asset('storage/'.$Post->file) }}" alt="Book Cover">
                            <h3>{{ $Post->title }}</h3>
                            <p>{{ $Post->description }}</p>
                        </div>
                    @endforeach

                    </div>
                   
                </div>
            </div>

        <script src="{{ asset('script/script.js') }}"></script>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
    </html>
</x-app-layout>