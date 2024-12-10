<x-app-layout>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('logo.ico') }}" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
    <link rel="stylesheet" type="text/css" href="/css/index.css">   
    <link rel="stylesheet" type="text/css" href="/css/about.css">
    <div class="container">
        <!-- Navbar Section -->
        @if (Route::has('login'))
        @auth
            <header>
                @else
                    <li><a class='signup-btn' href='{{ route('login') }}'>Sign in</a></li>
                    <div class="header-container">
                        <!-- Library Name & Logo -->
                        <div class="logo">
                            <img src="/logo/logo2.png" alt="Library Logo">
                            <h1>About</h1>
                        </div>
                        <!-- Navigation Menu -->
                        <nav class="nav-menu">
                            <ul>
                                <li><a href="href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">Dashboard</a></li>
                                <li><a href="{{ route('home.index') }}">Home</a></li>
                                <li><a href="{{ route('home.catalog') }}">Category</a></li>
                                <li><a href="{{ route('home.announcement') }}">Announcement</a></li>
                                <li><a href="{{ route('home.about') }}">About Us</a></li>                       
                            </ul>
                        </nav>
                    </div>
            </header>
        @endauth
    @endif

        <section class="about-us">
            <div class="hero-section">
                <h1>Get a Chance to know About Us and <span class="highlight">Relive Our Journey</span></h1>
                <p>Meet our dynamic team and discover the roadmap to success as we will let you know how we work.</p>
                {{-- @if (Route::has('login'))
                @auth
                @else
                    
               
                <a class='signup-btn' href="{{ route('login') }}"><button>Let's Read</button></a>
                @endauth --}}<a class='signup-btn' href="{{ route('login') }}"><button>Let's Read</button></a>
                <img src="/image/team.jpg" alt="Team photo" class="team-photo">
            </div>

            <div class="metrics-container">
                <div class="metrics">
                    <div class="metric">
                        <h2>1k+</h2>
                        <p>Users</p>
                    </div>
                    <div class="metric">
                        <h2>4.9</h2>
                        <p>Users Rating</p>
                    </div>
                    <div class="metric">
                        <h2>4.8</h2>
                        <p>Trustpilot Rating</p>
                    </div>
                </div>
            </div>

            <div class="executives">
                <h2>Meet our Inspiring Executives</h2>
                <div class="executive-profile">
                    <img src="/image/PIC2.png" alt="Danish Wadhwa" class="profile-img">
                    <div class="profile-details">
                        <h3>MJ</h3>
                        <p>A good student needs a sauce</p>
                        <div class="social-icons">
                            <a href="#"><img src="/logo/facebook.png" alt="Facebook"></a>
                            <a href="#"><img src="/logo/gmail.png" alt="Gmail"></a>
                            <a href="#"><img src="/logo/call.png" alt="Call"></a>
                        </div>
                    </div>
                </div>

                <div class="executive-profile">
                    <img src="/image/PIC4.png" alt="Chehak Wadhwa" class="profile-img">
                    <div class="profile-details">
                        <h3>Jam</h3>
                        <p>Jam makes the creative sessions for project kick-offs.</p>
                        <div class="social-icons">
                            <a href="#"><img src="/logo/facebook.png" alt="Facebook"></a>
                            <a href="#"><img src="/logo/gmail.png" alt="Gmail"></a>
                            <a href="#"><img src="/logo/call.png" alt="Call"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section class="hero">
            <div class="services-container">
                <h1>Our Library Services</h1>
                <div class="service-item">
                    <h2>Digital Resources</h2>
                    <p>Access our extensive digital collections, including e-books, online journals, and databases. Our digital resources are available 24/7 and can be accessed remotely with your library card.</p>
                </div>
                <div class="service-item">
                    <h2>Research Assistance</h2>
                    <p>Our reference librarians are here to help you with your research needs. Whether you're looking for specific information or need guidance on using our resources, we're here to assist you.</p>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section class="contact-section">
            <div class="contact-container">
                <div class="contact-info">
                    <h1>Contact Us</h1>
                    <ul>
                        <li><img src="https://img.icons8.com/color/48/000000/phone.png"/>
                            <span><strong>PHONE</strong><br>+63 923 4567 890</span></li>
                    </ul>
                </div>
                <div class="contact-form">
                    <h2>Send Message</h2>
                    
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
    </div>
</x-app-layout>
