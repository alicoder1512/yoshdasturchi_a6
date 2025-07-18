@extends('admin.index')
@section('content')

<div class="row">
    <div class="col-12 text-center mb-4">
        <h1>Student Details</h1>
    </div>

    <div class="col-12 text-end mb-3">
        <a href="{{ route('students.index') }}" class="btn btn-secondary btn-sm">Back</a>
        <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning btn-sm">Edit</a>
    </div>

    <div class="col-md-4 text-center mb-4">
        @if($student->photo)
            <img src="{{ asset('storage/' . $student->photo) }}" alt="Photo" width="150" height="150" style="object-fit: cover; border-radius: 50%;">
        @else
            <p>No photo uploaded</p>
        @endif
        <h4 class="mt-2">{{ $student->name }}</h4>
        <p class="text-muted">{{ $student->job ?? 'No job info' }}</p>
    </div>

    <div class="col-md-8">
        <ul class="list-group">
            <li class="list-group-item"><strong>Email:</strong> {{ $student->email }}</li>
            <li class="list-group-item"><strong>Phone:</strong> {{ $student->phone ?? '-' }}</li>
            <li class="list-group-item"><strong>Telegram:</strong> {{ $student->telegram_username ?? '-' }}</li>
            <li class="list-group-item"><strong>Birthday:</strong> {{ $student->birthday ?? '-' }} ({{ $student->birthday ? \Carbon\Carbon::parse($student->birthday)->age . ' years old' : '' }})</li>
            <li class="list-group-item"><strong>City:</strong> {{ $student->city ?? '-' }}</li>
            <li class="list-group-item"><strong>Degree:</strong> {{ $student->degree ?? '-' }}</li>
            <li class="list-group-item"><strong>Website:</strong>
                @if($student->website)
                    <a href="{{ $student->website }}" target="_blank">{{ $student->website }}</a>
                @else
                    -
                @endif
            </li>
            <li class="list-group-item">
                <strong>About:</strong>
                <p class="mt-1 mb-0">{{ $student->about ?? 'No information provided.' }}</p>
            </li>
        </ul>
    </div>
</div>

@endsection
