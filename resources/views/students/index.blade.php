@extends('layouts.app')

@section('title', 'Home Student')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Student</h1>
        <a href="{{ route('students.create') }}" class="btn btn-primary">Add Student</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Middle Name</th>
            <th>Suffix</th>
            <th>Gender</th>
            <th>Date of Birth</th>
            <th>Address</th>
            <th>Tutor and Appointment</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>+
        @if($student->count() > 0)
            @foreach($student as $rs)
                <tr>
                    <td class="align-middle">{{ $loop->iteration }}</td>
                    <td class="align-middle">{{ $rs->firstname }}</td>
                    <td class="align-middle">{{ $rs->lastname }}</td>
                    <td class="align-middle">{{ $rs->middlename }}</td>
                    <td class="align-middle">{{ $rs->suffix }}</td>
                    <td class="align-middle">{{ $rs->gender }}</td>
                    <td class="align-middle">{{ $rs->dateofbirth }}</td>
                    <td class="align-middle">{{ $rs->address }}</td>
                    <td class="align-middle">{{ $rs->tutor }}</td>
                    <td class="align-middle">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ route('students.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                            <a href="{{ route('students.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                            <form action="{{ route('students.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger m-0">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td class="text-center" colspan="5">Student not found</td>
            </tr>
        @endif
        </tbody>
    </table>
@endsection
