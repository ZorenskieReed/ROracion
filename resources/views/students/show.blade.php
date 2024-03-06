@extends('layouts.app')

@section('title', 'Show Students')

@section('contents')
    <h1 class="mb-0">Details of the Student</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">FirstName</label>
            <input type="text" name="firstname" class="form-control" placeholder="First Name" value="{{ $student->firstname }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Last Name</label>
            <input type="text" name="lastname" class="form-control" placeholder="Last Name" value="{{ $student->lastname }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Middle Name</label>
            <input type="text" name="middlename" class="form-control" placeholder="Middle Name" value="{{ $student->middlename }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Suffix</label>
            <textarea class="form-control" name="suffix" placeholder="Suffix" readonly>{{ $student->suffix }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Date of Birth</label>
            <input type="text" name="dateofbirth" class="form-control" placeholder="Date of Bird At" value="{{ $student->dateofbirth }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Address</label>
            <input type="text" name="address" class="form-control" placeholder="Address" value="{{ $student->address }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Tutor</label>
            <input type="text" name="tutor" class="form-control" placeholder="Tutor" value="{{ $student->tutor }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $student->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $student->updated_at }}" readonly>
        </div>
    </div>
@endsection
