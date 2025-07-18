@extends('admin.index')
@section('content')

<div class="row">
    <div class="col-12 text-center">
        <h1>Facts</h1>
    </div>

    <div class="col-12 text-end mb-3">
        <a href="{{ route('facts.create') }}" class="btn btn-success btn-sm">Create</a>
    </div>

    <div class="col-12">
        <table class="table text-center table-bordered">
            <thead>
                <tr>
                    <th>№</th>
                    <th>Student</th>
                    <th>Title</th>
                    <th>Count</th>
                    <th colspan="3">Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($facts as $fact)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $fact->student->name ?? '-' }}</td>
                        <td>{{ $fact->title }}</td>
                        <td>{{ $fact->count }}</td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="{{ route('facts.show', $fact->id) }}">Show</a>
                        </td>
                        <td>
                            <a class="btn btn-warning btn-sm" href="{{ route('facts.edit', $fact->id) }}">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('facts.destroy', $fact->id) }}" method="POST">
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
