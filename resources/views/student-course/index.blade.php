@extends('layout.front')
@section('body')
    <section class="bg-dark">
        <a href="{{ route('teacher.create') }}" class="btn btn-primary btn-lg">Create</a>
        <table class="mt-24 table">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>DOB</th>
                    <th>NIC</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teachers as $teacher)
                    <tr>
                        <td>{{ $teacher->first_name }}</td>
                        <td>{{ $teacher->last_name }}</td>
                        <td>{{ $teacher->gender }}</td>
                        <td>{{ $teacher->address }}</td>
                        <td>{{ $teacher->dob }}</td>
                        <td>{{ $teacher->nic }}</td>
                        <td>
                            <a href="{{ route('teacher.show', $teacher->id) }}" class="btn btn-success btn-lg">
                                <i class="fa fa-eye"></i> Show
                            </a>
                            <a href="{{ route('teacher.edit', $teacher->id) }}" class="btn btn-info btn-lg">
                                <i class="fa fa-pencil"></i> Edit
                            </a>
                            <form action="{{ route('teacher.destroy', $teacher->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-lg">
                                    <i class="fa fa-trash"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection
