<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Catalogs</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Ubunto:wght@400;700&display=swap">
    <link rel="stylesheet" type="text/css" href="css/homeReg.css">
    <link rel="icon" href="{{ asset('logo.ico') }}" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="/css/responsive.css">  
</head>
<body>

    <header>
        <div class="header-container">
            <!-- Library Name & Logo -->
            <div class="logo">
                <img src="logo/logo2.png" alt="Library Logo">
                <h1>Catergory</h1>
            </div>
            <!-- Navigation Menu -->
            <nav class="nav-menu">
                <ul>
                    <li><a href='index.blade.php'>Home</a></li>
                    <li><a href='catalog.html'>Catergory</a></li>
                    <li><a href='blog.html'>Anouncement</a></li>
                    <li><a href='about.html'>About Us</a></li>
                        @if (Route::has('login'))
                            @auth
                                <div class="dropdown">
                                    <button class="dropbtn">
                                        <ion-icon name="filter-outline"></ion-icon>
                                    </button>
                                    <div class="dropdown-content">
                                        <a href="{{ url('/dashboard') }}">{{ Auth::user()->name }}</a>
                                        <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                                            @csrf
                                            <a href="#" onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
                                        </form>
                                        
                                    </div>
                                </div>
                            @else
                                <li><a class='signup-btn' href='{{ route('login') }}'>Login</a></li>
                            @endauth
                        @endif
        </div>

    </header>

    <div class="container">
        <!-- Sidebar for Categories -->
        <div class="sidebar">
            <h2>Categories</h2>
            <ul>
                <li><a href="#">Fiction</a></li>
                <li><a href="#">Science Fiction</a></li>
                <li><a href="#">Fantasy</a></li>
                <li><a href="#">Romance</a></li>
                <li><a href="#">Thriller</a></li>
                <li><a href="#">Non-Fiction</a></li>
                <li><a href="#">Self-Help</a></li>
                <li><a href="#">Biographies</a></li>
            </ul>
        </div>

        <!-- Book Catalog -->
        <div class="catalog">
            <h2>Book Catalog</h2>
            <div class="books-grid">
                <div class="book-item">
                    <img src="https://via.placeholder.com/150" alt="Book Cover">
                    <h3>The Great Adventure</h3>
                    <p>by John Doe</p>
                </div>
                <div class="book-item">
                    <img src="https://via.placeholder.com/150" alt="Book Cover">
                    <h3>Science Fiction World</h3>
                    <p>by Jane Smith</p>
                </div>
                <div class="book-item">
                    <img src="https://via.placeholder.com/150" alt="Book Cover">
                    <h3>Fantasy Tales</h3>
                    <p>by Luke Sky</p>
                </div>
                <div class="book-item">
                    <img src="https://via.placeholder.com/150" alt="Book Cover">
                    <h3>Love in Times</h3>
                    <p>by Emily Heart</p>
                </div>
                <div class="book-item">
                    <img src="https://via.placeholder.com/150" alt="Book Cover">
                    <h3>Thriller Nights</h3>
                    <p>by Mike Scare</p>
                </div>
                <div class="book-item">
                    <img src="https://via.placeholder.com/150" alt="Book Cover">
                    <h3>How to Succeed</h3>
                    <p>by Sarah Guide</p>
                </div>
                <div class="book-item">
                    <img src="https://via.placeholder.com/150" alt="Book Cover">
                    <h3>Biography of a Legend</h3>
                    <p>by Anna Writer</p>
                </div>
                <div class="book-item">
                    <img src="https://via.placeholder.com/150" alt="Book Cover">
                    <h3>Mindful Living</h3>
                    <p>by Zen Peace</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>