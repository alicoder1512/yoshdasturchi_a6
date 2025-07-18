@extends('admin.index')
@section('content')

<div class="row">
    <div class="col-12 text-center mb-3">
        <h1>Edit Testimonial</h1>
    </div>

    <div class="col-12 text-end mb-3">
        <a href="{{ route('testimonials.index') }}" class="btn btn-warning btn-sm">Back</a>
    </div>

    <form class="row g-3" action="{{ route('testimonials.update', $testimonial->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="col-md-6">
            <label for="student_id">Student</label>
            <select id="student_id" name="student_id" class="form-select @error('student_id') is-invalid @enderror" required>
                <option value="">Choose student</option>
                @foreach ($students as $student)
                    <option value="{{ $student->id }}" {{ old('student_id', $testimonial->student_id) == $student->id ? 'selected' : '' }}>
                        {{ $student->name }}
                    </option>
                @endforeach
            </select>
            @error('student_id') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="col-md-6">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="{{ old('name', $testimonial->name) }}" class="form-control @error('name') is-invalid @enderror" required>
            @error('name') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="col-md-6">
            <label for="photo">New Photo</label>
            <input type="file" id="photo" name="photo" class="form-control @error('photo') is-invalid @enderror">
            @error('photo') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="col-md-6">
            <label>Current Photo</label><br>
            @if($testimonial->photo)
                <img src="{{ asset('storage/' . $testimonial->photo) }}" alt="Photo" width="60" height="60" style="object-fit: cover; border-radius: 50%;">
            @else
                <p>No photo uploaded</p>
            @endif
        </div>

        <div class="col-md-6">
            <label for="position">Position</label>
            <input type="text" id="position" name="position" value="{{ old('position', $testimonial->position) }}" class="form-control @error('position') is-invalid @enderror">
            @error('position') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="col-md-6">
            <label for="start_count">Stars (1–5)</label>
            <input type="number" id="start_count" name="start_count" value="{{ old('start_count', $testimonial->start_count) }}" class="form-control @error('start_count') is-invalid @enderror" min="1" max="5" required>
            @error('start_count') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="col-12">
            <label for="comment">Comment</label>
            <textarea id="comment" name="comment" rows="4" class="form-control @error('comment') is-invalid @enderror">{{ old('comment', $testimonial->comment) }}</textarea>
            @error('comment') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="col-12 text-end">
            <button class="btn btn-primary">Update</button>
        </div>
    </form>
</div>

@endsection
