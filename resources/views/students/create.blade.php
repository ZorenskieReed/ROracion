@extends('layouts.app')

@section('title', 'Enrollment Module')

@section('contents')
    <h1 class="mb-0">Add New Student Form</h1>
    <hr />
    <form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col-1">
                <input type="text" name="student_code" class="form-control" placeholder="No.">
            </div>
            <div class="col">
                <label for="firstname">FirstName</label>
                <input type="text" class="form-control" name="firstname" placeholder="Enter your firstname">
            </div>
            <div class="col">
                <label for="lastname">LastName</label>
                <input type="text" class="form-control" name="lastname" placeholder="Enter your lastname">
            </div>
            <div class="col">
                <label for="middlename">MiddleName</label>
                <input type="text" class="form-control" name="middlename" placeholder="Enter your middlename">
            </div>
            <div class="col-1">
                <div class="form-group">
                    <label for="suffix">Suffix</label>
                    <select class="form-control" name="suffix">
                        <option selected></option>
                        <option value="Jr.">Jr.</option>
                        <option value="Sr.">Sr.</option>
                        <option value="I">I</option>
                        <option value="II">II</option>
                        <option value="III">III</option>
                        <option value="IV">IV</option>
                    </select>
                </div>
            </div>
                <div class="col-1">
                    <label for="gender">Gender</label>
                    <select class="form-control" name="gender">
                        <option selected></option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <div class="form-group">
                    <label for="dateofbirth">Date of Birth</label>
                    <input type="date" class="form-control" name="dateofbirth" placeholder="BirthDate">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="address">Address</label>
                    <textarea class="form-control" name="address" placeholder="Address"></textarea>
                </div>
            </div>
            <div class="col">
                <label for="tutor">Tutor and Appointment</label>
                <select class="form-control" name="tutor">
                    <option selected></option>
                    <option value="ORACION_M/W/F_7am-11am">ORACION M/W/F 7am-11am</option>
                    <option value="PONTIJON_M/W/F_1pm-4pm">PONTIJON M/W/F 1pm-4pm</option>
                    <option value="JANIER_T/TH/S_7am-11am">JANIER T/TH/S 7am-11am</option>
                    <option value="BONITE_T/TH/S_1pm-4pm">BONITE T/TH/S 1pm-4pm</option>
                </select>
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
