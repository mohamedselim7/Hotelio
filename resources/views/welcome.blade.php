<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Hotelio - Luxury Hotel & Resort</title>
    <meta name="description" content="Experience luxury and comfort at Hotelio, the top hotel in the city with premium amenities and exceptional service.">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <strong>Hotelio</strong>
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader End -->

    <header>
        <!-- Header Start -->
        <div class="header-area header-sticky">
            <div class="main-header">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- logo -->
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo">
                                <a href="{{ url('/') }}"><img src="assets/img/logo/logo.png" alt="Hotelio Logo"></a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8">
                            <!-- main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">                                                                                                                                     
                                        <li><a href="{{ url('/') }}">Home</a></li>
                                        <li><a href="{{ url('/Rooms') }}">Rooms</a></li>
                                        <li><a href="{{ url('/Services') }}">Services</a></li>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>

    <main>
        <!-- slider Area Start-->
        <div class="slider-area">
            <!-- Mobile Menu -->
            <div class="slider-active dot-style">
                <div class="single-slider hero-overly slider-height d-flex align-items-center" data-background="assets/img/hero/h1_hero.jpg">
                    <div class="container">
                        <div class="row justify-content-center text-center">
                            <div class="col-xl-9">
                                <div class="h1-slider-caption">
                                    <h1 data-animation="fadeInUp" data-delay=".4s">top hotel in the city</h1>
                                    <h3 data-animation="fadeInDown" data-delay=".4s">Hotel & Resort</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slider hero-overly slider-height d-flex align-items-center" data-background="assets/img/hero/h1_hero.jpg">
                    <div class="container">
                        <div class="row justify-content-center text-center">
                            <div class="col-xl-9">
                                <div class="h1-slider-caption">
                                    <h1 data-animation="fadeInUp" data-delay=".4s">luxury experience</h1>
                                    <h3 data-animation="fadeInDown" data-delay=".4s">Comfort & Elegance</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slider hero-overly slider-height d-flex align-items-center" data-background="assets/img/hero/h1_hero.jpg">
                    <div class="container">
                        <div class="row justify-content-center text-center">
                            <div class="col-xl-9">
                                <div class="h1-slider-caption">
                                    <h1 data-animation="fadeInUp" data-delay=".4s">unforgettable stays</h1>
                                    <h3 data-animation="fadeInDown" data-delay=".4s">Memories to Last</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Make customer Start-->
        <section class="make-customer-area customar-padding fix">
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-xl-5 col-lg-6">
                        <div class="customer-img mb-120">
                            <img src="assets/img/customer/customar1.png" class="customar-img1" alt="Happy customer">
                            <img src="assets/img/customer/customar2.png" class="customar-img2" alt="Hotel staff">
                            <div class="service-experience heartbeat">
                                <h3>25 Years of Service<br>Experience</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="customer-caption">
                            <span>About Our Hotel</span>
                            <h2>Make the customer the hero of your story</h2>
                            <div class="caption-details">
                                <p>Welcome to Hotelio, where comfort meets excellence. Our hotel offers a perfect blend of modern amenities and warm hospitality to make your stay unforgettable. Whether you're here for business or leisure, our dedicated team ensures every detail is taken care of, from cozy rooms and fine dining to personalized services. Experience a stay designed with your comfort in mind, right at the heart of the city.</p>
                                <a href="#" class="btn more-btn1">Learn More <i class="ti-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Make customer End-->

        <!-- Room Start -->
        <section class="room-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <div class="font-back-tittle mb-45">
                            <div class="archivment-front">
                                <h3>Our Rooms</h3>
                            </div>
                            <h3 class="archivment-back">Our Rooms</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($rooms as $item)
                    <div class="col-xl-4 col-lg-6 col-md-6 mb-4">
                        <div class="single-room mb-50">
                            <div class="room-img">
                                <a href="#"><img src="{{ asset($item->imagepath) }}" alt="{{ $item->name }}"></a>
                            </div>
                            <div class="room-caption">
                                <h3><a href="#">{{ $item->name }}</a></h3>
                                <div class="per-night">
                                    <span><u>$</u>{{ $item->price }} <span>/ per night</span></span>
                                </div>
                                <div class="room-btn mt-3">
                                    <a href="/DeleteRoom/{{ $item->id }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this room?');">
                                        <i class="fa fa-trash"></i> Delete
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Room End -->

        <!-- Services Start -->
        <section class="dining-area dining-padding-top">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <div class="font-back-tittle mb-45">
                            <div class="archivment-front">
                                <h3>Our Services</h3>
                            </div>
                            <h3 class="archivment-back">Our Services</h3>
                        </div>
                    </div>
                </div>
                
                @foreach ($services as $item)
                <div class="single-dining-area left-img mb-50">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-5 col-md-5">
                                <div class="dining-img">
                                    <img src="{{ asset($item->imagepath) }}" alt="{{ $item->NameOfService }}" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7">
                                <div class="dining-caption">
                                    <span>{{ $item->NameOfService }}</span>
                                    <h3>{{ $item->NameOfServiceProvided }}</h3>
                                    <p>{{ $item->DescriptionOfService }}</p>
                                    <a href="#" class="btn border-btn">Learn More <i class="ti-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
        <!-- Services End -->

        <!-- Testimonial Start -->
        <section class="testimonial-area t-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-9">
                        <div class="font-back-tittle mb-105">
                            <div class="archivment-front">
                                <img src="assets/img/logo/logo2_footer.png" alt="Testimonial title">
                            </div>
                            <h3 class="archivment-back">Testimonial</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="h1-testimonial-active">
                            @foreach ($rate as $item)
                            <div class="single-testimonial text-center">
                                <div class="testimonial-caption">
                                    <div class="testimonial-founder">
                                        <div class="founder-img mb-30">
                                            <img src="{{ asset($item->imagepath) }}" alt="{{ $item->name }}" width="80" height="80">
                                        </div>
                                    </div>
                                    <div class="testimonial-top-cap">
                                        <p>{{ $item->YourOpinion }}</p>
                                    </div>
                                    <div class="testimonial-ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="rattiong-caption">
                                        <span>{{ $item->name }}, <span>{{ $item->TypeOfClient }}</span></span>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial End -->

        <!-- Blog Start -->
        

    <footer>
        <!-- Footer Start-->
        <div class="footer-area black-bg footer-padding">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-30">
                            <div class="footer-logo">
                                <a href="index.html"><img src="assets/img/logo/logo2_footer.png" alt="Hotelio footer logo"></a>
                            </div>
                            <div class="footer-social footer-social2">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fas fa-globe"></i></a>
                                <a href="#"><i class="fab fa-behance"></i></a>
                            </div>
                            <div class="footer-pera">
                                <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-5">
                        <div class="single-footer-caption mb-30">
                            <div class="footer-tittle">
                                <h4>Quick Links</h4>
                                <ul>
                                    <li><a href="#">About Hotelio</a></li>
                                    <li><a href="#">Our Best Rooms</a></li>
                                    <li><a href="#">Our Photo Gellary</a></li>
                                    <li><a href="#">Pool Service</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                        <div class="single-footer-caption mb-30">
                            <div class="footer-tittle">
                                <h4>Reservations</h4>
                                <ul>
                                    <li><a href="tel:3455667889">Tel: 345 5667 889</a></li>
                                    <li><a href="#">Skype: Hoteliobooking</a></li>
                                    <li><a href="mailto:reservations@hotelio.com">reservations@hotelio.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-30">
                            <div class="footer-tittle">
                                <h4>Our Location</h4>
                                <ul>
                                    <li><a href="#">198 West 21th Street,</a></li>
                                    <li><a href="#">Suite 721 New York NY 10016</a></li>
                                </ul>
                                <div class="footer-form">
                                    <div id="mc_embed_signup">
                                        <form target="_blank" action="#" method="get" class="subscribe_form relative mail_part">
                                            <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address" class="placeholder hide-on-focus" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'">
                                            <div class="form-icon">
                                                <button type="submit" name="submit" id="newsletter-submit" class="email_icon newsletter-submit button-contactForm"><img src="assets/img/logo/form-iocn.jpg" alt="Submit"></button>
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
        <!-- Footer End-->
    </footer>

    <!-- JS here -->
    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/jquery.slicknav.min.js"></script>
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <script src="./assets/js/gijgo.min.js"></script>
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>
    <script src="./assets/js/jquery.scrollUp.min.js"></script>
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>
</body>
</html>