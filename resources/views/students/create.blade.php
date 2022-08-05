@extends('master')
@section('content')
<div class="col-12 mt-5">
    <h1>Create New Students</h1>
    <a href="{{ route('students.index') }}" class="btn btn-primary mb-2">Back to Student List</a>
    {!! Form::open(['method'=>'POST','action'=>'StudentController@store']) !!}
    <div class="row">
        <div class="col-8">
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        {!! Form::label('Enter First Name') !!}
                        {!! Form::text('firstname',null,['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('Enter Last Name') !!}
                        {!! Form::text('lastname',null,['class'=>'form-control']) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-4 mt-3">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
</div>
@endsection