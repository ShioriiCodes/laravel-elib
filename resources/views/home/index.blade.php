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
    <title>Elibrarium</title>
</head>
<body>
    <!-- Navbar Section -->
    <header>
        <div class="header-container">
            <!-- Library Name & Logo -->
            <div class="logo">
                <img src="/logo/logo2.png" alt="Library Logo">
                <h1>Home</h1>
            </div>
            <!-- Navigation Menu -->
            <nav class="nav-menu">
                <ul>
                    <li><a href="{{ route('home.index') }}">Home</a></li>
                    <li><a href="{{ route('home.catalog') }}">Category</a></li>
                    <li><a href="{{ route('home.announcement') }}">Announcement</a></li>
                    <li><a href="{{ route('home.about') }}">About Us</a></li>
                    
                        @if (Route::has('login'))
                            @auth
                                <div class="dropdown">
                                    <button class="dropbtn">
                                        <ion-icon name="filter-outline"></ion-icon>
                                    </button>
                                    <div class="dropdown-content">
                                        <a href="{{ Auth::user()->user_type === 'admin' ? url('/dashboard') : url('/home') }}">{{ Auth::user()->name }}</a>
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
    <section class="banner">
        <h1>Your community's knowledge hub</h1>
        <p>Your dedicated resource center for academic excellence</p>
    </section>

    <!-- Featured Books Section -->
    <section class="featured-books">
        <h2>New Arrivals & Featured Books</h2>
        <div class="books-grid">
            <div class="book">
                <img src="/image/Mybook.png" alt="Book 1">
                <span class="badge">14</span>
                <p>Most Recommended</p>
            </div>
            <div class="book">
                <img src="/image/Mybook1.png" alt="Book 2">
                <span class="badge">11</span>
                <p>Highest Downloads</p>
            </div>
            <div class="book">
                <img src="/image/Mybook2.png" alt="Book 3">
                <span class="badge">10</span>
                <p>Most Visited</p>
            </div>
        </div>
    </section>

    <!-- Library Services Section -->
    <section class="library-services">
        <h2>Our Library Services</h2>
        <div class="services-grid">
            <div class="service">
                <h3>Online Resources</h3>
                <p>Access e-books, audiobooks, and online journals from anywhere at any time here in elibrarium.</p>
                <button class="learn-more">Learn more</button>
            </div>
            <div class="service">
                <h3>Reference Services</h3>
                <p>Librarians help with research queries and locating resources.</p>
                <button class="learn-more">Learn more</button>
            </div>
            <div class="service">
                <h3>Study Rooms</h3>
                <p>Reserve private study rooms equipped with "DICT" Wi-Fi and other essential amenities.</p>
                <button class="learn-more">Learn more</button>
            </div>
        </div>
    </section>
    
    <!-- Users' Top Comments Section -->
    <section class="top-comments">
        <h2>Users Top Comments</h2>
        <div class="comments-grid">
            <div class="comment-card">
                <img src="/image/PIC6.jpg" alt="User 1">
                <p><strong>Jeanamae Escalante</strong></p>
                <p>"The user interface is so intuitive. I appreciate how easy it is to navigate and find what I'm looking for."</p>
                <div class="interaction">
                    <span>⭐️⭐️⭐️⭐️⭐️</span>
                    <span class="likes">623 Likes</span> | <span class="comments">239 Comments</span>
                </div>
            </div>
            <div class="comment-card">
                <img src="/image/PIC2.png" alt="User 2">
                <p><strong>Maryjoy Layba</strong></p>
                <p>"The library is my go-to place for research. The staff is always helpful, and the resources are top-notch!"</p>
                <div class="interaction">
                    <span>⭐️⭐️⭐️⭐️⭐️</span>
                    <span class="likes">607 Likes</span> |  <span class="comments">189 Comments</span>
                </div>
            </div>
            <div class="comment-card">
                <img src="/image/PIC3.png" alt="User 3">
                <p><strong>Jamyca Gualdrapa</strong></p>
                <p>"The online resources have been a lifesaver during my studies. I can access everything I need from home."</p>
                <div class="interaction">
                    <span>⭐️⭐️⭐️⭐️⭐️</span>
                    <span class="likes">589 Likes</span> |  <span class="comments">154 Comments</span>
                </div>
            </div>
        </div>
        <div class="load-more">
            <a href="#" class="more-comments">See more comments<i class="fa-solid fa-angle-down"></i></a>
        </div>
    </section>

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