@extends('layouts.master')

@section('content')
    <!-- Hero Section -->
    <div class="slider-area">
        <div class="single-slider hero-overly slider-height2 d-flex align-items-center"
            style="background-image: url('{{ asset('assets/img/hero/contact_hero.jpg') }}');">
            <div class="container">
                <div class="row">
                    <div class="col-md-11 offset-xl-1 offset-lg-1 offset-md-1">
                        <div class="hero-caption text-white">
                            <span>Contact</span>
                            <h2>Contact</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Section -->
    <div class="container my-5">
        <div class="row">
            <!-- Title -->
            <div class="col-12">
                <h2 class="contact-title">Contact us</h2>
            </div>

            <!-- Contact Form -->
            <div class="col-lg-8">
                <form class="form-contact contact_form" action="/Contact" method="post" id="contactForm" novalidate>
                    @csrf
                    <div class="row">
                        <!-- Message -->
                        <div class="col-12">
                            <div class="form-group">
                                <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"
                                    placeholder="Enter Message" onfocus="this.placeholder=''" onblur="this.placeholder='Enter Message'"></textarea>
                            </div>
                        </div>

                        <!-- Name -->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control valid" name="name" id="name" type="text"
                                    placeholder="Enter your name" onfocus="this.placeholder=''"
                                    onblur="this.placeholder='Enter your name'">
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control valid" name="email" id="email" type="email"
                                    placeholder="Email" onfocus="this.placeholder=''"
                                    onblur="this.placeholder='Enter email address'">
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input class="form-control valid" name="phone" id="phone" type="text"
                                    placeholder="Enter your phone" onfocus="this.placeholder=''"
                                    onblur="this.placeholder='Enter your phone'">
                            </div>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="form-group mt-3">
                        <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                    </div>
                </form>
            </div>

            <!-- Contact Info -->
            <div class="col-lg-3 offset-lg-1">
                <div class="media contact-info mb-4">
                    <span class="contact-info__icon"><i class="ti-home"></i></span>
                    <div class="media-body">
                        <h3>Egypt, Cairo.</h3>
                        <p>Maadi, CA 91770</p>
                    </div>
                </div>
                <div class="media contact-info mb-4">
                    <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                    <div class="media-body">
                        <h3>+20 01 846 3995</h3>
                        <p>Mon to Fri 9am to 6pm</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-email"></i></span>
                    <div class="media-body">
                        <h3>mohamedselim@colorlib.com</h3>
                        <p>Send us your query anytime!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
