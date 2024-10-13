<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('logo.ico') }}" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/responsive.css">   
    <link rel="stylesheet" type="text/css" href="/css/resindex.css">   
    <title>Home</title>
</head>
<body>
    <header>
        <div class="header-container">
            <!-- Library Name & Logo -->
            <div class="logo">
                <img src="logo/logo2.png" alt="Library Logo">
                <h1>Home</h1>
            </div>
            <!-- Navigation Menu -->
            <nav class="nav-menu">
                <ul>
                    <li><a href='index.html'>Home</a></li>
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
                                        <a href="">Logout</a>
                                    </div>
                                </div>
                            @else
                                <li><a class='signup-btn' href='{{ route('login') }}'>Sign-in</a></li>
                            @endauth
                        @endif
                </ul>
            </nav>
                <div class="hamburger-menu">
                    <i class="fa-solid fa-bars"></i>
                </div>
        </div>
    </header>
    {{-- Hero Section --}}
    <section class="hero">
        <div class="hero-content">
            <h2>Your community's knowledge hub</h2>
            <p>Your dedicated resource center for academic excellence</p>
        </div>
    </section>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>