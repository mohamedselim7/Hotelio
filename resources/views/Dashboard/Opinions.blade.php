@extends('Dashboard.Admin')

@section('content')
<div class="container my-5">
    <h3 class="mb-4">💬 Customer Reviews</h3>

    <div class="d-flex flex-row flex-nowrap overflow-auto gap-3">
        @foreach ($rate as $item)
            <div class="card shadow-sm border-0 p-3" style="min-width: 250px;">
                <div class="d-flex align-items-center mb-2">
                    <img src="{{ asset($item->imagepath ?? 'assets/img/default_user.png') }}" 
                         class="rounded-circle me-2" width="50" height="50" alt="{{ $item->name }}">
                    <h6 class="mb-0">{{ $item->name }}</h6>
                </div>
                <p class="text-secondary" style="font-size: 0.9rem;">
                    "{{ $item->YourOpinion }}"
                </p>
                <p class="text-muted" style="font-size: 0.8rem;">
                    Service: {{ $item->NameOfService }}
                </p>
                @if($item->TypeOfClient)
                    <p class="text-primary" style="font-size: 0.8rem;">
                        Type: {{ $item->TypeOfClient }}
                    </p>
                @endif
            </div>
        @endforeach
    </div>
</div>
@endsection
