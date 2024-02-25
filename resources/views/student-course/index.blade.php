@extends('layout.front')
@section('body')
    <section class="bg-dark">
        <a href="{{ route('studentCourse.create') }}" class="btn btn-primary btn-lg">Create</a>
        <table class="mt-24 table">
            <thead>
                <tr>

                    <th>student id</th>
                    <th>course id</th>
                    <th>status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($studentcourses as $studentcourse)
                    <tr>
                        <td>{{ $studentcourse->student->first_name }} {{ $studentcourse->student->last_name }}</td>

                        <td>{{ $studentcourse->course->course_name }}</td>
                        <td>{{$studentcourse->status}}</td>
                        <td>
                            <a href="{{ route('accept', $studentcourse->id) }}" class="btn btn-success btn-lg">
                                Accept
                            </a>
                            <a href="{{ route('reject', $studentcourse->id) }}" class="btn btn-danger btn-lg">
                                Reject
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection
