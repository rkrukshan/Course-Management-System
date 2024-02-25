@extends('layout.front')
@section('body')
<table>
        
    <label for="student_id">student_id</label>
    <input type="text" name="student_id"class="form-control" value="{{ old('student_id') }}"><br>

    @if($errors->has('student_id'))
        <div class="alert alert-danger">
            <strong style="color: red">
            <i class="fa fa-warning" style="color: #000000;"></i>&nbsp;&nbsp;&nbsp;
            {{ $errors->first('student_id') }}
            &nbsp;&nbsp;&nbsp;<i class="fa fa-warning" style="color: #000000;"></i>
        </strong>
        </div>
        @endif

        <label for="course_id">course_id</label>
        <input type="text" name="course_id"class="form-control" value="{{ old('course_id') }}"><br>

        @if($errors->has('course_id'))
        <div class="alert alert-danger">
            <strong style="color: red">
            <i class="fa fa-warning" style="color: #000000;"></i>&nbsp;&nbsp;&nbsp;
            {{ $errors->first('course_id') }}
            &nbsp;&nbsp;&nbsp;<i class="fa fa-warning" style="color: #000000;"></i>
        </strong>
        </div>
        @endif

        <label for="status">status</label>
        <input type="text" name="status"class="form-control" value="{{ old('status') }}"><br>

        @if($errors->has('status'))
        <div class="alert alert-danger">
            <strong style="color: red">
            <i class="fa fa-warning" style="color: #000000;"></i>&nbsp;&nbsp;&nbsp;
            {{ $errors->first('status') }}
            &nbsp;&nbsp;&nbsp;<i class="fa fa-warning" style="color: #000000;"></i>
        </strong>
        </div>
        @endif
</table>
@endsection