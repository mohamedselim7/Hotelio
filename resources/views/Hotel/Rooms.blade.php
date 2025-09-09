@extends('layouts.master')

@section('content')
    <div class="single-slider hero-overly slider-height2 d-flex align-items-center"
        style="background-image: url('{{ asset('assets/img/hero/roomspage_hero.jpg') }}');">
        <div class="container">
            <div class="row">
                <div class="col-md-11 offset-xl-1 offset-lg-1 offset-md-1">
                    <div class="hero-caption text-white">
                        <span>Rooms</span>
                        <h2>Our Rooms</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-xl-8 text-center">
                <div class="font-back-tittle mb-5">
                    <div class="archivment-front">
                        <h3>Our Rooms</h3>
                    </div>
                    <h3 class="archivment-back">Our Rooms</h3>
                </div>
            </div>
        </div>

        <div class="row g-4 justify-content-center">
            @foreach ($rooms as $item)
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm">
                        <img src="{{ asset($item->imagepath) }}" class="card-img-top" alt="{{ $item->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->name }}</h5>
                            <p class="card-text"><strong>${{ $item->price }}</strong> / per night</p>


                            <a href="/DeleteRoom/{{$item->id }}" class="btn btn-danger btn-sm"
                                onclick="return confirm('Are you sure you want to delete this room?');">
                                <i class="fa fa-trash"></i> Delete
                            </a>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
