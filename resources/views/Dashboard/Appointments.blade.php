@extends('Dashboard.Admin')

@section('content')
<div class="container my-5">
    <h3 class="mb-4">📅 Appointments</h3>

    @if($appointment->isEmpty())
        <p class="text-center text-muted">No appointments available.</p>
    @else
        <div class="row">
            @foreach($appointment as $item)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card shadow-sm border-0">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->name }}</h5>
                            <p class="mb-1"><strong>Email:</strong> {{ $item->email }}</p>
                            <p class="mb-1"><strong>Phone:</strong> {{ $item->phone }}</p>
                            <p class="mb-1"><strong>Message:</strong> {{ $item->message }}</p>
                            <p class="mb-1"><strong>Date:</strong> {{ $item->created_at->format('d M Y, h:i A') }}</p>
                            <div class="mt-3 d-flex justify-content-between">
                                <a href="{{ url('/appointments/'.$item->id.'/delete') }}" class="btn btn-sm btn-danger">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection