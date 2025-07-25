@extends('admin.index')
@section('content')

<div class="row">
    <div class="col-12 text-center mb-3">
        <h1>Edit Fact</h1>
    </div>

    <div class="col-12 text-end mb-3">
        <a href="{{ route('facts.index') }}" class="btn btn-warning btn-sm">Back</a>
    </div>

    <form class="row g-3" action="{{ route('facts.update', $fact->id) }}" method="post">
        @csrf
        @method('PUT')

        <div class="col-md-6">
            <label for="student_id">Student</label>
            <select id="student_id" name="student_id" class="form-select @error('student_id') is-invalid @enderror" required>
                <option value="">Choose student</option>
                @foreach ($students as $student)
                    <option value="{{ $student->id }}" {{ old('student_id', $fact->student_id) == $student->id ? 'selected' : '' }}>
                        {{ $student->name }}
                    </option>
                @endforeach
            </select>
            @error('student_id') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="col-md-6">
            <label for="title">Fact Title</label>
            <input type="text" id="title" name="title" value="{{ old('title', $fact->title) }}" class="form-control @error('title') is-invalid @enderror" required>
            @error('title') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="col-md-6">
            <label for="count">Count</label>
            <input type="number" id="count" name="count" value="{{ old('count', $fact->count) }}" class="form-control @error('count') is-invalid @enderror" min="0" required>
            @error('count') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="col-12 text-end">
            <button class="btn btn-primary">Update</button>
        </div>
    </form>

</div>

@endsection
