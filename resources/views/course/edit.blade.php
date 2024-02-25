@extends('layout.front')
@section('body')
    <div class="container-fluid">

        <form action="{{ route('student.edit') }}" method="POST">
            @csrf
            <div class="container">
                <h1 class="h1 text-center">Student</h1>
                <div class="row">
                    <div class="mb-3 col-6">
                        <label for="admition_no" class="form-label">Admition N.O</label>
                        <input value="old('admition_no')" type="text" class="form-control" name="admition_no">
                        @if($errors->has('admition_no'))
                        <span style="color: red">{{ $errors->first('admission_no') }}</span>
                        @endif
                    </div>
                    <div class="mb-3 col-6">
                        <label for="first_name" class="form-label">First Name</label>
                        <input value="old('first_name')" type="text" class="form-control" name="first_name">
                    </div>
                    <div class="mb-3 col-6">
                        <label for="last_name" class="form-label">Last Name</label>
                        <input value="old('last_name')" type="password" class="form-control" name="last_name">
                    </div>


                    <div class="mb-3 col-6">
                        <label for="gender" class="form-label">Gender</label>
                        <input value="old('gender')" type="email" class="form-control" name="gender">
                    </div>


                    <div class="row">
                        <div class="mb-3 col-6">
                            <label for="address" class="form-label">Address</label>
                            <input value="old('address')" type="address" class="form-control" name="address">

                            <div class="mb-3 col-6">
                                <label for="dob" class="form-label">Date of Birth</label>
                                <input value="old('dob')" type="date" class="form-control" name="" id="dob">
                            </div>
                            <div class="mb-3 col-6">
                                <label for="courseid" class="form-label">Course Id</label>
                                <input value="old('courseid')" type="text" class="form-control" name="courseid">
                            </div>
                            <div class="mb-3 col-6">
                                <label for="nic" class="form-label">NIC</label>
                                <input value="old('nic')" type="text" class="form-control" name="" id="nic">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
