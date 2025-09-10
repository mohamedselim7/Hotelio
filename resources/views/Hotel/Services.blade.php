@extends('layouts.master')

@section('content')
    <!-- ====== Hero Section ====== -->
    <div class="slider-area">
        <div class="single-slider hero-overly slider-height2 d-flex align-items-center"
            style="background-image: url('{{ asset('assets/img/hero/servicespage_hero.jpg') }}');">
            <div class="container">
                <div class="row">
                    <div class="col-md-11 offset-xl-1 offset-lg-1 offset-md-1">
                        <div class="hero-caption">
                            <span>Services</span>
                            <h2>Services</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ====== Services Section ====== -->
    @foreach ($services as $item)
        <div class="single-dining-area left-img py-5">
            <div class="container">
                <div class="row align-items-center">
                    <!-- صورة الخدمة -->
                    <div class="col-lg-4 col-md-4 mb-3 mb-md-0">
                        <img src="{{ asset($item->imagepath) }}" alt="{{ $item->NameOfService }}"
                            class="img-fluid rounded shadow-sm">
                    </div>

                    <!-- نص الخدمة -->
                    <div class="col-lg-8 col-md-8">
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

    <!-- ====== Form Add Opinion ====== -->
    @include('YourOpinion')

    <!-- ====== Testimonials Section ====== -->
    <section class="testimonial-area t-padding py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9 col-lg-9 col-md-9">
                    <div class="h1-testimonial-active">
                        @foreach ($rate as $item)
                            <!-- Single Testimonial -->
                            <div class="single-testimonial pt-65">
                                <!-- Testimonial Title -->
                                <div class="font-back-tittle mb-105">
                                    <div class="archivment-front">
                                        <img src="{{ asset($item->imagepath) }}" alt="{{ $item->name }}"
                                            class="rounded-circle" width="80" height="80"
                                            style="object-fit: cover;">
                                    </div>
                                    <h3 class="archivment-back">Testimonial</h3>
                                </div>

                                <!-- Testimonial Content -->
                                <div class="testimonial-caption text-center">
                                    <p>{{ $item->YourOpinion }}</p>

                                    <!-- Rating -->
                                    <div class="testimonial-ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>

                                    <!-- Client Info -->
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
@endsection
