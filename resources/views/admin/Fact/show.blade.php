@extends('admin.index')
@section('content')

<div class="row">
    <div class="col-12 text-center mb-4">
        <h1>Fact Details</h1>
    </div>

    <div class="col-12 text-end mb-3">
        <a href="{{ route('facts.index') }}" class="btn btn-secondary btn-sm">Back</a>
        <a href="{{ route('facts.edit', $fact->id) }}" class="btn btn-warning btn-sm">Edit</a>
    </div>

    <div class="col-md-4 text-center mb-4">
        @if($fact->student && $fact->student->photo)
            <img src="{{ asset('storage/' . $fact->student->photo) }}" alt="Student Photo" width="150" height="150" style="object-fit: cover; border-radius: 50%;">
        @else
            <p>No student photo</p>
        @endif
        <h4 class="mt-2">{{ $fact->student->name ?? 'Unknown Student' }}</h4>
    </div>

    <div class="col-md-8">
        <ul class="list-group">
            <li class="list-group-item"><strong>Fact Title:</strong> {{ $fact->title }}</li>
            <li class="list-group-item"><strong>Count:</strong> {{ $fact->count }}</li>
            <li class="list-group-item"><strong>Student:</strong> {{ $fact->student->name ?? 'N/A' }}</li>
            <li class="list-group-item"><strong>Student Email:</strong> {{ $fact->student->email ?? '-' }}</li>
            <li class="list-group-item"><strong>Student Phone:</strong> {{ $fact->student->phone ?? '-' }}</li>
        </ul>
    </div>
</div>

@endsection
