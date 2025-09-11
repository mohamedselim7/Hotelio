@extends('Dashboard.Admin')

@section('content')
<div class="container my-5">
    <div class="d-flex flex-row flex-nowrap overflow-auto gap-3">
        @foreach ($User as $item)
            <div class="card shadow-sm border-0 text-center" style="min-width: 220px;">
                <div class="card-body">
                   
                    <img src="{{ asset($item->profile_image ?? 'assets/img/default_user.png') }}" 
                         class="rounded-circle mb-3" width="120" height="120" alt="User Image">

            
                    <h5 class="card-title">{{ $item->name }}</h5>

                    
                    <p class="text-muted mb-2">
                        @if($item->role === 'admin')
                            🛡️ Admin
                        @elseif($item->role === 'staff')
                            👔 Staff
                        @else
                            👤 User
                        @endif
                    </p>

                   
                    <p class="card-text text-secondary" style="font-size: 0.85rem;">
                        {{ $item->description ?? 'No description available.' }}
                    </p>

                    
                    <div class="d-flex justify-content-center gap-2 mt-2">
                        <a href="{{ url('/users/'.$item->id.'/edit') }}" class="btn btn-sm btn-primary">Edit</a>
                        <a href="{{ url('/users/'.$item->id.'/delete') }}" class="btn btn-sm btn-danger">Delete</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection