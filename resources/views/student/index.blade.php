@extends('layout.front')
@section('body')
    <section class="bg-dark">
        
        <table class="mt-24 table">
            <thead>
                <tr>
                    <th>Admission no</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>DOB</th>
                    <th>Course Id</th>
                    <th>NIC</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->admission_no }}</td>
                        <td>{{ $student->first_name }}</td>
                        <td>{{ $student->last_name }}</td>
                        <td>{{ $student->gender }}</td>
                        <td>{{ $student->address }}</td>
                        <td>{{ $student->dob }}</td>
                        <td>{{ $student->course_id }}</td>
                        <td>{{ $student->nic }}</td>
                        <td>
                            <a href="{{ route('student.show', $student->id) }}" class="btn btn-success btn-lg">
                                <i class="fa fa-eye"></i> Show
                            </a>
                            <a href="{{ route('student.edit', $student->id) }}" class="btn btn-info btn-lg">
                                <i class="fa fa-pencil"></i> Edit
                            </a>
                            <form action="{{ route('student.destroy', $student->id) }}" method="POST" style="display: inline-block;">
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
