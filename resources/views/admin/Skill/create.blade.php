@extends('admin.index')
@section('content')

<div class="row">
    <div class="col-12 text-center">
        <h1>Create Skill</h1>
    </div>

    <div class="col-12 text-end mb-3">
        <a href="{{ route('skills.index') }}" class="btn btn-warning btn-sm">Back</a>
    </div>

    <form class="row g-3" action="{{ route('skills.store') }}" method="post">
        @csrf
        @method('POST')

        <div class="col-md-6">
            <label for="student_id">Student</label>
            <select id="student_id" name="student_id" class="form-select @error('student_id') is-invalid @enderror" required>
                <option value="">Choose student</option>
                @foreach ($students as $student)
                    <option value="{{ $student->id }}" {{ old('student_id') == $student->id ? 'selected' : '' }}>
                        {{ $student->name }}
                    </option>
                @endforeach
            </select>
            @error('student_id') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="col-md-6">
            <label for="title">Skill Title</label>
            <input type="text" id="title" name="title" value="{{ old('title') }}" class="form-control @error('title') is-invalid @enderror" required>
            @error('title') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="col-md-6">
            <label for="procent">Procent (%)</label>
            <input type="number" id="procent" name="procent" value="{{ old('procent') }}" class="form-control @error('procent') is-invalid @enderror" min="0" max="100" required>
            @error('procent') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="col-12 text-end">
            <button class="btn btn-success">Create</button>
        </div>
    </form>
</div>

@endsection
