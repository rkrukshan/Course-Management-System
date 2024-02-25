@extends('layout.front')
@section('body')
    <div class="container-fluid">
        <form action="{{ route('teacher.show',$teachers) }}" method="POST" class="form">
            @csrf
            @method('put')
            <table>
        
                    <label for="first_name">first_name</label>
                    <input type="text" name="first_name"class="form-control" value="{{ $teachers->first_name }}"><br>
        
                    @if($errors->has('first_name'))
                        <div class="alert alert-danger">
                            <strong style="color: red">
                            <i class="fa fa-warning" style="color: #000000;"></i>&nbsp;&nbsp;&nbsp;
                            {{ $errors->first('first_name') }}
                            &nbsp;&nbsp;&nbsp;<i class="fa fa-warning" style="color: #000000;"></i>
                        </strong>
                        </div>
                        @endif
        
                    <label for="subject_order">last_name</label>
                    <input type="text" name="last_name" class="form-control" value="{{ $teachers->last_name }}">
                    @if($errors->has('last_name'))
                        <div class="alert alert-danger">
                            <strong style="color: red">
                            <i class="fa fa-warning" style="color: #000000;"></i>&nbsp;&nbsp;&nbsp;
                            {{$errors->first('last_name') }}
                            &nbsp;&nbsp;&nbsp;<i class="fa fa-warning" style="color: #000000;"></i>
                        </strong>
                        </div>
                        @endif


                        <label for="gender">gender</label>
                    <input type="text" name="gender" class="form-control" value="{{ $teachers->gender }}">
                    @if($errors->has('gender'))
                        <div class="alert alert-danger">
                            <strong style="color: red">
                            <i class="fa fa-warning" style="color: #000000;"></i>&nbsp;&nbsp;&nbsp;
                            {{$errors->first('gender') }}
                            &nbsp;&nbsp;&nbsp;<i class="fa fa-warning" style="color: #000000;"></i>
                        </strong>
                        </div>
                        @endif


                        <label for="address">address</label>
                    <input type="text" name="address" class="form-control" value="{{ $teachers->address }}">
                    @if($errors->has('address'))
                        <div class="alert alert-danger">
                            <strong style="color: red">
                            <i class="fa fa-warning" style="color: #000000;"></i>&nbsp;&nbsp;&nbsp;
                            {{$errors->first('address') }}
                            &nbsp;&nbsp;&nbsp;<i class="fa fa-warning" style="color: #000000;"></i>
                        </strong>
                        </div>
                        @endif


                        <label for="dob">dob</label>
                    <input type="date" name="dob" class="form-control" value="{{ $teachers->dob }}">
                    @if($errors->has('dob'))
                        <div class="alert alert-danger">
                            <strong style="color: red">
                            <i class="fa fa-warning" style="color: #000000;"></i>&nbsp;&nbsp;&nbsp;
                            {{$errors->first('dob') }}
                            &nbsp;&nbsp;&nbsp;<i class="fa fa-warning" style="color: #000000;"></i>
                        </strong>
                        </div>
                        @endif

                        <label for="nic">nic</label>
                    <input type="text" name="nic" class="form-control" value="{{$teachers->nic }}">
                    @if($errors->has('nic'))
                        <div class="alert alert-danger">
                            <strong style="color: red">
                            <i class="fa fa-warning" style="color: #000000;"></i>&nbsp;&nbsp;&nbsp;
                            {{$errors->first('nic') }}
                            &nbsp;&nbsp;&nbsp;<i class="fa fa-warning" style="color: #000000;"></i>
                        </strong>
                        </div>
                        @endif
            </table>
            <br>
            <a class="link-light" href="{{route('teacher.index')}}"><button type="button" class="btn btn-success">Back</button></a>
                
        </form>
    </div>
@endsection
