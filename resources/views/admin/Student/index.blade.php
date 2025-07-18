@extends('admin.index')
@section('content')

<div class="row">
    <div class="col-12 text-center">
        <h1>students</h1>
    </div>

    <div class="col-12 text-end">
        <a href="{{ route('students.create') }}" class="btn btn-success btn-sm">Create</a>
    </div>

    <div class="col-12">
        <table class="table text-center">
            <thead>
                <tr>
                    <th>№</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Age</th>
                    <th>Phone</th>
                    <th colspan="3">Action</th>
                </tr>
            </thead>
            
            <tbody>
                @foreach ($students as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->name }}</td>
                        <td>
                            @if($user->photo)
                                <img src="{{ asset('storage/' . $user->photo) }}" alt="Photo" width="50" height="50" style="object-fit: cover; border-radius: 50%;">
                            @else
                                <span>No Image</span>
                            @endif
                        </td>
                        <td>
                            @if($user->birthday)
                                {{ \Carbon\Carbon::parse($user->birthday)->age }} yosh
                            @else
                                <span>-</span>
                            @endif
                        </td>
                        <td>{{ $user->phone ?? '-' }}</td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="{{ route('students.show', $user->id) }}">Show</a>
                        </td>
                        <td>
                            <a class="btn btn-warning btn-sm" href="{{ route('students.edit', $user->id) }}">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('students.destroy', $user->id) }}" method="post">
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
