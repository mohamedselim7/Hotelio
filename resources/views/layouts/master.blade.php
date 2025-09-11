<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotelio</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Font Awesome (أيقونات) -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>

    <!-- Header -->
    <div class="header-area header-sticky">
        <div class="main-header">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Logo -->
                    <div class="col-xl-2 col-lg-2">
                        <div class="logo">
                            <a href="{{ url('/') }}"><img src="{{ asset('assets/img/logo/logo.png') }}"
                                    alt=""></a>
                        </div>
                    </div>

                    
                    <div class="col-xl-8 col-lg-8">
                        <div class="main-menu f-right d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li><a href="{{ url('/Rooms') }}">Rooms</a></li>
                                    <li><a href="{{ url('/Services') }}">Service</a></li>
                                    <li><a href="{{ url('/Contact') }}">Contact</a></li>
                                     <li><a href="{{ url('/PhotosVideos') }}">Photos & Videos</a></li>
                                         @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li>
                                <a  href="#" >
                                    {{ Auth::user()->name }}
                                </a>
                            </li>
                            <li>
                                    <a  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                            </li>
                        @endguest
                                </ul>
                                
                            </nav>
                        </div>
                    </div>


                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content -->
    @yield('content')

    <!-- Footer -->
    <div class="footer-area black-bg footer-padding">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="single-footer-caption mb-30">
                        <div class="footer-logo">
                            <a href="{{ url('/') }}"><img src="{{ asset('assets/img/logo/logo2_footer.png') }}"
                                    alt=""></a>
                        </div>
                        <div class="footer-social footer-social2">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fas fa-globe"></i></a>
                            <a href="#"><i class="fab fa-behance"></i></a>
                        </div>
                        <div class="footer-pera">
                            <p>
                                Copyright ©
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> 2025 All rights reserved | This template is made with <i
                                    class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com"
                                    target="_blank">Colorlib</a>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-5">
                    <div class="single-footer-caption mb-30">
                        <div class="footer-tittle">
                            <h4>Quick Links</h4>
                            <ul>
                                <li><a href="#">About Mariana</a></li>
                                <li><a href="#">Our Best Rooms</a></li>
                                <li><a href="#">Our Photo Gallery</a></li>
                                <li><a href="#">Pool Service</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Reservations -->
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                    <div class="single-footer-caption mb-30">
                        <div class="footer-tittle">
                            <h4>Reservations</h4>
                            <ul>
                                <li><a href="#">Tel: 345 5667 889</a></li>
                                <li><a href="#">Skype: Marianabooking</a></li>
                                <li><a href="#">reservations@hotelriver.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Location & Newsletter -->
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                    <div class="single-footer-caption mb-30">
                        <div class="footer-tittle">
                            <h4>Our Location</h4>
                            <ul>
                                <li><a href="#">198 West 21th Street,</a></li>
                                <li><a href="#">Suite 721 New York NY 10016</a></li>
                            </ul>

                            <!-- Newsletter Form -->
                            <div class="footer-form">
                                <div id="mc_embed_signup">
                                    <form target="_blank"
                                        action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                        method="get" class="subscribe_form relative mail_part" novalidate="true">
                                        <input type="email" name="EMAIL" id="newsletter-form-email"
                                            placeholder="Email Address" class="placeholder hide-on-focus"
                                            onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = ' Email Address '">
                                        <div class="form-icon">
                                            <button type="submit" name="submit" id="newsletter-submit"
                                                class="email_icon newsletter-submit button-contactForm">
                                                <img src="{{ asset('assets/img/logo/form-iocn.jpg') }}"
                                                    alt="">
                                            </button>
                                        </div>
                                        <div class="mt-10 info"></div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
