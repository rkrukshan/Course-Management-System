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
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <button type="button"><a href="{{ route('student.index') }}">Back</a></button>
</section>

@endsection
