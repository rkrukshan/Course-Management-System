@extends('layout.front')
@section('body')
    <section class="bg-dark">
        <a href="{{ route('course.create') }}" class="btn btn-primary btn-lg">Create</a>
        <table class="mt-24 table">
            <thead>
                <tr>
                    <th>Course Name</th>
                    <th>Course Index</th>
                    <th>Course Order</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($courses as $course)
                    <tr>
                        <td>{{ $course->course_name }}</td>
                        <td>{{ $course->course_index }}</td>
                        <td>{{ $course->course_order }}</td>
                        <td>
                            
                            <a href="{{ route('course.edit', $course->id) }}" class="btn btn-info btn-lg">
                                <i class="fa fa-pencil"></i> Edit
                            </a>
                            <form action="{{ route('course.destroy', $course->id) }}" method="POST"
                                style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-lg">
                                    <i class="fa fa-trash"></i> Delete
                                </button>
                            </form>
                            <a href="{{ route('course.show', $course->id) }}" class="btn btn-primary btn-lg">
                                <i class="fa fa-check"></i> Apply
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection
