@extends('admin.index')
@section('content')

<div class="row">
    <div class="col-12 text-center">
        <h1>Create Student</h1>
    </div>

    <div class="col-12 text-end mb-3">
        <a href="{{ route('students.index') }}" class="btn btn-warning btn-sm">Back</a>
    </div>

    <form class="row g-3" action="{{ route('students.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('POST')

        <div class="col-md-6">
            <label for="name">Name</label>
            <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required>
            @error('name') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="col-md-6">
            <label for="email">Email</label>
            <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>
            @error('email') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="col-md-6">
            <label for="photo">Photo</label>
            <input type="file" id="photo" class="form-control @error('photo') is-invalid @enderror" name="photo">
            @error('photo') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="col-md-6">
            <label for="job">Job</label>
            <input type="text" id="job" class="form-control @error('job') is-invalid @enderror" name="job" value="{{ old('job') }}">
            @error('job') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="col-md-6">
            <label for="birthday">Birthday</label>
            <input type="date" id="birthday" class="form-control @error('birthday') is-invalid @enderror" name="birthday" value="{{ old('birthday') }}">
            @error('birthday') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="col-md-6">
            <label for="phone">Phone</label>
            <input type="text" id="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}">
            @error('phone') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="col-md-6">
            <label for="telegram_username">Telegram Username</label>
            <input type="text" id="telegram_username" class="form-control @error('telegram_username') is-invalid @enderror" name="telegram_username" value="{{ old('telegram_username') }}">
            @error('telegram_username') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="col-md-6">
            <label for="website">Website</label>
            <input type="text" id="website" class="form-control @error('website') is-invalid @enderror" name="website" value="{{ old('website') }}">
            @error('website') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="col-md-6">
            <label for="city">City</label>
            <input type="text" id="city" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}">
            @error('city') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="col-md-6">
            <label for="degree">Degree</label>
            <input type="text" id="degree" class="form-control @error('degree') is-invalid @enderror" name="degree" value="{{ old('degree') }}">
            @error('degree') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="col-12">
            <label for="about">About</label>
            <textarea id="about" rows="4" class="form-control @error('about') is-invalid @enderror" name="about">{{ old('about') }}</textarea>
            @error('about') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="col-12 text-end">
            <button class="btn btn-success">Create</button>
        </div>
    </form>
</div>

@endsection
