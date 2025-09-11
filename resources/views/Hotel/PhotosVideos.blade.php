@extends('layouts.master')

@section('content')

<div class="container py-5">

    {{-- معرض الصور --}}
    <h2 class="mb-4 text-center">📸 Our Gallery</h2>
    <div class="row g-4">
        @foreach ($photos as $item)
            <div class="col-lg-4 col-md-6">
                <div class="card border-0 shadow-sm overflow-hidden gallery-item">
                    <a href="{{ asset($item->imagepath) }}" data-lightbox="photos" data-title="{{ $item->description }}">
                        <img src="{{ asset($item->imagepath) }}" class="card-img-top img-fluid" alt="{{ $item->description }}">
                        <div class="overlay">
                            <div class="overlay-text">View Photo</div>
                        </div>
                    </a>
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $item->description }}</h5>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    {{-- معرض الفيديو --}}
    <h2 class="mt-5 mb-4 text-center">🎬 Our Videos</h2>
    <div class="row g-4">
        @foreach ($videos as $item)
            <div class="col-lg-4 col-md-6">
                <div class="card border-0 shadow-sm overflow-hidden video-item">
                    <video controls class="w-100" style="border-radius: 5px;">
                        <source src="{{ asset($item->videospath) }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $item->description }}</h5>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</div>


<style>
.gallery-item {
    position: relative;
    cursor: pointer;
}
.gallery-item img {
    transition: transform 0.3s ease;
}
.gallery-item:hover img {
    transform: scale(1.1);
}
.overlay {
    position: absolute;
    top: 0; left: 0;
    width: 100%; height: 100%;
    background: rgba(0,0,0,0.35);
    opacity: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: opacity 0.3s ease;
}
.gallery-item:hover .overlay {
    opacity: 1;
}
.overlay-text {
    color: #fff;
    font-size: 1.2rem;
    font-weight: bold;
}
.video-item video {
    transition: transform 0.3s ease;
}
.video-item:hover video {
    transform: scale(1.05);
}
</style>


<link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"></script>

@endsection