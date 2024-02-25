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
            
                <tr>
                    <td>{{ $students->admission_no }}</td>
                    <td>{{ $students->first_name }}</td>
                    <td>{{ $students->last_name }}</td>
                    <td>{{ $students->gender }}</td>
                    <td>{{ $students->address }}</td>
                    <td>{{ $students->dob }}</td>
                    <td>{{ $students->course_id }}</td>
                    <td>{{ $students->nic }}</td>
                    <td>
                    </td>
                </tr>
            
        </tbody>
    </table>
    <button type="button"><a href="{{ route('student.index') }}">Back</a></button>
</section>

@endsection
