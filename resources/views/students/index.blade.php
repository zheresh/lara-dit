@extends('master')
@section('content')
<div class="col-12 mt-5">
    <h1>Students List</h1>
    <a href="{{ route('students.create') }}" class="btn btn-primary mb-2"> New Entry</a>
    <table class="table table-bordered table-condensed">
        <thead>
            <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $d)
            <tr>
                <td>{{ $d->id }}</td>
                <td>{{ $d->firstname }}</td>
                <td>{{ $d->lastname }}</td>
                <td></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection