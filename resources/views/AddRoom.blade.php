@extends('layouts.master')

@section('content')
    <div class="single-slider hero-overly slider-height2 d-flex align-items-center"
        style="background-image: url('{{ asset('assets/img/hero/contact_hero.jpg') }}');">
        <div class="container">
            <div class="row">
                <div class="col-md-11 offset-xl-1 offset-lg-1 offset-md-1">
                    <div class="hero-caption text-white">
                        <span>Add Room</span>
                        <h2>Add Room</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <form class="form-contact contact_form" action="/AddRoom" method="post" id="contactForm" novalidate
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12 mb-3">
                            <div class="form-group">
                                <textarea class="form-control w-100" name="description" id="description" cols="30" rows="5"
                                    placeholder="Enter description" onfocus="this.placeholder=''" onblur="this.placeholder='Enter description'"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <div class="form-group">
                                <input class="form-control" name="name" id="name" type="text"
                                    placeholder="Enter Name Of Room" onfocus="this.placeholder=''"
                                    onblur="this.placeholder='Enter Name Of Room'">
                            </div>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <div class="form-group">
                                <input class="form-control" name="price" id="price" type="text"
                                    placeholder="Price Of Room" onfocus="this.placeholder=''"
                                    onblur="this.placeholder='Price Of Room'">
                            </div>
                        </div>
                        <div class="col-12 mb-3">
                            <div class="form-group">
                                <label for="image" class="form-label">Upload Room Image</label>
                                <input class="form-control" type="file" name="image" id="image">
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-primary">Add Room</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
