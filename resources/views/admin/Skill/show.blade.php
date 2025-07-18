@extends('admin.index')
@section('content')

<div class="row">
    <div class="col-12 text-center mb-4">
        <h1>Skill Details</h1>
    </div>

    <div class="col-12 text-end mb-3">
        <a href="{{ route('skills.index') }}" class="btn btn-secondary btn-sm">Back</a>
        <a href="{{ route('skills.edit', $skill->id) }}" class="btn btn-warning btn-sm">Edit</a>
    </div>

    <div class="col-md-4 text-center mb-4">
        @if($skill->student && $skill->student->photo)
            <img src="{{ asset('storage/' . $skill->student->photo) }}" alt="Student Photo" width="150" height="150" style="object-fit: cover; border-radius: 50%;">
        @else
            <p>No student photo</p>
        @endif
        <h4 class="mt-2">{{ $skill->student->name ?? 'Unknown Student' }}</h4>
    </div>

    <div class="col-md-8">
        <ul class="list-group">
            <li class="list-group-item"><strong>Skill Title:</strong> {{ $skill->title }}</li>
            <li class="list-group-item"><strong>Procent:</strong> {{ $skill->procent }}%</li>
            <li class="list-group-item"><strong>Student:</strong> {{ $skill->student->name ?? 'N/A' }}</li>
            <li class="list-group-item"><strong>Student Email:</strong> {{ $skill->student->email ?? '-' }}</li>
            <li class="list-group-item"><strong>Student Phone:</strong> {{ $skill->student->phone ?? '-' }}</li>
        </ul>
    </div>
</div>

@endsection
