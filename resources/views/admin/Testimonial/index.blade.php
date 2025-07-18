@extends('admin.index')
@section('content')

<div class="row">
    <div class="col-12 text-center">
        <h1>Testimonials</h1>
    </div>

    <div class="col-12 text-end mb-3">
        <a href="{{ route('testimonials.create') }}" class="btn btn-success btn-sm">Create</a>
    </div>

    <div class="col-12">
        <table class="table table-bordered text-center align-middle">
            <thead>
                <tr>
                    <th>№</th>
                    <th>Photo</th>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Stars</th>
                    <th>Student</th>
                    <th colspan="3">Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($testimonials as $testimonial)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            @if($testimonial->photo)
                                <img src="{{ asset('storage/' . $testimonial->photo) }}" alt="Photo" width="50" height="50" style="object-fit: cover; border-radius: 50%;">
                            @else
                                <span>No Photo</span>
                            @endif
                        </td>
                        <td>{{ $testimonial->name }}</td>
                        <td>{{ $testimonial->position ?? '-' }}</td>
                        <td>
                            @for ($i = 0; $i < $testimonial->start_count; $i++)
                                ⭐
                            @endfor
                        </td>
                        <td>{{ $testimonial->student->name ?? '-' }}</td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="{{ route('testimonials.show', $testimonial->id) }}">Show</a>
                        </td>
                        <td>
                            <a class="btn btn-warning btn-sm" href="{{ route('testimonials.edit', $testimonial->id) }}">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('testimonials.destroy', $testimonial->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button onclick="return confirm('Tasdiqlang')" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</div>

@endsection
