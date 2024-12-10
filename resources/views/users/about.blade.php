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
    <link rel="stylesheet" type="text/css" href="/css/about.css">
    <title>Elibrarium</title>
</head>
<body>
    <!-- Navbar Section -->
    <header>
        <div class="header-container">
            <!-- Library Name & Logo -->
            <div class="logo">
                <img src="/logo/logo2.png" alt="Library Logo">
                <h1>About</h1>
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

    <section class="about-us">
        <div class="hero-section">
            <h1>Get a Chance to know About Us and <span class="highlight">Relive Our Journey</span></h1>
            <p>Meet our dynamic team and discover the roadmap to success as we will let you know how we work.</p>
            <a class='signup-btn' href='{{ route('login') }}'><button>Let's Read</button></a>
            <img src="/image/team.jpg" alt="Team photo" class="team-photo">
        </div>
    
        <div class="metrics">
            <div class="metric">
                <h2>1k+</h2>
                <p>Users</p>
            </div>
            <div class="metric">
                <h2>4.9</h2>
                <p>Users Rating </p>
            </div>
            <div class="metric">
                <h2>4.8</h2>
                <p>Trustpilot Rating</p>
            </div>
            <!-- <div class="metric">
                <h2>33+</h2>
                <p>Countries Served</p>
            </div> -->
        </div>
    
        <div class="executives">
            <h2>Meet our Inspiring Executives</h2>
            <div class="executive-profile">
                <img src="/image/PIC2.png" alt="Danish Wadhwa" class="profile-img">
                <div class="profile-details">
                    <h3>MJ</h3>
                    <p>A good students need a sauce</p>
                    <div class="social-icons">
                        <a href="#"><img src="/logo/facebook.png" alt="Facebook"></a>
                        <a href="#"><img src="/logo/gmail.png" alt="Gamil"></a>
                        <a href="#"><img src="/logo/call.png" alt="Call"></a>
                    </div>
                </div>
            </div>
    
            <div class="executive-profile">
                <img src="/image/PIC4.png" alt="Chehak Wadhwa" class="profile-img">
                <div class="profile-details">
                    <h3>Jam</h3>
                    <p>Jam make the creative sessions for project kick-offs.</p>
                    <div class="social-icons">
                        <a href="#"><img src="/logo/facebook.png" alt="Facebook"></a>
                        <a href="#"><img src="/logo/gmail.png" alt="Gamil"></a>
                        <a href="#"><img src="/logo/call.png" alt="Call"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <!-- Services page -->
    <section class="hero">
        <div class="services-container">
            <h1>Our Library Services</h1>
        
            <div class="service-item">
                <h2>Digital Resources</h2>
                <p>Access our extensive digital collections, including e-books, online journals, and databases. 
                    Our digital resources are available 24/7 and can be accessed remotely with your library card.</p>
            </div>
        
            <div class="service-item">
                <h2>Research Assistance</h2>
                <p>Our reference librarians are here to help you with your research needs. Whether you're looking 
                    for specific information or need guidance on using our resources, we're here to assist you.</p>
            </div>
        </div>


        <div class="services-containers">
            <h1>Library Services</h1>

            <div class="service-items">
                <h2>Ask a Librarian</h2>
                <p>Our librarians are here to help you find the information you need. Whether you’re searching for books, 
                    articles, newspapers, or websites, we provide the guidance to make your search easier and more effective.</p>
                <h3>Live Chats and Messages</h3>
                <p>Need immediate assistance? Connect with our librarians through various channels:</p>
                <ul class="communication-options">
                    <li><strong>Live Chat:</strong> Chat with a librarian in real-time.</li>
                    <li><strong>Text Messages:</strong> Send us a text and get quick answers.</li>
                    <li><strong>Email:</strong> Reach out via email for detailed inquiries.</li>
                    <li><strong>Phone:</strong> Call us during library hours for direct assistance.</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="contact-container">
            <div class="contact-info" >
                <h1>Contact Us</h1>
                <ul>
                    {{-- <li>
                        <img src="https://img.icons8.com/color/48/000000/marker.png"/>
                        <span><strong>ADDRESS</strong><br><a href="https://www.google.com/maps/place/Palawan+State+University+-+Quezon+Campus/@9.2274813,118.0037287,20.32z/data=!4m6!3m5!1s0x323526109fac9409:0xeea45881671330a3!8m2!3d9.2301187!4d118.0004815!16s%2Fg%2F11bxc679nk?entry=ttu&g_ep=EgoyMDI0MDkyMi4wIKXMDSoASAFQAw%3D%3D" class="address">
                                                             Palawan State University - Q.C </a> </span>
                    </li> --}}
                    <li> 
                        <img src="https://img.icons8.com/color/48/000000/phone.png"/>
                        <span><strong>PHONE</strong><br>+880 123 4567 890</span>
                    </li>
                    <li>
                        <img src="https://img.icons8.com/color/48/000000/domain.png"/>
                        <span><strong>WEBSITE</strong><br>www.demo.com</span>
                    </li>
                </ul>
            </div>
            <div class="contact-form">
                <h2>Send Message</h2>
                <form>
                    <label for="name">Name <span>*</span></label>
                    <div class="name-fields">
                        <input type="text" id="first-name" name="first-name" placeholder="First" required>
                        <input type="text" id="last-name" name="last-name" placeholder="Last" required>
                    </div>
                    
                    <label for="email">Email <span>*</span></label>
                    <input type="email" id="email" name="email" placeholder="Email" required>
                    
                    <label for="message">Message</label>
                    <textarea id="message" name="message" placeholder="Message" rows="5" required></textarea>
                    
                    <button type="submit">Send Message</button>
                </form>
            </div>
        </div>
    </section>
    
     <!-- Footer Section -->
     <footer class="footer">
        <div class="footer-container">
            <!-- Social Media Links with Icons -->
            {{-- <div class="icon">
                <h3>Connect with Us</h3>
                <ul class="social-media-links">
                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a href="mailto:info@yourlibrary.com"><i class="fas fa-envelope"></i></a></li>
                    <li><a href="tel:+639123456789"><i class="fas fa-phone"></i></a></li>
                </ul>
            </div>
     --}}
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