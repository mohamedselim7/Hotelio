@extends('layouts.master')

@section('content')
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
@endsection