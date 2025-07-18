@extends('admin.index')
@section('content')

<div class="row">
    <div class="col-12 text-center mb-4">
        <h1>Testimonial Details</h1>
    </div>

    <div class="col-12 text-end mb-3">
        <a href="{{ route('testimonials.index') }}" class="btn btn-secondary btn-sm">Back</a>
        <a href="{{ route('testimonials.edit', $testimonial->id) }}" class="btn btn-warning btn-sm">Edit</a>
    </div>

    <div class="col-md-4 text-center mb-4">
        @if($testimonial->photo)
            <img src="{{ asset('storage/' . $testimonial->photo) }}" alt="Photo" width="150" height="150" style="object-fit: cover; border-radius: 50%;">
        @else
            <p>No photo uploaded</p>
        @endif
        <h4 class="mt-2">{{ $testimonial->name }}</h4>
        <p class="text-muted">{{ $testimonial->position ?? 'No position info' }}</p>
    </div>

    <div class="col-md-8">
        <ul class="list-group">
            <li class="list-group-item"><strong>Stars:</strong>
                @for ($i = 0; $i < $testimonial->start_count; $i++) ⭐ @endfor
            </li>
            <li class="list-group-item"><strong>Student:</strong> {{ $testimonial->student->name ?? 'N/A' }}</li>
            <li class="list-group-item"><strong>Student Email:</strong> {{ $testimonial->student->email ?? '-' }}</li>
            <li class="list-group-item"><strong>Student Phone:</strong> {{ $testimonial->student->phone ?? '-' }}</li>
            <li class="list-group-item">
                <strong>Comment:</strong>
                <p class="mt-2 mb-0">{{ $testimonial->comment ?? 'No comment provided.' }}</p>
            </li>
        </ul>
    </div>
</div>

@endsection
