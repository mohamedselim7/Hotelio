@extends('layouts.master')


@section('content')
    
 <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <form class="form-contact contact_form" action="/AddServices" method="post" id="contactForm" novalidate
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12 mb-3">
                            <div class="form-group">
                                <textarea class="form-control w-100" name="DescriptionOfService" id="DescriptionOfService" cols="30" rows="5"
                                    placeholder="Enter description Of Service" onfocus="this.placeholder=''" onblur="this.placeholder='Enter description Of Service'"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <div class="form-group">
                                <input class="form-control" name="NameOfService" id="NameOfService" type="text"
                                    placeholder="Enter Name Of Service" onfocus="this.placeholder=''"
                                    onblur="this.placeholder='Enter Name Of Service'">
                            </div>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <div class="form-group">
                                <input class="form-control" name="NameOfServiceProvided" id="NameOfServiceProvided" type="text"
                                    placeholder="Name Of Services provided" onfocus="this.placeholder=''"
                                    onblur="this.placeholder='Name Of Services provided'">
                            </div>
                        </div>
                        <div class="col-12 mb-3">
                            <div class="form-group">
                                <label for="image" class="form-label">Upload Room Image</label>
                                <input class="form-control" type="file" name="image" id="image">
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-primary">Add service</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>





@endsection