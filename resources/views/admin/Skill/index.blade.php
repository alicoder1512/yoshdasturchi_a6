@extends('admin.index')
@section('content')

<div class="row">
    <div class="col-12 text-center">
        <h1>Skills</h1>
    </div>

    <div class="col-12 text-end mb-3">
        <a href="{{ route('skills.create') }}" class="btn btn-success btn-sm">Create</a>
    </div>

    <div class="col-12">
        <table class="table text-center">
            <thead>
                <tr>
                    <th>№</th>
                    <th>Student</th>
                    <th>Title</th>
                    <th>Percent</th>
                    <th colspan="3">Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($skills as $skill)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $skill->student->name ?? '-' }}</td>
                        <td>{{ $skill->title }}</td>
                        <td>{{ $skill->procent }}%</td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="{{ route('skills.show', $skill->id) }}">Show</a>
                        </td>
                        <td>
                            <a class="btn btn-warning btn-sm" href="{{ route('skills.edit', $skill->id) }}">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('skills.destroy', $skill->id) }}" method="POST">
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
