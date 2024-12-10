<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('logo.ico') }}" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
    <link rel="stylesheet" type="text/css" href="/css/index.css">
    <link rel="stylesheet" type="text/css" href="/css/announcement.css">   
    <title>Elibrarium</title>
</head>
<body>
    <!-- Navbar Section -->
    <header>
        <div class="header-container">
            <!-- Library Name & Logo -->
            <div class="logo">
                <img src="/logo/logo2.png" alt="Library Logo">
                <h1>Announcement</h1>
            </div>
            <!-- Navigation Menu -->
            <nav class="nav-menu">
                <ul>
                    <li><a href="{{ route('users.index') }}">Home</a></li>
                    <li><a href="{{ route('users.catalog') }}">Category</a></li>
                    <li><a href="{{ route('users.announcement') }}">Announcement</a></li>
                    <li><a href="{{ route('users.about') }}">About Us</a></li>
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
                                <li><a class='signup-btn' href='{{ route('login') }}'>Sign in</a></li>
                            @endauth
                        @endif
                </ul>
            </nav>
        </div>
    </header>

    <!-- Banner Section -->
    <main>
        <!-- Header with Image -->
        <header class="hero">
            <div class="overlay">
                <h1>Your community's knowledge hub</h1>
                <p>Your dedicated resource center for academic excellence</p>
            </div>
        </header>
        <!-- Grid Posts Section -->
        <section class="post-grid">
            <div class="post-item">
                <img src="/image/6.png" alt="PSU">
                <h2>Palawan State University - Q.C </h2>
                <p>Where the location of our campus</p>
            </div>
            <div class="post-item">
                <img src="/image/3.png" alt="Library">
                <h2>Library</h2>
                <p>Our library is where you can find the library</p>
            </div>
            <div class="post-item">
                <img src="/image/5.png" alt="Librarian">
                <h2>Librarian</h2>
                <p>where our librarian is stationed</p>
            </div>
            <div class="post-item">
                <img src="/image/2.png" alt="BSIT Books">
                <h2>BSIT Books</h2>
                <p>This the finished books of our IT capstone project</p>
            </div>
            <div class="post-item">
                <img src="/image/4.png" alt="September">
                <h2>Other Books</h2>
                <p>Other academic books you can read here</p>
            </div>
            <div class="post-item">
                <img src="/image/1.png" alt="Getting Lost">
                <h2>Books of what you need</h2>
                <p>Is not a waste of time</p>
            </div>
        </section>
        <!-- Additional Section with Text -->
        <section class="additional-content">
            <p>Embarking on a journey to the world of knowledge...</p>
            <img src="/image/psu.jpg" alt="Road">
        </section>
    </main>

     <!-- Footer Section -->
     <footer class="footer">
        <div class="footer-container">
            <!-- Social Media Links with Icons -->
            <div class="icon">
                <h3>Connect with Us</h3>
                <ul class="social-media-links">
                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a href="mailto:info@yourlibrary.com"><i class="fas fa-envelope"></i></a></li>
                    <li><a href="tel:+639123456789"><i class="fas fa-phone"></i></a></li>
                </ul>
            </div>
    
            <!-- Quick Links -->
            <div class="footer-column">
                <h3>Quick Links</h3>
                <ul class="quick-links">
                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="https://www.google.com/maps/place/Palawan+State+University+-+Quezon+Campus/@9.228177,118.000758,16.21z/data=!4m6!3m5!1s0x323526109fac9409:0xeea45881671330a3!8m2!3d9.2301187!4d118.0004815!16s%2Fg%2F11bxc679nk?entry=ttu&amp;g_ep=EgoyMDI0MDgyOC4wIKXMDSoASAFQAw%3D%3D">Site Map</a></li>
                </ul>
            </div>
        </div>
        </footer>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="/javascript/script.js"></script>
    
</body>
</html> 