<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <!-- <h1 class="logo me-auto"><a href="index.html"><span>BEL</span></a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="{{ route('home') }}" class="logo me-auto"><img src="{{ asset('assets/images/logow.png') }}" alt=""
                class="img-fluid"></a>

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a href="{{ route('home') }}" class="active">Home</a></li>
                <li><a href="#about-us">About Us</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#Gallery">Gallery</a></li>
                <li><a href="#contact">Contact</a></li>

            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        <div class="header-social-links d-flex">
            <a href="https://twitter.com/" class="twitter"><i class="bu bi-twitter"></i></a>
            <a href="https://facebook.com/" class="facebook"><i class="bu bi-facebook"></i></a>
            <a href="https://instagram.com/" class="instagram"><i class="bu bi-instagram"></i></a>
            <a href="https://linkedin.com/" class="linkedin"><i class="bu bi-linkedin"></i></i></a>
        </div>
        <div class="header-social-links d-flex">
            @guest
                @if (Route::has('login'))
                    <b><a href="{{ route('login') }}" class="twitter">Login</a></b>
                @endif
            @else
                <b><a class="twitter" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a></b>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @endif
            </div>

        </div>
    </header><!-- End Header -->
