@extends('layout.front')
@section('body')
    <div class="container-fluid">

        <form action="{{ route('course.update',$courses) }}" method="POST" class="form">
            @csrf
            @method('put')
            <table>
        
                    <label for="course_name">course_name</label>
                    <input type="text" name="course_name"class="form-control" value="{{ $courses->course_name }}"><br>
        
                    @if($errors->has('course_name'))
                        <div class="alert alert-danger">
                            <strong style="color: red">
                            <i class="fa fa-warning" style="color: #000000;"></i>&nbsp;&nbsp;&nbsp;
                            {{ $errors->first('course_name') }}
                            &nbsp;&nbsp;&nbsp;<i class="fa fa-warning" style="color: #000000;"></i>
                        </strong>
                        </div>
                        @endif

                        <label for="course_index">course_index</label>
                        <input type="text" name="course_index"class="form-control" value="{{ $courses->course_index }}"><br>
        
                        @if($errors->has('course_index'))
                        <div class="alert alert-danger">
                            <strong style="color: red">
                            <i class="fa fa-warning" style="color: #000000;"></i>&nbsp;&nbsp;&nbsp;
                            {{ $errors->first('course_index') }}
                            &nbsp;&nbsp;&nbsp;<i class="fa fa-warning" style="color: #000000;"></i>
                        </strong>
                        </div>
                        @endif

                        <label for="course_order">course_order</label>
                        <input type="text" name="course_order"class="form-control" value="{{ $courses->course_order }}"><br>

                        @if($errors->has('course_order'))
                        <div class="alert alert-danger">
                            <strong style="color: red">
                            <i class="fa fa-warning" style="color: #000000;"></i>&nbsp;&nbsp;&nbsp;
                            {{ $errors->first('course_order') }}
                            &nbsp;&nbsp;&nbsp;<i class="fa fa-warning" style="color: #000000;"></i>
                        </strong>
                        </div>
                        @endif
            </table>
            <br>
            <a class="link-light"><button type="submit" class="btn btn-success">save</button></a>
                
        </form>
    </div>
@endsection
